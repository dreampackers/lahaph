<?php
/**
 * 공연 알림 아카이브 템플릿
 */
get_header();
?>

<main id="lahaph-main" class="lahaph-main lahaph-main--archive">
	<section class="lahaph-archive-hero">
		<div class="lahaph-container">
			<span class="lahaph-section-label">BOARD</span>
			<h1 class="lahaph-archive-title">공연 알림</h1>
		</div>
	</section>

	<section class="lahaph-section">
		<div class="lahaph-container">
			<?php if ( have_posts() ) : ?>
				<div class="lahaph-list lahaph-list--notice">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
						$summary  = get_post_meta( get_the_ID(), 'lahaph_summary', true );
						$status   = get_post_meta( get_the_ID(), 'lahaph_notice_status', true );
						$evt_date = get_post_meta( get_the_ID(), 'lahaph_event_date', true );
						?>
						<article class="lahaph-notice-item <?php post_class(); ?>">
							<a href="<?php the_permalink(); ?>" class="lahaph-notice-item__link">
								<div class="lahaph-notice-item__meta">
									<?php if ( $status ) : ?>
										<span class="lahaph-tag lahaph-tag--<?php echo esc_attr( $status ); ?>"><?php echo esc_html( $status ); ?></span>
									<?php endif; ?>
									<?php if ( $evt_date ) : ?>
										<time class="lahaph-notice-item__date"><?php echo esc_html( $evt_date ); ?></time>
									<?php endif; ?>
								</div>
								<h2 class="lahaph-notice-item__title"><?php the_title(); ?></h2>
								<?php if ( $summary ) : ?>
									<p class="lahaph-notice-item__summary"><?php echo esc_html( $summary ); ?></p>
								<?php endif; ?>
							</a>
						</article>
					<?php endwhile; ?>
				</div>
				<?php the_posts_pagination(); ?>
			<?php else : ?>
				<p class="lahaph-no-results">등록된 공연 알림이 없습니다.</p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
