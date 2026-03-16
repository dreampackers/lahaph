<?php
/**
 * Title: Academy 소개 페이지
 * Slug: lahaph-theme/page-academy-intro
 * Categories: lahaph
 * Description: Academy > 소개 페이지 전체 콘텐츠 (소개, 혜택, 프로그램 유형)
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- ① 소개 본문 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:paragraph {"className":"lahaph-section-label","style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.15em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<p class="lahaph-section-label" style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.15em;margin-bottom:var(--wp--preset--spacing--20)">ACADEMY</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} -->
	<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프 아카데미는 문화예술을 배우고 싶은 발달장애인을 위한 전문 아카데미입니다. 음악, 무용, 댄스, 미술은 물론 다양한 생활 속 콘텐츠까지 함께 다룹니다.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ② 드라마틱 통계 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:group {"style":{"color":{"background":"#1E2F6F"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="background-color:#1E2F6F;border-radius:8px;padding:var(--wp--preset--spacing--50) var(--wp--preset--spacing--60);display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:var(--wp--preset--spacing--30)">

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
			<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--10)">현재 운영 중</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"lahaph-stat-number","style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"3.5rem","fontWeight":"800","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
			<p class="lahaph-stat-number" style="color:#FFFFFF;font-size:3.5rem;font-weight:800;line-height:1;margin-bottom:var(--wp--preset--spacing--10)">12<span style="font-size:1.5rem;font-weight:600;margin-left:4px">개 과정</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.6)"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
			<p style="color:rgba(255,255,255,0.6);font-size:var(--wp--preset--font-size--medium)">음악·무용·미술·생활·미디어 전 분야</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"border":{"radius":"6px","color":"var:preset|color|primary-green","width":"2px"},"color":{"text":"var:preset|color|primary-green","background":"transparent"},"typography":{"fontWeight":"700"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/academy/courses" style="border-radius:6px;border:2px solid var(--wp--preset--color--primary-green);color:var(--wp--preset--color--primary-green);background:transparent;font-weight:700;padding:12px var(--wp--preset--spacing--30)">전체 과정 보기 →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ③ 아카데미 혜택 -->
<!-- wp:group {"style":{"color":{"background":"#1E2F6F"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#1E2F6F;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">아카데미 참여의 혜택</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"left":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-left:3px solid var(--wp--preset--color--primary-green);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--primary-green);font-size:1.25rem;font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">♦</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontWeight":"700"}}} -->
				<h4 class="wp-block-heading" style="color:#FFFFFF;font-weight:700">예술적 강점 기반 성장</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"}}} -->
				<p style="color:rgba(255,255,255,0.8)">각자의 예술적 강점을 발견하고 개발하는 맞춤형 교육</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"var:preset|color|warm-yellow"}},"spacing":{"padding":{"left":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-left:3px solid var(--wp--preset--color--warm-yellow);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--warm-yellow);font-size:1.25rem;font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">★</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontWeight":"700"}}} -->
				<h4 class="wp-block-heading" style="color:#FFFFFF;font-weight:700">관계 맺기와 공동체 경험</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"}}} -->
				<p style="color:rgba(255,255,255,0.8)">함께 배우고 성장하는 공동체 속에서 사회성을 키웁니다</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"var:preset|color|sky-blue"}},"spacing":{"padding":{"left":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-left:3px solid var(--wp--preset--color--sky-blue);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|sky-blue"},"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--sky-blue);font-size:1.25rem;font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">◆</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontWeight":"700"}}} -->
				<h4 class="wp-block-heading" style="color:#FFFFFF;font-weight:700">리더십 준비 및 활용</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"}}} -->
				<p style="color:rgba(255,255,255,0.8)">자기표현과 리더십 역량을 예술을 통해 자연스럽게 개발</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"var:preset|color|purple-accent"}},"spacing":{"padding":{"left":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-left:3px solid var(--wp--preset--color--purple-accent);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|purple-accent"},"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--purple-accent);font-size:1.25rem;font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">▶</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontWeight":"700"}}} -->
				<h4 class="wp-block-heading" style="color:#FFFFFF;font-weight:700">직업 확장 가능성</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"}}} -->
				<p style="color:rgba(255,255,255,0.8)">예술을 기반으로 다양한 직업 경로를 열어갑니다</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ④ 프로그램 유형 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">프로그램 유형</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lahaph-card","style":{"color":{"background":"#FFFBF0"},"border":{"radius":"8px","top":{"width":"4px","color":"var:preset|color|warm-yellow"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-card" style="background-color:#FFFBF0;border-radius:8px;border-top:4px solid var(--wp--preset--color--warm-yellow);padding:var(--wp--preset--spacing--50) var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--10)">IN THE HIGH SCHOOL</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">LAHAPH ACADEMY<br>In The High School</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"lineHeight":"1.7"}}} -->
				<p style="color:#555555;line-height:1.7">고등학교 방과 후 시간을 활용한 예술 아카데미 프로그램. 학교 안에서 예술을 배우고 성장합니다.</p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:group {"style":{"border":{"top":{"width":"1px","color":"#E8E0CC"}},"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-top:1px solid #E8E0CC;padding-top:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
					<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">운영 시간</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
					<p style="color:#555555;font-size:var(--wp--preset--font-size--small)">방과 후 — 학교별 일정 협의</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lahaph-card","style":{"color":{"background":"#F0FAF0"},"border":{"radius":"8px","top":{"width":"4px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-card" style="background-color:#F0FAF0;border-radius:8px;border-top:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--50) var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--10)">AFTER WORK</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">LAHAPH ACADEMY<br>After Work</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"lineHeight":"1.7"}}} -->
				<p style="color:#555555;line-height:1.7">성인 발달장애인을 위한 저녁 예술 아카데미 프로그램. 직장 생활 후에도 예술을 이어갑니다.</p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:group {"style":{"border":{"top":{"width":"1px","color":"#C8E6C8"}},"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-top:1px solid #C8E6C8;padding-top:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
					<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">운영 시간</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
					<p style="color:#555555;font-size:var(--wp--preset--font-size--small)">저녁 — 평일 또는 주말 (과정별 상이)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons {"layout":{"type":"flex"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/academy/courses" style="border-radius:6px">과정 자세히 보기</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->


<!-- ⑤ 한눈에 보는 아카데미 -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">한눈에 보는 아카데미</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<p style="color:#666666;font-size:var(--wp--preset--font-size--medium);margin-bottom:var(--wp--preset--spacing--30)">현재 운영 중인 12개 과정</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","gap":"var:preset|spacing|10"}} -->
	<div class="wp-block-group" style="display:flex;flex-wrap:wrap;gap:var(--wp--preset--spacing--10)">

		<!-- 음악 계열 (green) -->
		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#E8F5E9"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|primary-green"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#E8F5E9;border-radius:100px;border:1px solid var(--wp--preset--color--primary-green);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:600">♪ 랩 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#E8F5E9"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|primary-green"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#E8F5E9;border-radius:100px;border:1px solid var(--wp--preset--color--primary-green);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:600">♪ 뮤지컬 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#E8F5E9"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|primary-green"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#E8F5E9;border-radius:100px;border:1px solid var(--wp--preset--color--primary-green);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:600">♪ 보컬 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 무용/댄스 계열 (yellow) -->
		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#FFF8E1"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|warm-yellow"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#FFF8E1;border-radius:100px;border:1px solid var(--wp--preset--color--warm-yellow);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:600">★ 탭 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#FFF8E1"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|warm-yellow"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#FFF8E1;border-radius:100px;border:1px solid var(--wp--preset--color--warm-yellow);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:600">★ K-POP 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#FFF8E1"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|warm-yellow"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#FFF8E1;border-radius:100px;border:1px solid var(--wp--preset--color--warm-yellow);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:600">★ 발레 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#FFF8E1"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|warm-yellow"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#FFF8E1;border-radius:100px;border:1px solid var(--wp--preset--color--warm-yellow);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:600">★ 힙합댄스 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 미술 계열 (sky-blue) -->
		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#E1F5FE"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|sky-blue"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#E1F5FE;border-radius:100px;border:1px solid var(--wp--preset--color--sky-blue);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|sky-blue"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:var(--wp--preset--color--sky-blue);font-size:var(--wp--preset--font-size--small);font-weight:600">◆ 미술 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 생활 계열 (soft-gray) -->
		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#F5F5F5"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|soft-gray"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#F5F5F5;border-radius:100px;border:1px solid var(--wp--preset--color--soft-gray);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:#555555;font-size:var(--wp--preset--font-size--small);font-weight:600">◇ 레크레이션 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#F5F5F5"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|soft-gray"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#F5F5F5;border-radius:100px;border:1px solid var(--wp--preset--color--soft-gray);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:#555555;font-size:var(--wp--preset--font-size--small);font-weight:600">◇ 챠밍 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#F5F5F5"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|soft-gray"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#F5F5F5;border-radius:100px;border:1px solid var(--wp--preset--color--soft-gray);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:#555555;font-size:var(--wp--preset--font-size--small);font-weight:600">◇ 데이트코칭 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 미디어 계열 (purple) -->
		<!-- wp:group {"className":"lahaph-tag","style":{"color":{"background":"#F3E5F5"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|purple-accent"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group lahaph-tag" style="background-color:#F3E5F5;border-radius:100px;border:1px solid var(--wp--preset--color--purple-accent);padding:8px var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|purple-accent"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p style="color:var(--wp--preset--color--purple-accent);font-size:var(--wp--preset--font-size--small);font-weight:600">▶ 미디어 아카데미</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ⑥ 문의 CTA -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"lahaph-cta","style":{"color":{"background":"#F0FAF0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group lahaph-cta" style="background-color:#F0FAF0;padding:var(--wp--preset--spacing--60);border-radius:8px">
		<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">아카데미 참여 문의</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#444444"},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
		<p class="has-text-align-center" style="color:#444444;font-size:var(--wp--preset--font-size--large)">어떤 과정이 내 아이에게 맞는지 상담해 드립니다.</p>
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
