<?php
/**
 * 기본 폴백 템플릿
 * Elementor로 빌드하지 않은 페이지에 사용됩니다.
 */
get_header();
?>

<main id="lahaph-main" class="lahaph-main lahaph-main--default">
	<div class="lahaph-container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'lahaph-post' ); ?>>
					<header class="lahaph-post__header">
						<?php the_title( '<h1 class="lahaph-post__title">', '</h1>' ); ?>
					</header>
					<div class="lahaph-post__content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p class="lahaph-no-results">콘텐츠를 찾을 수 없습니다.</p>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
