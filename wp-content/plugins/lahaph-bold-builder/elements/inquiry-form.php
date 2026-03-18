<?php
/**
 * Bold Page Builder Element: 문의 폼
 * Shortcode: [lahaph_inquiry_block]
 *
 * lahaph-inquiry 플러그인의 [lahaph_inquiry_form] 숏코드를 래핑합니다.
 *
 * 파라미터:
 *   title          - 폼 상단 제목
 *   description    - 폼 상단 설명
 *   show_card      - 카드 배경 표시 (yes|no)
 *   card_bg        - 카드 배경색 (HEX)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ── 숏코드 렌더 (BBP 미활성 시 폴백) ───────────────────── */
add_shortcode( 'lahaph_inquiry_block', 'lahaph_bb_render_inquiry_form' );

function lahaph_bb_render_inquiry_form( array $atts ): string {
	$a = shortcode_atts( [
		'title'       => '상담 신청',
		'description' => '아이의 이름과 연락처를 남겨주시면 담당자가 연락드립니다.',
		'show_card'   => 'yes',
		'card_bg'     => '#FFFFFF',
	], $atts );

	if ( ! shortcode_exists( 'lahaph_inquiry_form' ) ) {
		return '<p class="lahaph-bb-warning">⚠ lahaph-inquiry 플러그인을 활성화해 주세요.</p>';
	}

	$style = 'yes' === $a['show_card']
		? 'background:' . sanitize_hex_color( $a['card_bg'] ) . ';border-radius:8px;padding:40px 36px;box-shadow:0 2px 12px rgba(0,0,0,0.08);'
		: '';

	ob_start();
	?>
	<div class="lahaph-bb-inquiry-wrap" <?php echo $style ? 'style="' . esc_attr( $style ) . '"' : ''; ?>>

		<?php if ( $a['title'] ) : ?>
			<h2 class="lahaph-bb-inquiry-wrap__title"><?php echo esc_html( $a['title'] ); ?></h2>
		<?php endif; ?>

		<?php if ( $a['description'] ) : ?>
			<p class="lahaph-bb-inquiry-wrap__desc"><?php echo esc_html( $a['description'] ); ?></p>
		<?php endif; ?>

		<?php echo do_shortcode( '[lahaph_inquiry_form]' ); ?>

	</div>
	<?php
	return ob_get_clean();
}
