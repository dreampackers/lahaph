<?php
/**
 * 단일 포스트 템플릿 (일반 포스트)
 */
get_header();
?>

<main id="lahaph-main" class="lahaph-main lahaph-main--single">
	<div class="lahaph-container lahaph-container--narrow">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'lahaph-post lahaph-post--single' ); ?>>
				<header class="lahaph-post__header">
					<div class="lahaph-section-label"><?php the_date( 'Y.m.d' ); ?></div>
					<?php the_title( '<h1 class="lahaph-post__title">', '</h1>' ); ?>
				</header>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="lahaph-post__thumbnail">
						<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>

				<div class="lahaph-post__content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</main>

<?php get_footer(); ?>
