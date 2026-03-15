<?php
/**
 * Title: 문의 CTA 섹션
 * Slug: lahaph-theme/cta-inquiry
 * Categories: lahaph
 * Description: 페이지 하단에 반복 사용되는 문의하기 CTA 섹션
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- wp:group {"className":"lahaph-cta","style":{"color":{"background":"#F0FAF0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|70"}}},"border":{"radius":"8px"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group lahaph-cta" style="background-color:#F0FAF0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);margin-top:var(--wp--preset--spacing--70);border-radius:8px">

	<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
	<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">라하프에 대해 궁금하신가요?</h3>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
	<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#444444"},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
	<p class="has-text-align-center" style="color:#444444;font-size:var(--wp--preset--font-size--large)">프로그램 참여, 공연 관람, 기타 문의 사항을 남겨주시면 빠르게 안내해 드리겠습니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"},"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/inquiry" style="border-radius:6px;font-size:var(--wp--preset--font-size--large);padding:14px 32px">문의하기</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"2px"},"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/inquiry" style="border-radius:6px;border-width:2px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--large);padding:14px 32px">상담 신청하기</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
