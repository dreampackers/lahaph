<?php
/**
 * Bold Page Builder Element: 문의 폼
 * Shortcode: [lahaph_inquiry_block]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class lahaph_inquiry_block extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		$a = shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, [
			'title'       => '상담 신청',
			'description' => '아이의 이름과 연락처를 남겨주시면 담당자가 연락드립니다.',
			'show_card'   => 'yes',
			'card_bg'     => '#FFFFFF',
			'el_id'    => '',
			'el_class' => '',
			'el_style' => '',
		] ), $atts, $this->shortcode );

		if ( ! shortcode_exists( 'lahaph_inquiry_form' ) ) {
			return '<p class="lahaph-bb-warning">⚠ lahaph-inquiry 플러그인을 활성화해 주세요.</p>';
		}

		$inline_style = '';
		if ( 'yes' === $a['show_card'] ) {
			$bg = sanitize_hex_color( $a['card_bg'] ) ?: '#FFFFFF';
			$inline_style = 'background:' . $bg . ';border-radius:8px;padding:40px 36px;box-shadow:0 2px 12px rgba(0,0,0,0.08);';
		}
		if ( $a['el_style'] ) {
			$inline_style .= $a['el_style'];
		}

		$id_attr    = $a['el_id'] ? ' id="' . esc_attr( $a['el_id'] ) . '"' : '';
		$class_attr = trim( $this->shortcode . ' lahaph-bb-inquiry-wrap ' . $a['el_class'] );
		$style_attr = $inline_style ? ' style="' . esc_attr( $inline_style ) . '"' : '';

		ob_start();
		?>
		<div<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>
			<?php if ( $a['title'] ) : ?>
				<h2 class="lahaph-bb-inquiry-wrap__title"><?php echo esc_html( $a['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( $a['description'] ) : ?>
				<p class="lahaph-bb-inquiry-wrap__desc"><?php echo esc_html( $a['description'] ); ?></p>
			<?php endif; ?>
			<?php echo do_shortcode( '[lahaph_inquiry_form]' ); ?>
		</div>
		<?php
		$output = ob_get_clean();
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		return apply_filters( $this->shortcode . '_output', $output, $atts );
	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, [
			'name'        => '라하프 문의 폼',
			'description' => '라하프 상담 신청 폼을 삽입합니다. (lahaph-inquiry 플러그인 필요)',
			'icon'        => 'dashicons-email-alt',
			'params'      => [
				[ 'param_name' => 'title',       'type' => 'textfield', 'heading' => '폼 제목',       'value' => '상담 신청' ],
				[ 'param_name' => 'description', 'type' => 'textarea',  'heading' => '폼 설명',       'value' => '아이의 이름과 연락처를 남겨주시면 담당자가 연락드립니다.' ],
				[ 'param_name' => 'show_card',   'type' => 'dropdown',  'heading' => '카드 배경 표시', 'value' => [ '표시 (흰색 카드)' => 'yes', '배경 없음' => 'no' ] ],
				[ 'param_name' => 'card_bg',     'type' => 'colorpicker', 'heading' => '카드 배경색',  'value' => '#FFFFFF', 'description' => 'show_card가 "표시"일 때 적용됩니다.' ],
			],
		] );
	}
}
