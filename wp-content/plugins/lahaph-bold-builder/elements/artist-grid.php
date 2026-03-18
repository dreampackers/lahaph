<?php
/**
 * Bold Page Builder Element: 아티스트 그리드
 * Shortcode: [lahaph_artist_grid]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ── 숏코드 렌더 (BBP 미활성 시 폴백) ───────────────────── */
add_shortcode( 'lahaph_artist_grid', 'lahaph_bb_render_artist_grid' );

function lahaph_bb_render_artist_grid( array $atts ): string {
	$a = shortcode_atts( [
		'columns'          => '3',
		'posts_per_page'   => '12',
		'show_summary'     => 'yes',
		'link_to_profile'  => 'no',
	], $atts );

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

	ob_start();
	?>
	<div class="lahaph-bb-grid lahaph-bb-grid--<?php echo esc_attr( $columns ); ?> lahaph-bb-artist-grid">
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
						<div class="lahaph-bb-artist-card__photo">
							<?php the_post_thumbnail( [ 100, 100 ] ); ?>
						</div>
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
	return ob_get_clean();
}
