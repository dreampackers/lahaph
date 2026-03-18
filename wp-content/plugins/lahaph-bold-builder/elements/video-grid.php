<?php
/**
 * Bold Page Builder Element: 영상 콘텐츠 그리드
 * Shortcode: [lahaph_video_grid]
 *
 * 파라미터:
 *   category       - content_category 이름 (드라마|예능|교육|교양|비워두면 전체)
 *   columns, posts_per_page, show_summary, show_play_icon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_bb_register_video_grid(): void {
	if ( ! function_exists( 'bt_bb_add_shortcode' ) ) {
		return;
	}

	bt_bb_add_shortcode(
		'lahaph_video_grid',
		'영상 콘텐츠 그리드',
		'',
		[
			[
				'name'  => 'category',
				'title' => '콘텐츠 분류',
				'type'  => 'select',
				'value' => '',
				'values' => [
					[ 'name' => '전체',  'value' => '' ],
					[ 'name' => '드라마', 'value' => '드라마' ],
					[ 'name' => '예능',  'value' => '예능' ],
					[ 'name' => '교육',  'value' => '교육' ],
					[ 'name' => '교양',  'value' => '교양' ],
				],
				'help' => '특정 카테고리만 표시하거나 전체를 선택하세요.',
			],
			[
				'name'  => 'columns',
				'title' => '열 수',
				'type'  => 'select',
				'value' => '3',
				'values' => [
					[ 'name' => '2열', 'value' => '2' ],
					[ 'name' => '3열', 'value' => '3' ],
					[ 'name' => '4열', 'value' => '4' ],
				],
			],
			[
				'name'  => 'posts_per_page',
				'title' => '표시 개수',
				'type'  => 'text',
				'value' => '6',
			],
			[
				'name'  => 'show_summary',
				'title' => '요약 표시',
				'type'  => 'select',
				'value' => 'yes',
				'values' => [
					[ 'name' => '표시', 'value' => 'yes' ],
					[ 'name' => '숨김', 'value' => 'no' ],
				],
			],
			[
				'name'  => 'show_play_icon',
				'title' => '재생 아이콘 표시',
				'type'  => 'select',
				'value' => 'yes',
				'values' => [
					[ 'name' => '표시', 'value' => 'yes' ],
					[ 'name' => '숨김', 'value' => 'no' ],
				],
			],
			[
				'name'  => 'show_category_badge',
				'title' => '분류 뱃지 표시',
				'type'  => 'select',
				'value' => 'yes',
				'values' => [
					[ 'name' => '표시', 'value' => 'yes' ],
					[ 'name' => '숨김', 'value' => 'no' ],
				],
			],
		],
		'video_content CPT를 카드 그리드로 출력합니다. (드라마/예능/교육/교양 필터 가능)'
	);
}

add_shortcode( 'lahaph_video_grid', 'lahaph_bb_render_video_grid' );

function lahaph_bb_render_video_grid( array $atts ): string {
	$a = shortcode_atts( [
		'category'            => '',
		'columns'             => '3',
		'posts_per_page'      => '6',
		'show_summary'        => 'yes',
		'show_play_icon'      => 'yes',
		'show_category_badge' => 'yes',
	], $atts );

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

	ob_start();
	?>
	<div class="lahaph-bb-grid lahaph-bb-grid--<?php echo esc_attr( $columns ); ?> lahaph-bb-video-grid">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
			$summary = get_post_meta( get_the_ID(), 'lahaph_summary', true );
			$yt_url  = get_post_meta( get_the_ID(), 'lahaph_youtube_url', true );
			$terms   = get_the_terms( get_the_ID(), 'content_category' );
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
	return ob_get_clean();
}
