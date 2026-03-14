<?php
/**
 * Title: 섹션 헤딩 + 설명
 * Slug: lahaph-theme/section-heading
 * Categories: lahaph, text
 * Description: 섹션 제목과 한 줄 설명을 함께 표시하는 재사용 헤딩 블록
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- wp:group {"className":"section-heading","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group section-heading" style="margin-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">섹션 제목을 입력하세요</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.7"}}} -->
	<p style="color:#555555;font-size:var(--wp--preset--font-size--large);line-height:1.7">섹션에 대한 짧은 설명을 입력하세요.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
