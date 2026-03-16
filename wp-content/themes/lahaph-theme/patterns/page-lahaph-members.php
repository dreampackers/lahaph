<?php
/**
 * Title: Members 페이지
 * Slug: lahaph-theme/page-lahaph-members
 * Categories: lahaph
 * Description: Lahaph > Members 페이지 — member CPT 그룹별 카드 목록
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- ① 소개 문장 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:paragraph {"className":"lahaph-section-label","style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.15em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<p class="lahaph-section-label" style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.15em;margin-bottom:var(--wp--preset--spacing--20)">MEMBERS</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xxx-large","fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xxx-large);font-weight:800;margin-bottom:var(--wp--preset--spacing--30)">라하프 구성원</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} -->
	<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프는 발달장애 예술인을 섬기는 스태프, 공연을 이끄는 감독진, 그리고 함께 꿈을 나누는 배우들로 구성되어 있습니다. 각자의 자리에서 라하프의 가치를 실현해 나가고 있습니다.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ② 그룹별 멤버 목록 (동적 쿼리 블록) -->
<!-- 섬기는 분 -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">섬기는 분</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"postType":"member","perPage":20,"taxQuery":{"member_group":[{"slug":"섬기는-분"}]},"orderBy":"meta_value_num","metaKey":"lahaph_display_order","order":"asc"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"lahaph-member-card","style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","top":{"width":"4px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-member-card" style="background-color:#FFFFFF;border-radius:8px;border-top:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30)">
				<!-- wp:post-featured-image {"style":{"border":{"radius":"50%"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"width":"80px","height":"80px"} /-->
				<!-- wp:post-title {"isLink":false,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
				<!-- wp:post-meta {"metaKeys":["lahaph_role"],"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} /-->
				<!-- wp:post-meta {"metaKeys":["lahaph_affiliation"],"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#888888"}}} -->
			<p style="color:#888888"><!-- TODO: 멤버를 등록해 주세요 (관리자 > 멤버 > 새 멤버 추가) --></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- 감독진 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">감독진</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"postType":"member","perPage":20,"taxQuery":{"member_group":[{"slug":"감독진"}]},"orderBy":"meta_value_num","metaKey":"lahaph_display_order","order":"asc"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"lahaph-member-card","style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","top":{"width":"4px","color":"var:preset|color|primary-green"},"style":"solid","width":"1px","borderColor":"#EEEEEE"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-member-card" style="background-color:#FFFFFF;border-radius:8px;border-top:4px solid var(--wp--preset--color--primary-green);border:1px solid #EEEEEE;padding:var(--wp--preset--spacing--30)">
				<!-- wp:post-featured-image {"style":{"border":{"radius":"50%"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"width":"80px","height":"80px"} /-->
				<!-- wp:post-title {"isLink":false,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
				<!-- wp:post-meta {"metaKeys":["lahaph_role"],"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} /-->
				<!-- wp:post-meta {"metaKeys":["lahaph_affiliation"],"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#888888"}}} -->
			<p style="color:#888888"><!-- TODO: 감독진 멤버를 등록해 주세요 --></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- 배우 -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">배우</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"postType":"member","perPage":40,"taxQuery":{"member_group":[{"slug":"배우"}]},"orderBy":"meta_value_num","metaKey":"lahaph_display_order","order":"asc"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":4}} -->
			<!-- wp:group {"className":"lahaph-member-card","style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-member-card" style="background-color:#FFFFFF;border-radius:8px;padding:var(--wp--preset--spacing--30) var(--wp--preset--spacing--20)">
				<!-- wp:post-featured-image {"style":{"border":{"radius":"50%"},"spacing":{"margin":{"bottom":"var:preset|spacing|15"}}},"width":"72px","height":"72px"} /-->
				<!-- wp:post-title {"isLink":false,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
				<!-- wp:post-meta {"metaKeys":["lahaph_role"],"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#888888"}}} -->
			<p style="color:#888888"><!-- TODO: 배우 멤버를 등록해 주세요 --></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- 예술하는 강사들 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">예술하는 강사들</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"postType":"member","perPage":20,"taxQuery":{"member_group":[{"slug":"예술하는-강사들"}]},"orderBy":"meta_value_num","metaKey":"lahaph_display_order","order":"asc"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"lahaph-member-card","style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","top":{"width":"4px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-member-card" style="background-color:#FFFFFF;border-radius:8px;border-top:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30)">
				<!-- wp:post-featured-image {"style":{"border":{"radius":"50%"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"width":"80px","height":"80px"} /-->
				<!-- wp:post-title {"isLink":false,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
				<!-- wp:post-meta {"metaKeys":["lahaph_role"],"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} /-->
				<!-- wp:post-meta {"metaKeys":["lahaph_affiliation"],"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#888888"}}} -->
			<p style="color:#888888"><!-- TODO: 강사 멤버를 등록해 주세요 --></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- 운영진 -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">운영진</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"postType":"member","perPage":20,"taxQuery":{"member_group":[{"slug":"운영진"}]},"orderBy":"meta_value_num","metaKey":"lahaph_display_order","order":"asc"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"lahaph-member-card","style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","top":{"width":"4px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-member-card" style="background-color:#FFFFFF;border-radius:8px;border-top:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30)">
				<!-- wp:post-featured-image {"style":{"border":{"radius":"50%"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"width":"80px","height":"80px"} /-->
				<!-- wp:post-title {"isLink":false,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
				<!-- wp:post-meta {"metaKeys":["lahaph_role"],"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} /-->
				<!-- wp:post-meta {"metaKeys":["lahaph_affiliation"],"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#888888"}}} -->
			<p style="color:#888888"><!-- TODO: 운영진 멤버를 등록해 주세요 --></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- ③ 문의 CTA -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"lahaph-cta","style":{"color":{"background":"#F0FAF0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group lahaph-cta" style="background-color:#F0FAF0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);border-radius:8px">
		<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">라하프와 함께하고 싶으신가요?</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#444444"},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
		<p class="has-text-align-center" style="color:#444444;font-size:var(--wp--preset--font-size--large)">프로그램 참여, 후원, 협력에 관한 문의를 남겨주세요.</p>
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
