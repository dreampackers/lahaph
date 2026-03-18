<?php
/**
 * Bold Page Builder Element: 공연 알림 목록
 * Shortcode: [lahaph_notice_list]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class lahaph_notice_list extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		$a = shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, [
			'posts_per_page' => '10',
			'status_filter'  => 'all',
			'layout'         => 'card',
			'show_date'      => 'yes',
			'show_status'    => 'yes',
			'el_id'    => '',
			'el_class' => '',
			'el_style' => '',
		] ), $atts, $this->shortcode );

		$query_args = [
			'post_type'      => 'notice',
			'posts_per_page' => max( 1, (int) $a['posts_per_page'] ),
			'orderby'        => 'date',
			'order'          => 'DESC',
			'no_found_rows'  => true,
		];

		if ( 'all' !== $a['status_filter'] ) {
			$query_args['meta_query'] = [ [
				'key'     => 'lahaph_notice_status',
				'value'   => sanitize_text_field( $a['status_filter'] ),
				'compare' => '=',
			] ];
		}

		$query = new WP_Query( $query_args );

		if ( ! $query->have_posts() ) {
			return '<p class="lahaph-bb-empty">등록된 공연 알림이 없습니다.</p>';
		}

		$status_colors = [
			'모집중' => 'green',
			'예정'   => 'navy',
			'마감'   => 'gray',
		];

		$id_attr    = $a['el_id'] ? ' id="' . esc_attr( $a['el_id'] ) . '"' : '';
		$style_attr = $a['el_style'] ? ' style="' . esc_attr( $a['el_style'] ) . '"' : '';

		ob_start();

		if ( 'list' === $a['layout'] ) :
			$class_attr = trim( $this->shortcode . ' lahaph-bb-notice-list ' . $a['el_class'] );
			?>
			<ul<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php
					$summary  = get_post_meta( get_the_ID(), 'lahaph_summary', true );
					$status   = get_post_meta( get_the_ID(), 'lahaph_notice_status', true );
					$evt_date = get_post_meta( get_the_ID(), 'lahaph_event_date', true );
					$color    = $status_colors[ $status ] ?? 'gray';
					?>
					<li class="lahaph-bb-notice-list__item">
						<a href="<?php the_permalink(); ?>" class="lahaph-bb-notice-list__link">
							<div class="lahaph-bb-notice-list__meta">
								<?php if ( 'yes' === $a['show_status'] && $status ) : ?>
									<span class="lahaph-bb-badge lahaph-bb-badge--<?php echo esc_attr( $color ); ?>"><?php echo esc_html( $status ); ?></span>
								<?php endif; ?>
								<?php if ( 'yes' === $a['show_date'] && $evt_date ) : ?>
									<time class="lahaph-bb-notice-list__date"><?php echo esc_html( $evt_date ); ?></time>
								<?php endif; ?>
							</div>
							<strong class="lahaph-bb-notice-list__title"><?php the_title(); ?></strong>
							<?php if ( $summary ) : ?>
								<p class="lahaph-bb-notice-list__summary"><?php echo esc_html( $summary ); ?></p>
							<?php endif; ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php else :
			$class_attr = trim( $this->shortcode . ' lahaph-bb-notice-cards ' . $a['el_class'] );
			?>
			<div<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php
					$summary  = get_post_meta( get_the_ID(), 'lahaph_summary', true );
					$status   = get_post_meta( get_the_ID(), 'lahaph_notice_status', true );
					$evt_date = get_post_meta( get_the_ID(), 'lahaph_event_date', true );
					$color    = $status_colors[ $status ] ?? 'gray';
					?>
					<article class="lahaph-bb-notice-card">
						<a href="<?php the_permalink(); ?>" class="lahaph-bb-notice-card__link">
							<div class="lahaph-bb-notice-card__meta">
								<?php if ( 'yes' === $a['show_status'] && $status ) : ?>
									<span class="lahaph-bb-badge lahaph-bb-badge--<?php echo esc_attr( $color ); ?>"><?php echo esc_html( $status ); ?></span>
								<?php endif; ?>
								<?php if ( 'yes' === $a['show_date'] && $evt_date ) : ?>
									<time class="lahaph-bb-notice-card__date"><?php echo esc_html( $evt_date ); ?></time>
								<?php endif; ?>
							</div>
							<h3 class="lahaph-bb-notice-card__title"><?php the_title(); ?></h3>
							<?php if ( $summary ) : ?>
								<p class="lahaph-bb-notice-card__summary"><?php echo esc_html( $summary ); ?></p>
							<?php endif; ?>
						</a>
					</article>
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
			'name'        => '공연 알림 목록',
			'description' => 'notice CPT(공연 알림)를 목록으로 출력합니다.',
			'icon'        => 'dashicons-megaphone',
			'params'      => [
				[ 'param_name' => 'posts_per_page', 'type' => 'textfield', 'heading' => '표시 개수',       'value' => '10' ],
				[ 'param_name' => 'status_filter',  'type' => 'dropdown',  'heading' => '상태 필터',        'value' => [ '전체' => 'all', '모집중' => '모집중', '예정' => '예정', '마감' => '마감' ] ],
				[ 'param_name' => 'layout',         'type' => 'dropdown',  'heading' => '레이아웃',         'value' => [ '카드형' => 'card', '목록형' => 'list' ] ],
				[ 'param_name' => 'show_date',      'type' => 'dropdown',  'heading' => '공연 날짜 표시',   'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'show_status',    'type' => 'dropdown',  'heading' => '상태 뱃지 표시',   'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
			],
		] );
	}
}
