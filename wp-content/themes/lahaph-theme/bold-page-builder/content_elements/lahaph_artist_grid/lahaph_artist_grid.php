<?php
/**
 * Bold Page Builder Element: 아티스트 그리드
 * Shortcode: [lahaph_artist_grid]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class lahaph_artist_grid extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		$a = shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, [
			'columns'         => '3',
			'posts_per_page'  => '12',
			'show_summary'    => 'yes',
			'link_to_profile' => 'no',
			'el_id'    => '',
			'el_class' => '',
			'el_style' => '',
		] ), $atts, $this->shortcode );

		$query = new WP_Query( [
			'post_type'      => 'artist',
			'posts_per_page' => max( 1, (int) $a['posts_per_page'] ),
			'orderby'        => 'meta_value_num',
			'meta_key'       => 'lahaph_display_order',
			'order'          => 'ASC',
			'no_found_rows'  => true,
		] );

		$columns = max( 2, min( 4, (int) $a['columns'] ) );

		if ( ! $query->have_posts() ) {
			return '<p class="lahaph-bb-empty">등록된 아티스트가 없습니다.</p>';
		}

		$id_attr    = $a['el_id'] ? ' id="' . esc_attr( $a['el_id'] ) . '"' : '';
		$class_attr = trim( $this->shortcode . ' lahaph-bb-grid lahaph-bb-grid--' . $columns . ' lahaph-bb-artist-grid ' . $a['el_class'] );
		$style_attr = $a['el_style'] ? ' style="' . esc_attr( $a['el_style'] ) . '"' : '';

		ob_start();
		?>
		<div<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				$role    = get_post_meta( get_the_ID(), 'lahaph_role', true );
				$summary = get_post_meta( get_the_ID(), 'lahaph_profile_summary', true );
				$url     = 'yes' === $a['link_to_profile'] ? get_permalink() : '';
				?>
				<div class="lahaph-bb-artist-card">
					<?php $inner_open  = $url ? '<a href="' . esc_url( $url ) . '" class="lahaph-bb-artist-card__link">' : '<div class="lahaph-bb-artist-card__inner">'; ?>
					<?php $inner_close = $url ? '</a>' : '</div>'; ?>
					<?php echo wp_kses_post( $inner_open ); ?>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="lahaph-bb-artist-card__photo"><?php the_post_thumbnail( [ 100, 100 ] ); ?></div>
						<?php endif; ?>
						<div class="lahaph-bb-artist-card__info">
							<strong class="lahaph-bb-artist-card__name"><?php the_title(); ?></strong>
							<?php if ( $role ) : ?>
								<span class="lahaph-bb-artist-card__role"><?php echo esc_html( $role ); ?></span>
							<?php endif; ?>
							<?php if ( 'yes' === $a['show_summary'] && $summary ) : ?>
								<p class="lahaph-bb-artist-card__summary"><?php echo esc_html( wp_trim_words( $summary, 18 ) ); ?></p>
							<?php endif; ?>
						</div>
					<?php echo wp_kses_post( $inner_close ); ?>
				</div>
			<?php endwhile; ?>
		</div>
		<?php
		wp_reset_postdata();
		$output = ob_get_clean();
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		return apply_filters( $this->shortcode . '_output', $output, $atts );
	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, [
			'name'        => '아티스트 그리드',
			'description' => 'artist CPT를 카드 그리드로 출력합니다.',
			'icon'        => 'dashicons-admin-users',
			'params'      => [
				[ 'param_name' => 'columns',          'type' => 'dropdown',  'heading' => '열 수',              'value' => [ '2열' => '2', '3열' => '3', '4열' => '4' ] ],
				[ 'param_name' => 'posts_per_page',   'type' => 'textfield', 'heading' => '표시 개수',           'value' => '12' ],
				[ 'param_name' => 'show_summary',     'type' => 'dropdown',  'heading' => '소개 요약 표시',      'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'link_to_profile',  'type' => 'dropdown',  'heading' => '프로필 페이지 링크',  'value' => [ '링크 없음' => 'no', '단일 포스트 링크' => 'yes' ] ],
			],
		] );
	}
}
