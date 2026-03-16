<?php
/**
 * Title: Art College 교과 과정 페이지
 * Slug: lahaph-theme/page-art-college-curriculum
 * Categories: lahaph
 * Description: Art College > 교과 과정 페이지 구조 (세부 과정 내용은 TODO)
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- ① 과정 개요 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:paragraph {"className":"lahaph-section-label","style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.15em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<p class="lahaph-section-label" style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.15em;margin-bottom:var(--wp--preset--spacing--20)">CURRICULUM</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} -->
	<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프 ART COLLEGE의 교과 과정은 공연, 교육, 미디어 세 개 트랙으로 구성됩니다. 각 트랙은 발달장애 예술인이 해당 분야의 전문가로 성장할 수 있도록 단계적으로 설계되어 있습니다.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ② 트랙 개요 카드 -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">교육 트랙</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lahaph-card","style":{"color":{"background":"#1E2F6F"},"border":{"radius":"8px","top":{"width":"6px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-card" style="background-color:#1E2F6F;border-radius:8px;border-top:6px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--50) var(--wp--preset--spacing--30)">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-group" style="display:flex;flex-wrap:nowrap;align-items:center;justify-content:space-between;margin-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"1.75rem","fontWeight":"700","lineHeight":"1"}}} -->
					<p style="color:var(--wp--preset--color--primary-green);font-size:1.75rem;font-weight:700;line-height:1">♪</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.35)"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"}}} -->
					<p style="color:rgba(255,255,255,0.35);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em">01</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h3 class="wp-block-heading" style="color:#FFFFFF;font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">공연 트랙</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"lineHeight":"1.7"}}} -->
				<p style="color:rgba(255,255,255,0.8);line-height:1.7">뮤지컬, 댄스, 보컬 등 무대 공연에 특화된 교육 과정</p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:group {"style":{"color":{"background":"#F9D71B"},"border":{"radius":"4px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="background-color:#F9D71B;border-radius:4px;padding:6px var(--wp--preset--spacing--20);display:inline-block">
					<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","fontStyle":"italic"}}} -->
					<p style="color:#333333;font-size:var(--wp--preset--font-size--small);font-weight:700;font-style:italic">세부 과정 내용 — TODO</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lahaph-card","style":{"color":{"background":"#1E2F6F"},"border":{"radius":"8px","top":{"width":"6px","color":"var:preset|color|warm-yellow"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-card" style="background-color:#1E2F6F;border-radius:8px;border-top:6px solid var(--wp--preset--color--warm-yellow);padding:var(--wp--preset--spacing--50) var(--wp--preset--spacing--30)">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-group" style="display:flex;flex-wrap:nowrap;align-items:center;justify-content:space-between;margin-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"1.75rem","fontWeight":"700","lineHeight":"1"}}} -->
					<p style="color:var(--wp--preset--color--warm-yellow);font-size:1.75rem;font-weight:700;line-height:1">✏</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.35)"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"}}} -->
					<p style="color:rgba(255,255,255,0.35);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em">02</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h3 class="wp-block-heading" style="color:#FFFFFF;font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">교육 트랙</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"lineHeight":"1.7"}}} -->
				<p style="color:rgba(255,255,255,0.8);line-height:1.7">다음 세대를 가르치는 강사 양성에 특화된 교육 과정</p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:group {"style":{"color":{"background":"#F9D71B"},"border":{"radius":"4px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="background-color:#F9D71B;border-radius:4px;padding:6px var(--wp--preset--spacing--20);display:inline-block">
					<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","fontStyle":"italic"}}} -->
					<p style="color:#333333;font-size:var(--wp--preset--font-size--small);font-weight:700;font-style:italic">세부 과정 내용 — TODO</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lahaph-card","style":{"color":{"background":"#1E2F6F"},"border":{"radius":"8px","top":{"width":"6px","color":"var:preset|color|sky-blue"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-card" style="background-color:#1E2F6F;border-radius:8px;border-top:6px solid var(--wp--preset--color--sky-blue);padding:var(--wp--preset--spacing--50) var(--wp--preset--spacing--30)">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-group" style="display:flex;flex-wrap:nowrap;align-items:center;justify-content:space-between;margin-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|sky-blue"},"typography":{"fontSize":"1.75rem","fontWeight":"700","lineHeight":"1"}}} -->
					<p style="color:var(--wp--preset--color--sky-blue);font-size:1.75rem;font-weight:700;line-height:1">▶</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.35)"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"}}} -->
					<p style="color:rgba(255,255,255,0.35);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em">03</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h3 class="wp-block-heading" style="color:#FFFFFF;font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">미디어 트랙</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"lineHeight":"1.7"}}} -->
				<p style="color:rgba(255,255,255,0.8);line-height:1.7">영상 제작, 방송, 미디어 콘텐츠 창작에 특화된 교육 과정</p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:group {"style":{"color":{"background":"#F9D71B"},"border":{"radius":"4px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="background-color:#F9D71B;border-radius:4px;padding:6px var(--wp--preset--spacing--20);display:inline-block">
					<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","fontStyle":"italic"}}} -->
					<p style="color:#333333;font-size:var(--wp--preset--font-size--small);font-weight:700;font-style:italic">세부 과정 내용 — TODO</p>
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


<!-- ③ 교육 일정 (주차별 구성) -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">교육 일정</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<p style="color:#666666;font-size:var(--wp--preset--font-size--medium);margin-bottom:var(--wp--preset--spacing--40)">각 트랙의 주차별 교육 구성 개요입니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns">

		<!-- 1-4주 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px","top":{"width":"3px","color":"var:preset|color|primary-green"}},"color":{"background":"#FFFFFF"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-radius:8px;border-top:3px solid var(--wp--preset--color--primary-green);background-color:#FFFFFF;padding:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--10)">1 — 4주</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">기초 과정</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"}}} -->
				<p style="color:#555555;font-size:var(--wp--preset--font-size--small);line-height:1.7">기본기 습득, 자기 표현 훈련</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- 5-8주 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px","top":{"width":"3px","color":"var:preset|color|warm-yellow"}},"color":{"background":"#FFFFFF"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-radius:8px;border-top:3px solid var(--wp--preset--color--warm-yellow);background-color:#FFFFFF;padding:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--10)">5 — 8주</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">심화 과정</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"}}} -->
				<p style="color:#555555;font-size:var(--wp--preset--font-size--small);line-height:1.7">트랙별 집중 훈련, 작품 개발</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- 9-12주 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px","top":{"width":"3px","color":"var:preset|color|sky-blue"}},"color":{"background":"#FFFFFF"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-radius:8px;border-top:3px solid var(--wp--preset--color--sky-blue);background-color:#FFFFFF;padding:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|sky-blue"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--sky-blue);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--10)">9 — 12주</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">실습 발표</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"}}} -->
				<p style="color:#555555;font-size:var(--wp--preset--font-size--small);line-height:1.7">무대 발표, 평가 및 다음 단계 준비</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- 13주+ -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px","top":{"width":"3px","color":"var:preset|color|purple-accent"}},"color":{"background":"#FFFFFF"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-radius:8px;border-top:3px solid var(--wp--preset--color--purple-accent);background-color:#FFFFFF;padding:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|purple-accent"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--purple-accent);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--10)">13주+</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">고급 / 전문 과정</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"}}} -->
				<p style="color:#555555;font-size:var(--wp--preset--font-size--small);line-height:1.7">전문 예술인·강사 경로 연계</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ④ 교수진 미리보기 (동적 쿼리) -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">교수진</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"color":{"background":"#F9D71B"},"border":{"radius":"4px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="background-color:#F9D71B;border-radius:4px;padding:10px var(--wp--preset--spacing--20);display:inline-block">
		<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","fontStyle":"italic"}}} -->
		<p style="color:#333333;font-size:var(--wp--preset--font-size--small);font-weight:700;font-style:italic">교수진 정보 — TODO (멤버 CPT에서 감독진 그룹으로 등록 후 표시)</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ⑤ 문의 CTA -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"lahaph-cta","style":{"color":{"background":"#F0FAF0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group lahaph-cta" style="background-color:#F0FAF0;padding:var(--wp--preset--spacing--60);border-radius:8px">
		<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">입학 상담을 원하시나요?</h3>
		<!-- /wp:heading -->
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
