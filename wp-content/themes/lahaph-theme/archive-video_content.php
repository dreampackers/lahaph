<?php
/**
 * 영상 콘텐츠 아카이브 템플릿
 */
get_header();
?>

<main id="lahaph-main" class="lahaph-main lahaph-main--archive">
	<section class="lahaph-archive-hero">
		<div class="lahaph-container">
			<span class="lahaph-section-label">CONTENTS</span>
			<h1 class="lahaph-archive-title">라하프 콘텐츠</h1>
		</div>
	</section>

	<section class="lahaph-section" style="background:var(--lahaph-soft-gray)">
		<div class="lahaph-container">
			<?php if ( have_posts() ) : ?>
				<div class="lahaph-grid lahaph-grid--3">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
						$summary   = get_post_meta( get_the_ID(), 'lahaph_summary', true );
						$yt_url    = get_post_meta( get_the_ID(), 'lahaph_youtube_url', true );
						?>
						<article class="lahaph-video-card <?php post_class(); ?>">
							<a href="<?php the_permalink(); ?>" class="lahaph-video-card__link">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="lahaph-video-card__thumb">
										<?php the_post_thumbnail( 'medium_large' ); ?>
										<?php if ( $yt_url ) : ?>
											<span class="lahaph-video-card__play">▶</span>
										<?php endif; ?>
									</div>
								<?php endif; ?>
								<div class="lahaph-video-card__body">
									<h2 class="lahaph-video-card__title"><?php the_title(); ?></h2>
									<?php if ( $summary ) : ?>
										<p class="lahaph-video-card__summary"><?php echo esc_html( wp_trim_words( $summary, 18 ) ); ?></p>
									<?php endif; ?>
								</div>
							</a>
						</article>
					<?php endwhile; ?>
				</div>
				<?php the_posts_pagination(); ?>
			<?php else : ?>
				<p class="lahaph-no-results">등록된 콘텐츠가 없습니다.</p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
