<?php
/**
 * Bold Page Builder Element: 아카데미 과정
 * Shortcode: [lahaph_academy_courses]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class lahaph_academy_courses extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		$a = shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, [
			'category'       => '',
			'columns'        => '3',
			'posts_per_page' => '12',
			'show_time'      => 'yes',
			'show_category'  => 'yes',
			'layout'         => 'card',
			'el_id'    => '',
			'el_class' => '',
			'el_style' => '',
		] ), $atts, $this->shortcode );

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

		$id_attr    = $a['el_id'] ? ' id="' . esc_attr( $a['el_id'] ) . '"' : '';
		$style_attr = $a['el_style'] ? ' style="' . esc_attr( $a['el_style'] ) . '"' : '';

		ob_start();

		if ( 'list' === $a['layout'] ) :
			$class_attr = trim( $this->shortcode . ' lahaph-bb-academy-list ' . $a['el_class'] );
			?>
			<ul<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>
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
								<?php if ( $after_time ) : ?><span>방과 후: <?php echo esc_html( $after_time ); ?></span><?php endif; ?>
								<?php if ( $after_work ) : ?><span>직장인반: <?php echo esc_html( $after_work ); ?></span><?php endif; ?>
							</div>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php else :
			$class_attr = trim( $this->shortcode . ' lahaph-bb-grid lahaph-bb-grid--' . $columns . ' lahaph-bb-academy-grid ' . $a['el_class'] );
			?>
			<div<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php
					$summary    = get_post_meta( get_the_ID(), 'lahaph_summary', true );
					$after_time = get_post_meta( get_the_ID(), 'lahaph_after_school_time', true );
					$after_work = get_post_meta( get_the_ID(), 'lahaph_after_work_time', true );
					$terms      = get_the_terms( get_the_ID(), 'academy_category' );
					$cat_name   = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
					?>
					<div class="lahaph-bb-academy-card">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="lahaph-bb-academy-card__thumb">
								<?php the_post_thumbnail( 'medium_large' ); ?>
								<?php if ( 'yes' === $a['show_category'] && $cat_name ) : ?>
									<div class="lahaph-bb-academy-card__thumb-overlay">
										<span class="lahaph-bb-badge lahaph-bb-badge--green"><?php echo esc_html( $cat_name ); ?></span>
										<p class="lahaph-bb-academy-card__thumb-title"><?php the_title(); ?></p>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<div class="lahaph-bb-academy-card__body">
							<?php if ( ! has_post_thumbnail() ) : ?>
								<?php if ( 'yes' === $a['show_category'] && $cat_name ) : ?>
									<span class="lahaph-bb-badge lahaph-bb-badge--green"><?php echo esc_html( $cat_name ); ?></span>
								<?php endif; ?>
								<h3 class="lahaph-bb-academy-card__title"><?php the_title(); ?></h3>
							<?php endif; ?>
							<?php if ( $summary ) : ?>
								<p class="lahaph-bb-academy-card__summary"><?php echo esc_html( $summary ); ?></p>
							<?php endif; ?>
							<?php if ( 'yes' === $a['show_time'] && ( $after_time || $after_work ) ) : ?>
								<div class="lahaph-bb-academy-card__times">
									<?php if ( $after_time ) : ?><span class="lahaph-bb-academy-card__time-item">방과 후: <?php echo esc_html( $after_time ); ?></span><?php endif; ?>
									<?php if ( $after_work ) : ?><span class="lahaph-bb-academy-card__time-item">직장인반: <?php echo esc_html( $after_work ); ?></span><?php endif; ?>
								</div>
							<?php endif; ?>
							<a href="<?php the_permalink(); ?>" class="lahaph-bb-cta-link">VIEW MORE →</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif;

		wp_reset_postdata();
		$output = ob_get_clean();
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		return apply_filters( $this->shortcode . '_output', $output, $atts );
	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, [
			'name'        => '아카데미 과정 목록',
			'description' => 'academy_course CPT를 과정 목록으로 출력합니다.',
			'icon'        => 'dashicons-welcome-learn-more',
			'params'      => [
				[ 'param_name' => 'category',       'type' => 'textfield', 'heading' => '과정 분류 슬러그', 'value' => '', 'description' => '예: 음악, 무용-댄스, 미술, 생활, 미디어 — 비워두면 전체' ],
				[ 'param_name' => 'columns',        'type' => 'dropdown',  'heading' => '열 수',           'value' => [ '2열' => '2', '3열' => '3', '4열' => '4' ] ],
				[ 'param_name' => 'posts_per_page', 'type' => 'textfield', 'heading' => '표시 개수',        'value' => '12' ],
				[ 'param_name' => 'show_time',      'type' => 'dropdown',  'heading' => '운영 시간 표시',   'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'show_category',  'type' => 'dropdown',  'heading' => '분류 태그 표시',   'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'layout',         'type' => 'dropdown',  'heading' => '레이아웃',         'value' => [ '카드형' => 'card', '목록형' => 'list' ] ],
			],
		] );
	}
}
