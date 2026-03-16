<?php
/**
 * 페이지 템플릿 — Elementor 빌더가 콘텐츠를 렌더링합니다.
 * the_content() 호출이 Elementor 출력을 트리거합니다.
 */
get_header();
?>

<main id="lahaph-main" class="lahaph-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
