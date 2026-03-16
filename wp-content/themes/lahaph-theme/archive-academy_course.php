<?php
/**
 * 아카데미 과정 아카이브 템플릿
 */
get_header();
?>

<main id="lahaph-main" class="lahaph-main lahaph-main--archive">
	<section class="lahaph-archive-hero">
		<div class="lahaph-container">
			<span class="lahaph-section-label">ACADEMY</span>
			<h1 class="lahaph-archive-title">아카데미 과정</h1>
		</div>
	</section>

	<section class="lahaph-section" style="background:var(--lahaph-soft-gray)">
		<div class="lahaph-container">
			<?php if ( have_posts() ) : ?>
				<div class="lahaph-grid lahaph-grid--3">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
						$summary     = get_post_meta( get_the_ID(), 'lahaph_summary', true );
						$after_time  = get_post_meta( get_the_ID(), 'lahaph_after_school_time', true );
						$terms       = get_the_terms( get_the_ID(), 'academy_category' );
						$category    = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
						?>
						<article class="lahaph-course-card <?php post_class(); ?>">
							<?php if ( $category ) : ?>
								<span class="lahaph-tag lahaph-tag--green"><?php echo esc_html( $category ); ?></span>
							<?php endif; ?>
							<?php the_title( '<h2 class="lahaph-course-card__title">', '</h2>' ); ?>
							<?php if ( $summary ) : ?>
								<p class="lahaph-course-card__summary"><?php echo esc_html( $summary ); ?></p>
							<?php endif; ?>
							<?php if ( $after_time ) : ?>
								<p class="lahaph-course-card__time">방과 후: <?php echo esc_html( $after_time ); ?></p>
							<?php endif; ?>
						</article>
					<?php endwhile; ?>
				</div>
				<?php the_posts_pagination(); ?>
			<?php else : ?>
				<p class="lahaph-no-results">등록된 과정이 없습니다.</p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
