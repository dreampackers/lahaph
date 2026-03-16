<?php
/**
 * Title: Artist 페이지
 * Slug: lahaph-theme/page-lahaph-artists
 * Categories: lahaph
 * Description: Lahaph > Artist 페이지 — artist CPT 카드 목록
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- ① 소개 문장 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:paragraph {"className":"lahaph-section-label","style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.15em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<p class="lahaph-section-label" style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.15em;margin-bottom:var(--wp--preset--spacing--20)">ARTIST</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xxx-large","fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xxx-large);font-weight:800;margin-bottom:var(--wp--preset--spacing--30)">라하프 아티스트</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} -->
	<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프의 발달장애 아티스트들은 각자의 고유한 시각과 감수성으로 예술을 창조합니다. 무대 위에서, 그리고 일상에서 예술인으로 살아가는 이들의 이야기를 소개합니다.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ② 아티스트 카드 그리드 (동적 쿼리 블록) -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:query {"query":{"postType":"artist","perPage":24,"orderBy":"meta_value_num","metaKey":"lahaph_display_order","order":"asc"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"lahaph-artist-card","style":{"color":{"background":"#FFFFFF"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-artist-card" style="background-color:#FFFFFF;border-radius:10px;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30)">

				<!-- wp:post-featured-image {"style":{"border":{"radius":"50%"},"spacing":{"margin":{"bottom":"var:preset|spacing|25"}}},"width":"100px","height":"100px","className":"aligncenter"} /-->

				<!-- wp:post-title {"isLink":false,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

				<!-- wp:post-meta {"metaKeys":["lahaph_role"],"textAlign":"center","style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->

				<!-- wp:separator {"style":{"color":{"background":"#EEEEEE"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
				<hr class="wp-block-separator has-alpha-channel-opacity" style="background-color:#EEEEEE;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"/>
				<!-- /wp:separator -->

				<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"}}} /-->

			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#888888"},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
				<p class="has-text-align-center" style="color:#888888;font-size:var(--wp--preset--font-size--large)"><!-- TODO: 아티스트를 등록해 주세요 (관리자 > 아티스트 > 새 아티스트 추가) --></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:query-no-results -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- ③ 아티스트 소개 본문 보조 섹션 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">예술인으로 함께 성장합니다</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} -->
	<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프는 발달장애인이 단순히 참여자가 아닌, 전문 예술인으로 성장할 수 있도록 지원합니다. 뮤지컬 배우, 댄서, 화가, 미디어 크리에이터로서의 역량을 키우고 사회 무대에 당당히 서는 것이 라하프의 목표입니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/academy" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">아카데미 과정 보기</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/musical" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">뮤지컬 공연 보기</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->


<!-- ④ 문의 CTA -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"lahaph-cta","style":{"color":{"background":"#F0FAF0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group lahaph-cta" style="background-color:#F0FAF0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);border-radius:8px">
		<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">우리 아이도 함께할 수 있을까요?</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#444444"},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
		<p class="has-text-align-center" style="color:#444444;font-size:var(--wp--preset--font-size--large)">아카데미 입학 상담부터 공연 참여까지 궁금한 점을 남겨주세요.</p>
		<!-- /wp:paragraph -->
		<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
		<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"},"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/inquiry" style="border-radius:6px;font-size:var(--wp--preset--font-size--large);padding:14px 32px">상담 신청하기</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
