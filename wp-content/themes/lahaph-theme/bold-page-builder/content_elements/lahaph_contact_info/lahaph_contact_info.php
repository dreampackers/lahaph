<?php
/**
 * Bold Page Builder Element: 연락처 정보
 * Shortcode: [lahaph_contact_info]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class lahaph_contact_info extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		$a = shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, [
			'address'       => '서울특별시 마포구 서교동 408-18 스페이스빌딩 5층',
			'phone'         => '02-337-2004',
			'email'         => 'musicaln@naver.com',
			'hours'         => '',
			'youtube_url'   => 'https://www.youtube.com/channel/UCpkCPxWdDI18VV6JGLGTKJw',
			'blog_url'      => 'https://blog.naver.com/musicaln',
			'show_map'      => 'no',
			'map_embed_url' => '',
			'layout'        => 'vertical',
			'el_id'    => '',
			'el_class' => '',
			'el_style' => '',
		] ), $atts, $this->shortcode );

		$is_horizontal = 'horizontal' === $a['layout'] && 'yes' === $a['show_map'];
		$phone_clean   = preg_replace( '/\D/', '', $a['phone'] );

		$id_attr    = $a['el_id'] ? ' id="' . esc_attr( $a['el_id'] ) . '"' : '';
		$layout_mod = $is_horizontal ? 'horizontal' : 'vertical';
		$class_attr = trim( $this->shortcode . ' lahaph-bb-contact lahaph-bb-contact--' . $layout_mod . ' ' . $a['el_class'] );
		$style_attr = $a['el_style'] ? ' style="' . esc_attr( $a['el_style'] ) . '"' : '';

		ob_start();
		?>
		<div<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>

			<?php if ( 'yes' === $a['show_map'] && $a['map_embed_url'] ) : ?>
				<div class="lahaph-bb-contact__map">
					<iframe
						src="<?php echo esc_url( $a['map_embed_url'] ); ?>"
						width="100%" height="380"
						style="border:0;border-radius:8px"
						allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
						title="라하프 위치 지도"
					></iframe>
				</div>
			<?php elseif ( 'yes' === $a['show_map'] ) : ?>
				<div class="lahaph-bb-contact__map lahaph-bb-contact__map--empty">
					<p>지도 embed URL을 입력해 주세요.</p>
				</div>
			<?php endif; ?>

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
							<a class="lahaph-bb-contact__value" href="tel:<?php echo esc_attr( $phone_clean ); ?>"><?php echo esc_html( $a['phone'] ); ?></a>
						</div>
					</div>
				<?php endif; ?>
				<?php if ( $a['email'] ) : ?>
					<div class="lahaph-bb-contact__row">
						<span class="lahaph-bb-contact__icon">✉</span>
						<div>
							<strong class="lahaph-bb-contact__label">이메일</strong>
							<a class="lahaph-bb-contact__value" href="mailto:<?php echo esc_attr( antispambot( $a['email'] ) ); ?>"><?php echo esc_html( antispambot( $a['email'] ) ); ?></a>
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
							<a href="<?php echo esc_url( $a['youtube_url'] ); ?>" target="_blank" rel="noopener noreferrer" class="lahaph-bb-contact__social-link">YouTube</a>
						<?php endif; ?>
						<?php if ( $a['blog_url'] ) : ?>
							<a href="<?php echo esc_url( $a['blog_url'] ); ?>" target="_blank" rel="noopener noreferrer" class="lahaph-bb-contact__social-link">Blog</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

		</div>
		<?php
		$output = ob_get_clean();
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		return apply_filters( $this->shortcode . '_output', $output, $atts );
	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, [
			'name'        => '연락처 정보',
			'description' => '라하프 연락처, 주소, SNS 링크를 출력합니다.',
			'icon'        => 'dashicons-location-alt',
			'params'      => [
				[ 'param_name' => 'address',       'type' => 'textarea',    'heading' => '주소',           'value' => '서울특별시 마포구 서교동 408-18 스페이스빌딩 5층' ],
				[ 'param_name' => 'phone',         'type' => 'textfield',   'heading' => '전화번호',        'value' => '02-337-2004' ],
				[ 'param_name' => 'email',         'type' => 'textfield',   'heading' => '이메일',          'value' => 'musicaln@naver.com' ],
				[ 'param_name' => 'hours',         'type' => 'textarea',    'heading' => '운영 시간',       'value' => '', 'description' => '예: 월~금 10:00 – 18:00' ],
				[ 'param_name' => 'youtube_url',   'type' => 'textfield',   'heading' => 'YouTube URL',    'value' => 'https://www.youtube.com/channel/UCpkCPxWdDI18VV6JGLGTKJw' ],
				[ 'param_name' => 'blog_url',      'type' => 'textfield',   'heading' => '블로그 URL',      'value' => 'https://blog.naver.com/musicaln' ],
				[ 'param_name' => 'show_map',      'type' => 'dropdown',    'heading' => '지도 표시',       'value' => [ '숨김' => 'no', '표시' => 'yes' ] ],
				[ 'param_name' => 'map_embed_url', 'type' => 'textfield',   'heading' => '지도 embed URL', 'value' => '', 'description' => '카카오맵 또는 구글맵 iframe src URL' ],
				[ 'param_name' => 'layout',        'type' => 'dropdown',    'heading' => '레이아웃',        'value' => [ '세로형' => 'vertical', '가로형 (지도+정보)' => 'horizontal' ] ],
			],
		] );
	}
}
