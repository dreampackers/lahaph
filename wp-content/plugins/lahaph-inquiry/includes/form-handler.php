<?php
/**
 * 문의 폼 숏코드 및 제출 처리
 *
 * 숏코드: [lahaph_inquiry_form]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ---------------------------------------------------------------
 * 1. 숏코드 등록
 * ------------------------------------------------------------- */
add_shortcode( 'lahaph_inquiry_form', 'lahaph_inquiry_render_form' );

function lahaph_inquiry_render_form() {
	// 제출 완료 후 리다이렉트 쿼리 파라미터
	if ( isset( $_GET['inquiry'] ) && 'sent' === $_GET['inquiry'] ) {
		return '<div class="lahaph-inquiry-success" style="padding:24px;background:#F0FAF0;border-radius:8px;color:#1E2F6F;font-weight:700;text-align:center">'
			. esc_html__( '문의가 접수되었습니다. 빠른 시일 내에 연락드리겠습니다.', 'lahaph-inquiry' )
			. '</div>';
	}

	$programs = array(
		''               => '— 관심 과정을 선택하세요 —',
		'academy'        => '아카데미',
		'art-college'    => 'ART COLLEGE',
		'musical'        => '뮤지컬',
		'general'        => '일반 문의',
	);

	ob_start();
	?>
	<div class="lahaph-inquiry-wrap" style="max-width:640px">
		<form method="post" action="" class="lahaph-inquiry-form" novalidate>
			<?php wp_nonce_field( 'lahaph_inquiry_submit', 'lahaph_inquiry_nonce' ); ?>
			<input type="hidden" name="lahaph_inquiry_action" value="submit">

			<p>
				<label for="li_name">이름 <span aria-hidden="true">*</span></label><br>
				<input type="text" id="li_name" name="li_name" required
					style="width:100%;padding:10px 14px;border:1px solid #CCCCCC;border-radius:6px;font-size:1rem"
					value="<?php echo isset( $_POST['li_name'] ) ? esc_attr( wp_unslash( $_POST['li_name'] ) ) : ''; ?>">
			</p>

			<p>
				<label for="li_phone">연락처 <span aria-hidden="true">*</span></label><br>
				<input type="tel" id="li_phone" name="li_phone" required
					style="width:100%;padding:10px 14px;border:1px solid #CCCCCC;border-radius:6px;font-size:1rem"
					value="<?php echo isset( $_POST['li_phone'] ) ? esc_attr( wp_unslash( $_POST['li_phone'] ) ) : ''; ?>">
			</p>

			<p>
				<label for="li_email">이메일</label><br>
				<input type="email" id="li_email" name="li_email"
					style="width:100%;padding:10px 14px;border:1px solid #CCCCCC;border-radius:6px;font-size:1rem"
					value="<?php echo isset( $_POST['li_email'] ) ? esc_attr( wp_unslash( $_POST['li_email'] ) ) : ''; ?>">
			</p>

			<p>
				<label for="li_program">관심 과정</label><br>
				<select id="li_program" name="li_program"
					style="width:100%;padding:10px 14px;border:1px solid #CCCCCC;border-radius:6px;font-size:1rem;background:#FFFFFF">
					<?php foreach ( $programs as $val => $label ) : ?>
						<option value="<?php echo esc_attr( $val ); ?>"
							<?php selected( isset( $_POST['li_program'] ) ? $_POST['li_program'] : '', $val ); ?>>
							<?php echo esc_html( $label ); ?>
						</option>
					<?php endforeach; ?>
				</select>
			</p>

			<p>
				<label for="li_message">문의 내용 <span aria-hidden="true">*</span></label><br>
				<textarea id="li_message" name="li_message" required rows="6"
					style="width:100%;padding:10px 14px;border:1px solid #CCCCCC;border-radius:6px;font-size:1rem;resize:vertical"><?php echo isset( $_POST['li_message'] ) ? esc_textarea( wp_unslash( $_POST['li_message'] ) ) : ''; ?></textarea>
			</p>

			<p>
				<button type="submit"
					style="background-color:var(--wp--preset--color--primary-green,#46C449);color:#FFFFFF;border:none;border-radius:6px;padding:14px 32px;font-size:1rem;font-weight:700;cursor:pointer">
					문의 보내기
				</button>
			</p>
		</form>
	</div>
	<?php
	return ob_get_clean();
}


/* ---------------------------------------------------------------
 * 2. 폼 제출 처리 (init 훅)
 * ------------------------------------------------------------- */
add_action( 'init', 'lahaph_inquiry_handle_submit' );

function lahaph_inquiry_handle_submit() {
	if ( ! isset( $_POST['lahaph_inquiry_action'] ) || 'submit' !== $_POST['lahaph_inquiry_action'] ) {
		return;
	}

	// Nonce 검증
	if ( ! isset( $_POST['lahaph_inquiry_nonce'] )
		|| ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['lahaph_inquiry_nonce'] ) ), 'lahaph_inquiry_submit' )
	) {
		wp_die( esc_html__( '보안 검사에 실패했습니다. 다시 시도해 주세요.', 'lahaph-inquiry' ) );
	}

	// 필수 필드 검증
	$name    = sanitize_text_field( wp_unslash( $_POST['li_name'] ?? '' ) );
	$phone   = sanitize_text_field( wp_unslash( $_POST['li_phone'] ?? '' ) );
	$email   = sanitize_email( wp_unslash( $_POST['li_email'] ?? '' ) );
	$program = sanitize_text_field( wp_unslash( $_POST['li_program'] ?? '' ) );
	$message = sanitize_textarea_field( wp_unslash( $_POST['li_message'] ?? '' ) );

	if ( empty( $name ) || empty( $phone ) || empty( $message ) ) {
		// 필수 필드 누락 시 원래 페이지로 복귀 (폼에서 HTML5 검증으로 1차 방어)
		return;
	}

	// DB 저장
	global $wpdb;
	$table = $wpdb->prefix . 'lahaph_inquiries';

	$wpdb->insert(
		$table,
		array(
			'name'             => $name,
			'phone'            => $phone,
			'email'            => $email,
			'program_interest' => $program,
			'message'          => $message,
			'submitted_at'     => current_time( 'mysql' ),
			'status'           => 'new',
		),
		array( '%s', '%s', '%s', '%s', '%s', '%s', '%s' )
	);

	// 관리자 이메일 알림 (선택적)
	$admin_email = get_option( 'admin_email' );
	if ( $admin_email ) {
		$subject = sprintf( '[%s] 새 문의가 접수되었습니다', get_bloginfo( 'name' ) );
		$body    = sprintf(
			"이름: %s\n연락처: %s\n이메일: %s\n관심 과정: %s\n\n문의 내용:\n%s",
			$name, $phone, $email, $program, $message
		);
		wp_mail( $admin_email, $subject, $body );
	}

	// 성공 리다이렉트
	$redirect = add_query_arg( 'inquiry', 'sent', wp_get_referer() ?: get_permalink() );
	wp_safe_redirect( $redirect );
	exit;
}
