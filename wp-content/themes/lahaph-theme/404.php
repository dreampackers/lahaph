<?php
/**
 * 404 오류 페이지 템플릿
 */
get_header();
?>

<main id="lahaph-main" class="lahaph-main">
	<section class="lahaph-section" style="text-align:center;padding:120px 0">
		<div class="lahaph-container">
			<span class="lahaph-section-label">404 ERROR</span>
			<h1 style="font-size:clamp(2rem,8vw,4rem);color:var(--lahaph-deep-navy);margin:16px 0">
				페이지를 찾을 수 없습니다
			</h1>
			<p style="color:var(--lahaph-text-mid);font-size:1.1rem;margin-bottom:40px">
				요청하신 페이지가 삭제되었거나 주소가 변경되었을 수 있습니다.
			</p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="lahaph-btn lahaph-btn--green lahaph-btn--pill">
				홈으로 돌아가기
			</a>
		</div>
	</section>
</main>

<?php get_footer(); ?>
