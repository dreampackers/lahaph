<?php
/**
 * Title: Contents 아카이브 페이지
 * Slug: lahaph-theme/page-contents-archive
 * Categories: lahaph
 * Description: Contents 섹션 — 드라마/예능/교육/교양 video_content CPT 카테고리별 목록
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- ① 페이지 헤더 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:paragraph {"className":"lahaph-section-label","style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.15em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<p class="lahaph-section-label" style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.15em;margin-bottom:var(--wp--preset--spacing--20)">CONTENTS</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xxx-large","fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xxx-large);font-weight:800;margin-bottom:var(--wp--preset--spacing--30)">라하프 콘텐츠</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} -->
	<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프가 제작한 드라마, 예능, 교육, 교양 영상 콘텐츠를 소개합니다. 발달장애 예술인들의 이야기와 활동을 담은 다양한 콘텐츠를 확인하세요.</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
	<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- 카테고리 링크 탭 -->
	<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|15"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"20px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contents/drama" style="border-radius:20px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--small)">드라마</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"20px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contents/entertainment" style="border-radius:20px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--small)">예능</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"20px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contents/education" style="border-radius:20px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--small)">교육</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"20px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contents/culture" style="border-radius:20px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--small)">교양</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->


<!-- ② 드라마 섹션 -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<h2 class="wp-block-heading" id="drama" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">드라마</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<p style="color:#666666;font-size:var(--wp--preset--font-size--medium);margin-bottom:var(--wp--preset--spacing--40)">라하프 발달장애 배우들이 출연하는 드라마 시리즈입니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:query {"query":{"postType":"video_content","perPage":6,"taxQuery":{"content_category":[{"slug":"드라마"}]},"orderBy":"meta_value_num","metaKey":"lahaph_display_order","order":"asc"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"lahaph-video-card","style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|25","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-video-card" style="background-color:#FFFFFF;border-radius:8px;overflow:hidden;padding-bottom:var(--wp--preset--spacing--25)">
				<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"aspectRatio":"16/9","scale":"cover"} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20)">
					<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#888888"}}} -->
			<p style="color:#888888"><!-- TODO: 드라마 콘텐츠를 등록해 주세요 (관리자 > 콘텐츠 > 새 콘텐츠 추가 > 분류: 드라마) --></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- 더 보기 링크 -->
	<!-- wp:paragraph {"textAlign":"right","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<p class="has-text-align-right" style="margin-top:var(--wp--preset--spacing--30)"><a href="/contents/drama" style="color:var(--wp--preset--color--primary-green);font-weight:600;text-decoration:none">드라마 전체 보기 →</a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ③ 예능 섹션 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<h2 class="wp-block-heading" id="entertainment" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">예능</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<p style="color:#666666;font-size:var(--wp--preset--font-size--medium);margin-bottom:var(--wp--preset--spacing--40)">발달장애 예술인들의 일상과 재능을 담은 예능 콘텐츠입니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:query {"query":{"postType":"video_content","perPage":6,"taxQuery":{"content_category":[{"slug":"예능"}]},"orderBy":"meta_value_num","metaKey":"lahaph_display_order","order":"asc"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"lahaph-video-card","style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|25","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-video-card" style="background-color:#FFFFFF;border-radius:8px;overflow:hidden;padding-bottom:var(--wp--preset--spacing--25)">
				<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"aspectRatio":"16/9","scale":"cover"} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20)">
					<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#888888"}}} -->
			<p style="color:#888888"><!-- TODO: 예능 콘텐츠를 등록해 주세요 --></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- 더 보기 링크 -->
	<!-- wp:paragraph {"textAlign":"right","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<p class="has-text-align-right" style="margin-top:var(--wp--preset--spacing--30)"><a href="/contents/entertainment" style="color:var(--wp--preset--color--primary-green);font-weight:600;text-decoration:none">예능 전체 보기 →</a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ④ 교육 섹션 -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<h2 class="wp-block-heading" id="education" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">교육</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<p style="color:#666666;font-size:var(--wp--preset--font-size--medium);margin-bottom:var(--wp--preset--spacing--40)">발달장애 예술교육의 과정과 방법론을 담은 교육 영상입니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:query {"query":{"postType":"video_content","perPage":6,"taxQuery":{"content_category":[{"slug":"교육"}]},"orderBy":"meta_value_num","metaKey":"lahaph_display_order","order":"asc"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"lahaph-video-card","style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|25","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-video-card" style="background-color:#FFFFFF;border-radius:8px;overflow:hidden;padding-bottom:var(--wp--preset--spacing--25)">
				<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"aspectRatio":"16/9","scale":"cover"} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20)">
					<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#888888"}}} -->
			<p style="color:#888888"><!-- TODO: 교육 콘텐츠를 등록해 주세요 --></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- 더 보기 링크 -->
	<!-- wp:paragraph {"textAlign":"right","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<p class="has-text-align-right" style="margin-top:var(--wp--preset--spacing--30)"><a href="/contents/education" style="color:var(--wp--preset--color--primary-green);font-weight:600;text-decoration:none">교육 전체 보기 →</a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ⑤ 교양 섹션 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<h2 class="wp-block-heading" id="culture" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">교양</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<p style="color:#666666;font-size:var(--wp--preset--font-size--medium);margin-bottom:var(--wp--preset--spacing--40)">발달장애와 문화예술에 대한 이해를 돕는 교양 콘텐츠입니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:query {"query":{"postType":"video_content","perPage":6,"taxQuery":{"content_category":[{"slug":"교양"}]},"orderBy":"meta_value_num","metaKey":"lahaph_display_order","order":"asc"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"lahaph-video-card","style":{"color":{"background":"#F8F8F8"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|25","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-video-card" style="background-color:#F8F8F8;border-radius:8px;overflow:hidden;padding-bottom:var(--wp--preset--spacing--25)">
				<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"aspectRatio":"16/9","scale":"cover"} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20)">
					<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#888888"}}} -->
			<p style="color:#888888"><!-- TODO: 교양 콘텐츠를 등록해 주세요 --></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- 더 보기 링크 -->
	<!-- wp:paragraph {"textAlign":"right","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<p class="has-text-align-right" style="margin-top:var(--wp--preset--spacing--30)"><a href="/contents/culture" style="color:var(--wp--preset--color--primary-green);font-weight:600;text-decoration:none">교양 전체 보기 →</a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ⑥ 문의 CTA -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"lahaph-cta","style":{"color":{"background":"#F0FAF0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group lahaph-cta" style="background-color:#F0FAF0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);border-radius:8px">
		<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">콘텐츠 제작에 관심 있으신가요?</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#444444"},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
		<p class="has-text-align-center" style="color:#444444;font-size:var(--wp--preset--font-size--large)">협력 및 콘텐츠 관련 문의를 남겨주세요.</p>
		<!-- /wp:paragraph -->
		<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
		<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"},"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/inquiry" style="border-radius:6px;font-size:var(--wp--preset--font-size--large);padding:14px 32px">문의하기</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
