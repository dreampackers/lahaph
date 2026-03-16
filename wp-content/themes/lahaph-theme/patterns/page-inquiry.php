<?php
/**
 * Title: 문의 페이지
 * Slug: lahaph-theme/page-inquiry
 * Categories: lahaph
 * Description: 상담/문의 신청 페이지 전체 콘텐츠 ([lahaph_inquiry_form] 숏코드 포함)
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- ① 히어로 배너 -->
<!-- wp:group {"style":{"color":{"background":"#1E2F6F"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#1E2F6F;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":1,"textAlign":"center","style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--hero);font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">문의하기</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<p class="has-text-align-center" style="color:rgba(255,255,255,0.85);font-size:var(--wp--preset--font-size--large);line-height:1.8;margin-bottom:var(--wp--preset--spacing--40)">라하프에 대한 궁금한 점, 프로그램 참여 방법, 후원 문의 등<br>무엇이든 편하게 남겨주세요.</p>
	<!-- /wp:paragraph -->

	<!-- 혜택 칩 -->
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
	<div class="wp-block-group" style="display:flex;flex-wrap:wrap;justify-content:center;gap:var(--wp--preset--spacing--20)">

		<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.12)"},"border":{"radius":"24px","color":"rgba(255,255,255,0.25)","width":"1px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="background-color:rgba(255,255,255,0.12);border-radius:24px;border:1px solid rgba(255,255,255,0.25);padding:10px var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"color":{"text":"#FFFFFF"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small"}}} -->
			<p style="color:#FFFFFF;font-weight:700;font-size:var(--wp--preset--font-size--small)">빠른 답변</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.12)"},"border":{"radius":"24px","color":"rgba(255,255,255,0.25)","width":"1px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="background-color:rgba(255,255,255,0.12);border-radius:24px;border:1px solid rgba(255,255,255,0.25);padding:10px var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"color":{"text":"#FFFFFF"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small"}}} -->
			<p style="color:#FFFFFF;font-weight:700;font-size:var(--wp--preset--font-size--small)">전문 상담</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.12)"},"border":{"radius":"24px","color":"rgba(255,255,255,0.25)","width":"1px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="background-color:rgba(255,255,255,0.12);border-radius:24px;border:1px solid rgba(255,255,255,0.25);padding:10px var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"color":{"text":"#FFFFFF"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small"}}} -->
			<p style="color:#FFFFFF;font-weight:700;font-size:var(--wp--preset--font-size--small)">개별 맞춤</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ② 양식 + 안내 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">

			<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} -->
			<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프 프로그램에 대해 궁금한 점을 남겨주시면 담당자가 빠른 시일 내에 연락드립니다. 어떤 과정이 자녀에게 맞는지, 참여 방법은 어떻게 되는지 편하게 물어보세요.</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
			<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:shortcode -->
			[lahaph_inquiry_form]
			<!-- /wp:shortcode -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">

			<!-- wp:group {"style":{"color":{"background":"#1E2F6F"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#1E2F6F;border-radius:8px;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--40) var(--wp--preset--spacing--50)">

				<!-- 따뜻한 환영 메시지 -->
				<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.08)"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="background-color:rgba(255,255,255,0.08);border-radius:6px;padding:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.90)"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7","fontStyle":"italic"}}} -->
					<p style="color:rgba(255,255,255,0.90);font-size:var(--wp--preset--font-size--medium);line-height:1.7;font-style:italic">부모님의 소중한 질문을 기다리고 있습니다. 작은 궁금증도 편하게 남겨주세요.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
				<h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">문의 안내</h3>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"left":"var:preset|spacing|20"},"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-left:3px solid var(--wp--preset--color--primary-green);padding-left:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small"}}} -->
					<p style="color:var(--wp--preset--color--primary-green);font-weight:700;font-size:var(--wp--preset--font-size--small)">문의 가능 과정</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"}}} -->
					<p style="color:rgba(255,255,255,0.85)">아카데미 · ART COLLEGE · 뮤지컬 · 일반 문의</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"var:preset|color|warm-yellow"}},"spacing":{"padding":{"left":"var:preset|spacing|20"},"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-left:3px solid var(--wp--preset--color--warm-yellow);padding-left:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small"}}} -->
					<p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--small)">응대 시간</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontStyle":"italic"}}} -->
					<p style="color:rgba(255,255,255,0.85);font-style:italic">운영 시간 — TODO</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"var:preset|color|sky-blue"}},"spacing":{"padding":{"left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-left:3px solid var(--wp--preset--color--sky-blue);padding-left:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|sky-blue"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small"}}} -->
					<p style="color:var(--wp--preset--color--sky-blue);font-weight:700;font-size:var(--wp--preset--font-size--small)">오시는 길</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontStyle":"italic"}}} -->
					<p style="color:rgba(255,255,255,0.85);font-style:italic">주소 — TODO</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
