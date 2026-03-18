<?php
/**
 * Bold Page Builder Element: 아카데미 과정
 * Shortcode: [lahaph_academy_courses]
 *
 * 파라미터:
 *   category       - academy_category 슬러그 (비워두면 전체)
 *   columns        - 열 수 (2|3|4)
 *   posts_per_page - 표시 개수
 *   show_time      - 운영 시간 표시 (yes|no)
 *   layout         - 레이아웃 (card|list)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ── 숏코드 렌더 (BBP 미활성 시 폴백) ───────────────────── */
add_shortcode( 'lahaph_academy_courses', 'lahaph_bb_render_academy_courses' );

function lahaph_bb_render_academy_courses( array $atts ): string {
	$a = shortcode_atts( [
		'category'       => '',
		'columns'        => '3',
		'posts_per_page' => '12',
		'show_time'      => 'yes',
		'show_category'  => 'yes',
		'layout'         => 'card',
	], $atts );

	$query_args = [
		'post_type'      => 'academy_course',
		'posts_per_page' => max( 1, (int) $a['posts_per_page'] ),
		'orderby'        => 'meta_value_num',
		'meta_key'       => 'lahaph_display_order',
		'order'          => 'ASC',
		'no_found_rows'  => true,
	];

	$cat = sanitize_text_field( $a['category'] );
	if ( $cat ) {
		$query_args['tax_query'] = [ [
			'taxonomy' => 'academy_category',
			'field'    => 'slug',
			'terms'    => $cat,
		] ];
	}

	$query   = new WP_Query( $query_args );
	$columns = max( 2, min( 4, (int) $a['columns'] ) );

	if ( ! $query->have_posts() ) {
		return '<p class="lahaph-bb-empty">등록된 과정이 없습니다.</p>';
	}

	ob_start();

	if ( 'list' === $a['layout'] ) :
		?>
		<ul class="lahaph-bb-academy-list">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				$summary    = get_post_meta( get_the_ID(), 'lahaph_summary', true );
				$after_time = get_post_meta( get_the_ID(), 'lahaph_after_school_time', true );
				$after_work = get_post_meta( get_the_ID(), 'lahaph_after_work_time', true );
				$terms      = get_the_terms( get_the_ID(), 'academy_category' );
				$cat_name   = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
				?>
				<li class="lahaph-bb-academy-list__item">
					<div class="lahaph-bb-academy-list__header">
						<?php if ( 'yes' === $a['show_category'] && $cat_name ) : ?>
							<span class="lahaph-bb-badge lahaph-bb-badge--green"><?php echo esc_html( $cat_name ); ?></span>
						<?php endif; ?>
						<strong class="lahaph-bb-academy-list__title"><?php the_title(); ?></strong>
					</div>
					<?php if ( $summary ) : ?>
						<p class="lahaph-bb-academy-list__summary"><?php echo esc_html( $summary ); ?></p>
					<?php endif; ?>
					<?php if ( 'yes' === $a['show_time'] && ( $after_time || $after_work ) ) : ?>
						<div class="lahaph-bb-academy-list__times">
							<?php if ( $after_time ) : ?>
								<span>방과 후: <?php echo esc_html( $after_time ); ?></span>
							<?php endif; ?>
							<?php if ( $after_work ) : ?>
								<span>직장인반: <?php echo esc_html( $after_work ); ?></span>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</li>
			<?php endwhile; ?>
		</ul>

	<?php else : ?>

		<div class="lahaph-bb-grid lahaph-bb-grid--<?php echo esc_attr( $columns ); ?> lahaph-bb-academy-grid">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				$summary    = get_post_meta( get_the_ID(), 'lahaph_summary', true );
				$after_time = get_post_meta( get_the_ID(), 'lahaph_after_school_time', true );
				$after_work = get_post_meta( get_the_ID(), 'lahaph_after_work_time', true );
				$terms      = get_the_terms( get_the_ID(), 'academy_category' );
				$cat_name   = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
				?>
				<div class="lahaph-bb-academy-card">
					<?php if ( 'yes' === $a['show_category'] && $cat_name ) : ?>
						<span class="lahaph-bb-badge lahaph-bb-badge--green"><?php echo esc_html( $cat_name ); ?></span>
					<?php endif; ?>
					<h3 class="lahaph-bb-academy-card__title"><?php the_title(); ?></h3>
					<?php if ( $summary ) : ?>
						<p class="lahaph-bb-academy-card__summary"><?php echo esc_html( $summary ); ?></p>
					<?php endif; ?>
					<?php if ( 'yes' === $a['show_time'] && ( $after_time || $after_work ) ) : ?>
						<div class="lahaph-bb-academy-card__times">
							<?php if ( $after_time ) : ?>
								<span class="lahaph-bb-academy-card__time-item">방과 후: <?php echo esc_html( $after_time ); ?></span>
							<?php endif; ?>
							<?php if ( $after_work ) : ?>
								<span class="lahaph-bb-academy-card__time-item">직장인반: <?php echo esc_html( $after_work ); ?></span>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		</div>

	<?php endif;

	wp_reset_postdata();
	return ob_get_clean();
}
