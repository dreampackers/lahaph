<?php
/**
 * Title: 뮤지컬 단일 페이지 콘텐츠
 * Slug: lahaph-theme/single-musical-content
 * Categories: lahaph
 * Description: 개별 뮤지컬 포스트 내부 콘텐츠 패턴 — 공연 정보, 갤러리, 출연진, 관련 공연
 * Viewport Width: 1200
 * Inserter: true
 * Block Types: core/post-content
 */
?>

<!-- ① 공연 기본 정보 (메타 필드) -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">공연 정보</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-left:3px solid var(--wp--preset--color--primary-green);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--10)">공연 연도</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"700"}}} -->
				<p style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--large);font-weight:700"><?php echo esc_html( get_post_meta( get_the_ID(), 'lahaph_year', true ) ?: '연도 정보 없음' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"var:preset|color|warm-yellow"}},"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-left:3px solid var(--wp--preset--color--warm-yellow);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--10)">공연 장소</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"700"}}} -->
				<p style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--large);font-weight:700"><?php echo esc_html( get_post_meta( get_the_ID(), 'lahaph_venue', true ) ?: '장소 정보 없음' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"var:preset|color|sky-blue"}},"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-left:3px solid var(--wp--preset--color--sky-blue);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--10)">출연진</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"600","lineHeight":"1.6"}}} -->
				<p style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--medium);font-weight:600;line-height:1.6"><?php echo wp_kses_post( nl2br( esc_html( get_post_meta( get_the_ID(), 'lahaph_cast', true ) ?: '출연진 정보 없음' ) ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->


<!-- ② 공연 소개 본문 (편집기에서 직접 입력) -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">공연 소개</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontStyle":"italic"}}} -->
	<p style="color:var(--wp--preset--color--soft-gray);font-style:italic">공연 소개 본문을 이곳에 입력하세요.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->


<!-- ③ 갤러리 섹션 -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">갤러리</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small);margin-bottom:var(--wp--preset--spacing--30)">공연 사진을 아래에 추가하세요.</p>
	<!-- /wp:paragraph -->

	<!-- wp:gallery {"columns":3,"linkTo":"none","style":{"border":{"radius":"8px"}}} -->
	<figure class="wp-block-gallery has-nested-images columns-3">
	</figure>
	<!-- /wp:gallery -->

</div>
<!-- /wp:group -->


<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>


<!-- ④ 출연진 목록 -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">출연진</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;border:1px solid #E8E8E8;padding:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontStyle":"italic"}}} -->
		<p style="color:var(--wp--preset--color--soft-gray);font-style:italic">출연진 목록을 이곳에 입력하세요. 이름, 역할, 포지션 등을 자유롭게 구성하세요.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>


<!-- ⑤ 관련 공연 (현재 포스트 제외, 3개) -->
<!-- wp:group {"style":{"color":{"background":"#1E2F6F"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#1E2F6F;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">다른 공연 보기</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"musical","order":"desc","orderBy":"date","exclude":[]},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

			<!-- wp:group {"className":"lahaph-card","style":{"color":{"background":"rgba(255,255,255,0.08)"},"border":{"radius":"8px","top":{"width":"3px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-card" style="background-color:rgba(255,255,255,0.08);border-radius:8px;border-top:3px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30)">

				<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"4px"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->

				<!-- wp:post-terms {"term":"musical_year","style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

				<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

				<!-- wp:post-excerpt {"excerptLength":12,"style":{"color":{"text":"rgba(255,255,255,0.65)"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontStyle":"italic"}}} -->
			<p style="color:rgba(255,255,255,0.5);font-style:italic">다른 공연을 찾을 수 없습니다.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"#FFFFFF","width":"1px"},"color":{"text":"#FFFFFF"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/musical" style="border-radius:6px;border-color:#FFFFFF;color:#FFFFFF;padding:12px var(--wp--preset--spacing--40)">전체 공연 목록 보기</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
