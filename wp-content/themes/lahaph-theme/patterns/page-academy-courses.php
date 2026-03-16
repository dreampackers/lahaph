<?php
/**
 * Title: Academy 과정 페이지
 * Slug: lahaph-theme/page-academy-courses
 * Categories: lahaph
 * Description: Academy > 과정 페이지 — 12개 과정 목록 (동적 쿼리 + 정적 fallback)
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- ① 과정 소개 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:paragraph {"className":"lahaph-section-label","style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.15em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<p class="lahaph-section-label" style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.15em;margin-bottom:var(--wp--preset--spacing--20)">COURSES</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} -->
	<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프 아카데미는 총 12개의 전문 과정을 운영하고 있습니다. 음악, 무용/댄스, 미술, 생활, 미디어 분야에 걸쳐 발달장애인의 다양한 예술적 관심사를 반영합니다.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ② 카테고리 필터 탭 (시각적 표시 전용) -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small);margin-bottom:var(--wp--preset--spacing--20)">분야별 탐색</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","gap":"var:preset|spacing|10"}} -->
	<div class="wp-block-group" style="display:flex;flex-wrap:wrap;gap:var(--wp--preset--spacing--10)">

		<!-- 전체 (active) -->
		<!-- wp:group {"style":{"color":{"background":"var:preset|color|deep-navy"},"border":{"radius":"100px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="background-color:var(--wp--preset--color--deep-navy);border-radius:100px;padding:8px var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"}}} -->
			<p style="color:#FFFFFF;font-size:var(--wp--preset--font-size--small);font-weight:700">전체</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 음악 -->
		<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|primary-green"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:100px;border:1px solid var(--wp--preset--color--primary-green);padding:8px var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"}}} -->
			<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700">♪ 음악</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 무용/댄스 -->
		<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|warm-yellow"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:100px;border:1px solid var(--wp--preset--color--warm-yellow);padding:8px var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"}}} -->
			<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:700">★ 무용/댄스</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 미술 -->
		<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|sky-blue"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:100px;border:1px solid var(--wp--preset--color--sky-blue);padding:8px var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|sky-blue"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"}}} -->
			<p style="color:var(--wp--preset--color--sky-blue);font-size:var(--wp--preset--font-size--small);font-weight:700">◆ 미술</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 생활 -->
		<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|soft-gray"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:100px;border:1px solid var(--wp--preset--color--soft-gray);padding:8px var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"}}} -->
			<p style="color:#555555;font-size:var(--wp--preset--font-size--small);font-weight:700">◇ 생활</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 미디어 -->
		<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"100px","width":"1px","color":"var:preset|color|purple-accent"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:100px;border:1px solid var(--wp--preset--color--purple-accent);padding:8px var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|purple-accent"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"}}} -->
			<p style="color:var(--wp--preset--color--purple-accent);font-size:var(--wp--preset--font-size--small);font-weight:700">▶ 미디어</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ③ 동적 과정 카드 (academy_course CPT) -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:query {"queryId":0,"query":{"perPage":20,"pages":0,"offset":0,"postType":"academy_course","order":"asc","orderBy":"meta_value_num","metaKey":"lahaph_display_order"},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","width":"1px","color":"#E8E8E8","left":{"width":"4px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30)">
				<!-- wp:post-terms {"term":"academy_category","style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
				<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
				<!-- wp:post-meta {"key":"lahaph_schedule","style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
				<!-- wp:post-excerpt {"moreText":"자세히 보기","excerptLength":15,"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- 과정이 등록되지 않은 경우 정적 목록 표시 -->
		<!-- wp:query-no-results -->

			<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">운영 과정 목록</h3>
			<!-- /wp:heading -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|primary-green"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">♪ 음악</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">랩 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|primary-green"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">♪ 음악</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">뮤지컬 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|warm-yellow"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid var(--wp--preset--color--warm-yellow);padding:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">★ 무용/댄스</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">탭 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|warm-yellow"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid var(--wp--preset--color--warm-yellow);padding:var(--wp--preset--spacing--30)">
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">★ 무용/댄스</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">K-POP 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|primary-green"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">♪ 음악</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">보컬 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|warm-yellow"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid var(--wp--preset--color--warm-yellow);padding:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">★ 무용/댄스</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">발레 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"#9EA0A3"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid #9EA0A3;padding:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:#555555;font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">◇ 생활</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">레크레이션 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|warm-yellow"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid var(--wp--preset--color--warm-yellow);padding:var(--wp--preset--spacing--30)">
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:var(--wp--preset--color--warm-yellow);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">★ 무용/댄스</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">힙합댄스 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|sky-blue"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid var(--wp--preset--color--sky-blue);padding:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|sky-blue"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:var(--wp--preset--color--sky-blue);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">◆ 미술</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">미술 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"#9EA0A3"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid #9EA0A3;padding:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:#555555;font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">◇ 생활</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">챠밍 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|purple-accent"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid var(--wp--preset--color--purple-accent);padding:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|purple-accent"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:var(--wp--preset--color--purple-accent);font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">▶ 미디어</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">미디어 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"lahaph-card","style":{"border":{"radius":"8px","left":{"width":"4px","color":"#9EA0A3"},"width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group lahaph-card" style="border-radius:8px;border:1px solid #E8E8E8;border-left:4px solid #9EA0A3;padding:var(--wp--preset--spacing--30)">
						<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<p style="color:#555555;font-size:var(--wp--preset--font-size--small);font-weight:700;margin-bottom:var(--wp--preset--spacing--10)">◇ 생활</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
						<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">데이트코칭 아카데미</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--small)">일정 — TODO</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- ④ 운영 시간 안내 (구조화된 테이블형 레이아웃) -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">운영 시간</h3>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#FFFBF0"},"border":{"radius":"8px","top":{"width":"4px","color":"var:preset|color|warm-yellow"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFBF0;border-radius:8px;border-top:4px solid var(--wp--preset--color--warm-yellow);padding:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--20)">IN THE HIGH SCHOOL</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">After School 과정</h4>
				<!-- /wp:heading -->
				<!-- wp:group {"style":{"border":{"top":{"width":"1px","color":"#E8E0CC"}},"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-top:1px solid #E8E0CC;padding-top:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.8"}}} -->
					<p style="color:#555555;font-size:var(--wp--preset--font-size--small);line-height:1.8"><strong>대상:</strong> 고등학교 재학 중 발달장애 학생<br><strong>방식:</strong> 방과 후 수업 연계<br><strong>시간:</strong> 학교별 일정 협의 (주 1–2회)<br><strong>장소:</strong> 학교 내 또는 라하프 시설</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#F0FAF0"},"border":{"radius":"8px","top":{"width":"4px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#F0FAF0;border-radius:8px;border-top:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small","letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<p style="color:var(--wp--preset--color--primary-green);font-weight:700;font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;margin-bottom:var(--wp--preset--spacing--20)">AFTER WORK</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">After Work 과정</h4>
				<!-- /wp:heading -->
				<!-- wp:group {"style":{"border":{"top":{"width":"1px","color":"#C8E6C8"}},"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-top:1px solid #C8E6C8;padding-top:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.8"}}} -->
					<p style="color:#555555;font-size:var(--wp--preset--font-size--small);line-height:1.8"><strong>대상:</strong> 성인 발달장애인 (졸업 후 포함)<br><strong>방식:</strong> 저녁 또는 주말 정기 수업<br><strong>시간:</strong> 주 1–2회 / 과정별 상이<br><strong>장소:</strong> 라하프 아카데미 시설</p>
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


<!-- ⑤ 문의 CTA -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"lahaph-cta","style":{"color":{"background":"#F0FAF0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group lahaph-cta" style="background-color:#F0FAF0;padding:var(--wp--preset--spacing--60);border-radius:8px">
		<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">어떤 과정이 맞는지 함께 알아보세요.</h3>
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
