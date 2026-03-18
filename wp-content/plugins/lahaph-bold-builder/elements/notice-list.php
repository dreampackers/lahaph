<?php
/**
 * Bold Page Builder Element: 공연 알림 목록
 * Shortcode: [lahaph_notice_list]
 *
 * 파라미터:
 *   posts_per_page - 표시 개수
 *   status_filter  - 상태 필터 (all|모집중|마감|예정)
 *   layout         - card|table
 *   show_date      - 공연 날짜 표시 (yes|no)
 *   show_status    - 상태 뱃지 표시 (yes|no)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ── 숏코드 렌더 (BBP 미활성 시 폴백) ───────────────────── */
add_shortcode( 'lahaph_notice_list', 'lahaph_bb_render_notice_list' );

function lahaph_bb_render_notice_list( array $atts ): string {
	$a = shortcode_atts( [
		'posts_per_page' => '10',
		'status_filter'  => 'all',
		'layout'         => 'card',
		'show_date'      => 'yes',
		'show_status'    => 'yes',
	], $atts );

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

	ob_start();

	if ( 'list' === $a['layout'] ) :
		?>
		<ul class="lahaph-bb-notice-list">
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

	<?php else : ?>

		<div class="lahaph-bb-notice-cards">
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
	return ob_get_clean();
}
