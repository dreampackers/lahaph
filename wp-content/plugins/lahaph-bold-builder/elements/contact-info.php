<?php
/**
 * Bold Page Builder Element: 연락처 정보
 * Shortcode: [lahaph_contact_info]
 *
 * WordPress 옵션 또는 직접 입력 값으로 연락처 정보를 표시합니다.
 *
 * 파라미터:
 *   address     - 주소
 *   phone       - 전화번호
 *   email       - 이메일
 *   hours       - 운영 시간
 *   youtube_url - 유튜브 링크
 *   blog_url    - 블로그 링크
 *   show_map    - 카카오/구글맵 iframe embed 표시 (yes|no)
 *   map_embed   - iframe 전체 HTML 또는 URL
 *   layout      - vertical|horizontal
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ── 숏코드 렌더 (BBP 미활성 시 폴백) ───────────────────── */
add_shortcode( 'lahaph_contact_info', 'lahaph_bb_render_contact_info' );

function lahaph_bb_render_contact_info( array $atts ): string {
	$a = shortcode_atts( [
		'address'       => '서울특별시 마포구 서교동 408-18 스페이스빌딩 5층',
		'phone'         => '02-337-2004',
		'email'         => 'musicaln@naver.com',
		'hours'         => '',
		'youtube_url'   => 'https://www.youtube.com/channel/UCpkCPxWdDI18VV6JGLGTKJw',
		'blog_url'      => 'https://blog.naver.com/musicaln',
		'show_map'      => 'no',
		'map_embed_url' => '',
		'layout'        => 'vertical',
	], $atts );

	$is_horizontal = 'horizontal' === $a['layout'] && 'yes' === $a['show_map'];
	$phone_clean   = preg_replace( '/\D/', '', $a['phone'] );

	ob_start();

	if ( $is_horizontal ) {
		echo '<div class="lahaph-bb-contact lahaph-bb-contact--horizontal">';
	} else {
		echo '<div class="lahaph-bb-contact lahaph-bb-contact--vertical">';
	}

	// 지도 (가로 레이아웃 or 상단 표시)
	if ( 'yes' === $a['show_map'] && $a['map_embed_url'] ) :
		?>
		<div class="lahaph-bb-contact__map">
			<iframe
				src="<?php echo esc_url( $a['map_embed_url'] ); ?>"
				width="100%"
				height="380"
				style="border:0;border-radius:8px"
				allowfullscreen=""
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"
				title="라하프 위치 지도"
			></iframe>
		</div>
	<?php elseif ( 'yes' === $a['show_map'] ) : ?>
		<div class="lahaph-bb-contact__map lahaph-bb-contact__map--empty">
			<p>지도 embed URL을 입력해 주세요.</p>
		</div>
	<?php endif; ?>

	<!-- 연락처 정보 -->
	<div class="lahaph-bb-contact__info">

		<?php if ( $a['address'] ) : ?>
			<div class="lahaph-bb-contact__row">
				<span class="lahaph-bb-contact__icon">📍</span>
				<div>
					<strong class="lahaph-bb-contact__label">주소</strong>
					<address class="lahaph-bb-contact__value"><?php echo nl2br( esc_html( $a['address'] ) ); ?></address>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( $a['phone'] ) : ?>
			<div class="lahaph-bb-contact__row">
				<span class="lahaph-bb-contact__icon">📞</span>
				<div>
					<strong class="lahaph-bb-contact__label">전화</strong>
					<a class="lahaph-bb-contact__value" href="tel:<?php echo esc_attr( $phone_clean ); ?>">
						<?php echo esc_html( $a['phone'] ); ?>
					</a>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( $a['email'] ) : ?>
			<div class="lahaph-bb-contact__row">
				<span class="lahaph-bb-contact__icon">✉</span>
				<div>
					<strong class="lahaph-bb-contact__label">이메일</strong>
					<a class="lahaph-bb-contact__value" href="mailto:<?php echo esc_attr( antispambot( $a['email'] ) ); ?>">
						<?php echo esc_html( antispambot( $a['email'] ) ); ?>
					</a>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( $a['hours'] ) : ?>
			<div class="lahaph-bb-contact__row">
				<span class="lahaph-bb-contact__icon">🕐</span>
				<div>
					<strong class="lahaph-bb-contact__label">운영 시간</strong>
					<p class="lahaph-bb-contact__value"><?php echo nl2br( esc_html( $a['hours'] ) ); ?></p>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( $a['youtube_url'] || $a['blog_url'] ) : ?>
			<div class="lahaph-bb-contact__social">
				<?php if ( $a['youtube_url'] ) : ?>
					<a href="<?php echo esc_url( $a['youtube_url'] ); ?>" target="_blank" rel="noopener noreferrer" class="lahaph-bb-contact__social-link">
						YouTube
					</a>
				<?php endif; ?>
				<?php if ( $a['blog_url'] ) : ?>
					<a href="<?php echo esc_url( $a['blog_url'] ); ?>" target="_blank" rel="noopener noreferrer" class="lahaph-bb-contact__social-link">
						Blog
					</a>
				<?php endif; ?>
			</div>
		<?php endif; ?>

	</div><!-- /.lahaph-bb-contact__info -->

	<?php echo '</div>'; ?>
	<?php
	return ob_get_clean();
}
