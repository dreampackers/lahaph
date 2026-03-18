<?php
/**
 * Bold Page Builder Element: 영상 콘텐츠 그리드
 * Shortcode: [lahaph_video_grid]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class lahaph_video_grid extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		$a = shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, [
			'category'            => '',
			'columns'             => '3',
			'posts_per_page'      => '6',
			'show_summary'        => 'yes',
			'show_play_icon'      => 'yes',
			'show_category_badge' => 'yes',
			'el_id'    => '',
			'el_class' => '',
			'el_style' => '',
		] ), $atts, $this->shortcode );

		$query_args = [
			'post_type'      => 'video_content',
			'posts_per_page' => max( 1, (int) $a['posts_per_page'] ),
			'orderby'        => 'meta_value_num',
			'meta_key'       => 'lahaph_display_order',
			'order'          => 'ASC',
			'no_found_rows'  => true,
		];

		$category = sanitize_text_field( $a['category'] );
		if ( $category ) {
			$query_args['tax_query'] = [ [
				'taxonomy' => 'content_category',
				'field'    => 'name',
				'terms'    => $category,
			] ];
		}

		$query   = new WP_Query( $query_args );
		$columns = max( 2, min( 4, (int) $a['columns'] ) );

		if ( ! $query->have_posts() ) {
			return '<p class="lahaph-bb-empty">등록된 콘텐츠가 없습니다.</p>';
		}

		$id_attr    = $a['el_id'] ? ' id="' . esc_attr( $a['el_id'] ) . '"' : '';
		$class_attr = trim( $this->shortcode . ' lahaph-bb-grid lahaph-bb-grid--' . $columns . ' lahaph-bb-video-grid ' . $a['el_class'] );
		$style_attr = $a['el_style'] ? ' style="' . esc_attr( $a['el_style'] ) . '"' : '';

		ob_start();
		?>
		<div<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				$summary  = get_post_meta( get_the_ID(), 'lahaph_summary', true );
				$yt_url   = get_post_meta( get_the_ID(), 'lahaph_youtube_url', true );
				$terms    = get_the_terms( get_the_ID(), 'content_category' );
				$cat_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
				?>
				<article class="lahaph-bb-video-card">
					<a href="<?php the_permalink(); ?>" class="lahaph-bb-video-card__link">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="lahaph-bb-video-card__thumb">
								<?php the_post_thumbnail( 'medium_large' ); ?>
								<?php if ( 'yes' === $a['show_play_icon'] && $yt_url ) : ?>
									<span class="lahaph-bb-video-card__play">▶</span>
								<?php endif; ?>
								<?php if ( 'yes' === $a['show_category_badge'] && $cat_name ) : ?>
									<span class="lahaph-bb-badge lahaph-bb-badge--dark"><?php echo esc_html( $cat_name ); ?></span>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<div class="lahaph-bb-video-card__body">
							<h3 class="lahaph-bb-video-card__title"><?php the_title(); ?></h3>
							<?php if ( 'yes' === $a['show_summary'] && $summary ) : ?>
								<p class="lahaph-bb-video-card__summary"><?php echo esc_html( wp_trim_words( $summary, 18 ) ); ?></p>
							<?php endif; ?>
						</div>
					</a>
				</article>
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
			'name'        => '영상 콘텐츠 그리드',
			'description' => 'video_content CPT를 카드 그리드로 출력합니다. (드라마/예능/교육/교양 필터 가능)',
			'icon'        => 'dashicons-video-alt3',
			'params'      => [
				[ 'param_name' => 'category',            'type' => 'dropdown',  'heading' => '콘텐츠 분류',      'value' => [ '전체' => '', '드라마' => '드라마', '예능' => '예능', '교육' => '교육', '교양' => '교양' ] ],
				[ 'param_name' => 'columns',             'type' => 'dropdown',  'heading' => '열 수',            'value' => [ '2열' => '2', '3열' => '3', '4열' => '4' ] ],
				[ 'param_name' => 'posts_per_page',      'type' => 'textfield', 'heading' => '표시 개수',         'value' => '6' ],
				[ 'param_name' => 'show_summary',        'type' => 'dropdown',  'heading' => '요약 표시',         'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'show_play_icon',      'type' => 'dropdown',  'heading' => '재생 아이콘 표시',  'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'show_category_badge', 'type' => 'dropdown',  'heading' => '분류 뱃지 표시',    'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
			],
		] );
	}
}
