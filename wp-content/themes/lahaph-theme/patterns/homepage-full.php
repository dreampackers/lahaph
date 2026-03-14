<?php
/**
 * Title: 홈페이지 전체 레이아웃
 * Slug: lahaph-theme/homepage-full
 * Categories: lahaph, featured
 * Description: 라하프 홈페이지 전체 콘텐츠 패턴 (10개 섹션)
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- ① 히어로 섹션 -->
<!-- wp:group {"className":"home-hero","style":{"color":{"background":"#1E2F6F"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group home-hero" style="background-color:#1E2F6F;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:heading {"level":1,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700","lineHeight":"1.25"}},"textAlign":"left"} -->
	<h1 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--hero);font-weight:700;line-height:1.25">발달장애 예술가의 성장과 도전을<br>함께 만드는 공동체</h1>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"var:preset|font-size|x-large","lineHeight":"1.7"}}} -->
	<p style="color:rgba(255,255,255,0.85);font-size:var(--wp--preset--font-size--x-large);line-height:1.7">라하프는 발달장애인과 비장애 예술가가 함께 성장하는 문화예술 공동체입니다.<br>공연, 교육, 콘텐츠를 통해 가능성을 현실로 연결합니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"},"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/inquiry" style="border-radius:6px;font-size:var(--wp--preset--font-size--large);padding:14px 32px">문의하기</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"1px"},"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/musical" style="border-radius:6px;border-color:rgba(255,255,255,0.6);color:#FFFFFF;font-size:var(--wp--preset--font-size--large);padding:14px 32px">공연 보기</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->


<!-- ② 라하프 소개 요약 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
			<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">라하프는 어떤 공동체인가요?</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.8"}}} -->
			<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.8">라하프는 성인기 발달장애인 부모들을 중심으로 자녀들을 위한 뮤지컬 프로그램을 진행하다가 극단으로 발전한 공동체입니다. 2016년 첫 창작 뮤지컬 공연 이후 정기적으로 발달장애인 단원들을 모집하여 공연과 교육을 이어가고 있습니다.</p>
			<!-- /wp:paragraph -->
			<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
			<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/lahaph/intro" style="border-radius:6px">라하프 소개 자세히 보기</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ③ 이사장 인사말 요약 -->
<!-- wp:group {"style":{"color":{"background":"#FAFAFA"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#FAFAFA;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:group {"style":{"border":{"left":{"width":"4px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-left:4px solid var(--wp--preset--color--primary-green);padding-left:var(--wp--preset--spacing--40)">

		<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|x-large","lineHeight":"1.9","fontStyle":"italic"}}} -->
		<p style="color:#333333;font-size:var(--wp--preset--font-size--x-large);line-height:1.9;font-style:italic">"라하프는 부모들의 눈물과 헌신으로 시작된 공동체입니다. 지금은 더 많은 발달장애인과 그 가족들이 함께 꿈꾸고 성장할 수 있도록 돕는 안전한 울타리가 되고자 합니다."</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
		<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
		<p style="color:var(--wp--preset--color--soft-gray);font-size:var(--wp--preset--font-size--medium)">— 라하프 이사장</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ④ 주요 섹션 바로가기 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":2,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--50)">라하프와 함께하는 다양한 활동</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#1E2F6F"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#1E2F6F;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30);border-radius:8px">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700">뮤지컬 공연</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<p style="color:rgba(255,255,255,0.8);font-size:var(--wp--preset--font-size--medium)">2016년부터 이어온 창작 뮤지컬 공연. 발달장애 배우들의 무대를 만나보세요.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
					<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"1px"},"color":{"text":"#FFFFFF"}}} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/musical" style="border-radius:6px;border-color:rgba(255,255,255,0.6);color:#FFFFFF">공연 자세히 보기</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#46C449"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#46C449;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30);border-radius:8px">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700">Art College</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.9)"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<p style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--medium)">전문 발달장애 예술가를 양성하는 교육 플랫폼.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
					<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"1px"},"color":{"text":"#FFFFFF"}}} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/art-college/intro" style="border-radius:6px;border-color:rgba(255,255,255,0.6);color:#FFFFFF">자세히 보기</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#E2A21A"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#E2A21A;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30);border-radius:8px">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700">Academy</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.9)"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<p style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--medium)">음악, 무용, 미술 등 12개 전문 과정. 방과 후·직장인반 운영.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
					<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"1px"},"color":{"text":"#FFFFFF"}}} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/academy/intro" style="border-radius:6px;border-color:rgba(255,255,255,0.6);color:#FFFFFF">과정 보기</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ⑤ 주요 공연 (동적 쿼리) -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","alignItems":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">주요 공연</h2>
		<!-- /wp:heading -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/musical" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">전체 공연 보기</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"musical","order":"desc","orderBy":"meta_value_num","metaKey":"lahaph_year"},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;border:1px solid #E8E8E8;padding-bottom:var(--wp--preset--spacing--20)">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/3","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--20)">
					<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"600"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- ⑥ Art College 요약 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
			<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">Art College</h2>
			<!-- /wp:heading -->
			<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
			<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.8"}}} -->
			<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.8">라하프 ART COLLEGE는 전문 발달장애 예술가를 양성하는 교육 플랫폼입니다. 발달장애인이 좋아하고 즐기는 춤과 노래를 바탕으로 문화예술 공연, 교육, 영상과 관련된 직업인으로 성장할 수 있도록 돕습니다.</p>
			<!-- /wp:paragraph -->
			<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
			<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/art-college/intro" style="border-radius:6px">Art College 자세히 보기</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:list {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"padding":{"left":"0"}}}} -->
			<ul style="color:#333333;font-size:var(--wp--preset--font-size--large);padding-left:0">
				<!-- wp:list-item -->
				<li>건강한 신앙인 양성</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>주체적 문화예술인 양성</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>문화예술 전문 강사 양성</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>세계적 문화예술인 양성</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ⑦ Academy 요약 -->
<!-- wp:group {"style":{"color":{"background":"#FFFBF0"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#FFFBF0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">Academy</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.8;margin-bottom:var(--wp--preset--spacing--40)">라하프 아카데미는 문화예술을 배우고 싶은 발달장애인을 위한 전문 아카데미입니다. 음악, 무용, 댄스, 미술은 물론 다양한 생활 속 콘텐츠까지 함께 다룹니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;padding:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small"}}} -->
				<p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--small)">IN THE HIGH SCHOOL</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700">방과 후 아카데미</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#555555"}}} -->
				<p style="color:#555555">고등학교 방과 후 프로그램으로 운영되는 예술 아카데미</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;padding:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small"}}} -->
				<p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--small)">AFTER WORK</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700">직장인 아카데미</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#555555"}}} -->
				<p style="color:#555555">성인 발달장애인을 위한 저녁 예술 아카데미</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/academy/courses" style="border-radius:6px">과정 자세히 보기</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->


<!-- ⑧ 최신 공연 알림 (동적) -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","alignItems":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">공연 알림</h2>
		<!-- /wp:heading -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/board/notices" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">전체 보기</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":2,"query":{"perPage":5,"pages":0,"offset":0,"postType":"notice","order":"desc","orderBy":"date"},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
			<!-- wp:group {"style":{"border":{"bottom":{"width":"1px","color":"#E8E8E8"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"space-between","alignItems":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"var:preset|color|deep-navy"}}} /-->
				<!-- wp:post-date {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"}}} -->
			<p style="color:var(--wp--preset--color--soft-gray)">등록된 공연 알림이 없습니다.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- ⑨ 문의 CTA (패턴 재사용) -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:group {"className":"lahaph-cta","style":{"color":{"background":"#F0FAF0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group lahaph-cta" style="background-color:#F0FAF0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);border-radius:8px">

		<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">라하프에 대해 궁금하신가요?</h3>
		<!-- /wp:heading -->
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

</div>
<!-- /wp:group -->
