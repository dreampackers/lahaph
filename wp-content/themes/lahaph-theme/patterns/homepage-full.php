<?php
/**
 * Title: 홈페이지 전체
 * Slug: lahaph-theme/homepage-full
 * Categories: lahaph
 * Description: 메인 홈페이지 전체 레이아웃
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- Section 1: HERO -->
<!-- wp:group {"align":"full","className":"lahaph-hero","style":{"color":{"background":"#1E2F6F"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lahaph-hero" style="background-color:#1E2F6F;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:paragraph {"style":{"color":{"text":"#46C449"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p style="color:#46C449;font-size:var(--wp--preset--font-size--small);font-weight:600;letter-spacing:0.12em;text-transform:uppercase">발달장애 문화예술 공동체</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
			<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":1,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700","lineHeight":"1.15"}}} -->
			<h1 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--hero);font-weight:700;line-height:1.15">꿈을 무대에 올리다</h1>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
			<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.75"}}} -->
			<p style="color:rgba(255,255,255,0.85);font-size:var(--wp--preset--font-size--large);line-height:1.75">라하프는 발달장애인과 그 가족들이 함께 만들어가는 문화예술 공동체입니다. 2016년부터 창작 뮤지컬, 예술교육, 콘텐츠 제작을 통해 새로운 가능성을 열어가고 있습니다.</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
			<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/board/notices" style="border-radius:6px;padding:14px 32px;font-size:var(--wp--preset--font-size--large)">공연 알림 보기</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.7)","width":"2px"},"color":{"text":"#FFFFFF"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/lahaph/intro" style="border-radius:6px;border-width:2px;border-color:rgba(255,255,255,0.7);color:#FFFFFF;padding:14px 32px;font-size:var(--wp--preset--font-size--large)">라하프 소개</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

			<!-- wp:group {"style":{"border":{"radius":"50%","color":"rgba(255,255,255,0.1)","width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"dimensions":{"aspectRatio":"1"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","alignItems":"center"}} -->
			<div class="wp-block-group" style="border-radius:50%;border:2px solid rgba(255,255,255,0.1);padding:var(--wp--preset--spacing--70) var(--wp--preset--spacing--60);aspect-ratio:1;display:flex;align-items:center;justify-content:center">
				<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.9)"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700","lineHeight":"1.4","letterSpacing":"0.08em"}}} -->
				<p class="has-text-align-center" style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--xx-large);font-weight:700;line-height:1.4;letter-spacing:0.08em">LAHAPH<br>2016~</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- Section 2: IMPACT STATS STRIP -->
<!-- wp:group {"align":"full","className":"lahaph-stats-strip","style":{"color":{"background":"#46C449"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lahaph-stats-strip" style="background-color:#46C449;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"3.5rem","fontWeight":"700","lineHeight":"1.1"}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="color:#FFFFFF;font-size:3.5rem;font-weight:700;line-height:1.1">10+</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<p class="has-text-align-center" style="color:rgba(255,255,255,0.85);font-size:var(--wp--preset--font-size--medium)">년 공연 경력</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"3.5rem","fontWeight":"700","lineHeight":"1.1"}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="color:#FFFFFF;font-size:3.5rem;font-weight:700;line-height:1.1">9</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<p class="has-text-align-center" style="color:rgba(255,255,255,0.85);font-size:var(--wp--preset--font-size--medium)">창작 뮤지컬</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"3.5rem","fontWeight":"700","lineHeight":"1.1"}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="color:#FFFFFF;font-size:3.5rem;font-weight:700;line-height:1.1">12</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<p class="has-text-align-center" style="color:rgba(255,255,255,0.85);font-size:var(--wp--preset--font-size--medium)">아카데미 과정</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"3.5rem","fontWeight":"700","lineHeight":"1.1"}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="color:#FFFFFF;font-size:3.5rem;font-weight:700;line-height:1.1">100+</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<p class="has-text-align-center" style="color:rgba(255,255,255,0.85);font-size:var(--wp--preset--font-size--medium)">배우 경험</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- Section 3: ABOUT SECTION -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:paragraph {"style":{"color":{"text":"#9EA0A3"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
			<p style="color:#9EA0A3;font-size:var(--wp--preset--font-size--small);font-weight:600;letter-spacing:0.14em;text-transform:uppercase">라하프는 어떤 공동체인가요</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
			<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":2,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700","lineHeight":"1.3"}}} -->
			<h2 class="wp-block-heading" style="color:#1E2F6F;font-size:var(--wp--preset--font-size--xx-large);font-weight:700;line-height:1.3">발달장애인이 예술로<br>세상과 만나는 곳</h2>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
			<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.85"}}} -->
			<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.85">라하프는 성인기 발달장애인 부모들을 중심으로 시작된 문화예술 공동체입니다. 자녀들을 위한 뮤지컬 프로그램에서 출발해, 지금은 전문 극단으로 성장하여 정기적으로 창작 공연을 선보이고 있습니다.</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
			<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.85"}}} -->
			<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.85">2016년 첫 창작 뮤지컬 이후 매년 새로운 이야기를 무대에 올리며, 발달장애 배우들이 예술 안에서 성장하고 빛날 수 있는 공간을 만들어 가고 있습니다.</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
			<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"#1E2F6F","width":"2px"},"color":{"text":"#1E2F6F"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"28px","right":"28px"}},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/lahaph/intro" style="border-radius:6px;border-width:2px;border-color:#1E2F6F;color:#1E2F6F;padding:12px 28px;font-size:var(--wp--preset--font-size--medium)">자세히 알아보기 →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

			<!-- wp:group {"style":{"border":{"left":{"width":"3px","color":"#46C449"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|30"}},"color":{"background":"#F8FCF8"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-left:3px solid #46C449;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);background-color:#F8FCF8">

				<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|x-large","lineHeight":"1.75","fontStyle":"italic"}}} -->
				<p style="color:#333333;font-size:var(--wp--preset--font-size--x-large);line-height:1.75;font-style:italic">"자녀가 무대에 서는 모습을 보는 것이 이렇게 행복한 일인 줄 몰랐습니다."</p>
				<!-- /wp:paragraph -->

				<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:paragraph {"style":{"color":{"text":"#9EA0A3"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"600"}}} -->
				<p style="color:#9EA0A3;font-size:var(--wp--preset--font-size--medium);font-weight:600">— 라하프 학부모</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- Section 4: PROGRAMS -->
<!-- wp:group {"style":{"color":{"background":"#F5F5F5"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F5F5F5;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:heading {"level":2,"textAlign":"center","style":{"color":{"text":"#1E2F6F"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="color:#1E2F6F;font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--60)">라하프의 프로그램</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lahaph-card-program","style":{"color":{"background":"#1E2F6F"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
			<div class="wp-block-group lahaph-card-program" style="background-color:#1E2F6F;border-radius:12px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700","letterSpacing":"0.06em"}}} -->
				<h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700;letter-spacing:0.06em">Musical</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.7)"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
				<p style="color:rgba(255,255,255,0.7);font-size:var(--wp--preset--font-size--small);font-weight:600;letter-spacing:0.08em;text-transform:uppercase;margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">창작 뮤지컬 제작·공연</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.8"}}} -->
				<p style="color:rgba(255,255,255,0.85);font-size:var(--wp--preset--font-size--medium);line-height:1.8">2016년부터 발달장애 배우들이 직접 주연을 맡아 만들어온 창작 뮤지컬. 매년 새로운 작품으로 관객과 만납니다.</p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
				<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.5)","width":"1px"},"color":{"text":"#FFFFFF"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"24px","right":"24px"}}}} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/musical" style="border-radius:6px;border-color:rgba(255,255,255,0.5);color:#FFFFFF;padding:10px 24px">보기 →</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lahaph-card-program","style":{"color":{"background":"#46C449"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
			<div class="wp-block-group lahaph-card-program" style="background-color:#46C449;border-radius:12px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700","letterSpacing":"0.06em"}}} -->
				<h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700;letter-spacing:0.06em">Art College</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
				<p style="color:rgba(255,255,255,0.8);font-size:var(--wp--preset--font-size--small);font-weight:600;letter-spacing:0.08em;text-transform:uppercase;margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">전문 예술가 양성</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.9)"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.8"}}} -->
				<p style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--medium);line-height:1.8">발달장애인이 전문 예술가로 성장할 수 있도록 체계적인 커리큘럼과 실무 공연 경험을 제공합니다.</p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
				<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.5)","width":"1px"},"color":{"text":"#FFFFFF"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"24px","right":"24px"}}}} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/art-college" style="border-radius:6px;border-color:rgba(255,255,255,0.5);color:#FFFFFF;padding:10px 24px">보기 →</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lahaph-card-program","style":{"color":{"background":"#E2A21A"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
			<div class="wp-block-group lahaph-card-program" style="background-color:#E2A21A;border-radius:12px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700","letterSpacing":"0.06em"}}} -->
				<h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700;letter-spacing:0.06em">Academy</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
				<p style="color:rgba(255,255,255,0.8);font-size:var(--wp--preset--font-size--small);font-weight:600;letter-spacing:0.08em;text-transform:uppercase;margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">문화예술 아카데미</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.9)"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.8"}}} -->
				<p style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--medium);line-height:1.8">뮤지컬, 보컬, 탭댄스, K-POP 등 다양한 과정으로 발달장애인의 예술적 재능을 펼칩니다.</p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
				<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.5)","width":"1px"},"color":{"text":"#FFFFFF"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"24px","right":"24px"}}}} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/academy" style="border-radius:6px;border-color:rgba(255,255,255,0.5);color:#FFFFFF;padding:10px 24px">보기 →</a></div>
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


<!-- Section 5: LATEST MUSICALS -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","alignItems":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":2,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="color:#1E2F6F;font-size:var(--wp--preset--font-size--xx-large);font-weight:700">최신 공연</h2>
		<!-- /wp:heading -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"#1E2F6F","width":"1px"},"color":{"text":"#1E2F6F"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/musical" style="border-radius:6px;border-color:#1E2F6F;color:#1E2F6F;padding:10px 20px">전체 공연 보기</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"musical","order":"desc","orderBy":"date"},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

			<!-- wp:group {"style":{"border":{"radius":"8px","width":"1px","color":"#E5E5E5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"background":"#FFFFFF"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-radius:8px;border:1px solid #E5E5E5;background-color:#FFFFFF;overflow:hidden">

				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--30)">
					<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"600","lineHeight":"1.35"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
					<!-- wp:post-date {"style":{"color":{"text":"#9EA0A3"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","width":"1px","color":"#E5E5E5"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;border:1px solid #E5E5E5;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30)">
						<!-- wp:paragraph {"style":{"color":{"text":"#9EA0A3"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
						<p style="color:#9EA0A3;font-size:var(--wp--preset--font-size--small);font-weight:600">2025</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="color:#1E2F6F;font-size:var(--wp--preset--font-size--large);font-weight:600">굿바이 네버랜드</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
						<p style="color:#555555;font-size:var(--wp--preset--font-size--medium)">라하프 2025년 정기 창작 뮤지컬</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","width":"1px","color":"#E5E5E5"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;border:1px solid #E5E5E5;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30)">
						<!-- wp:paragraph {"style":{"color":{"text":"#9EA0A3"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
						<p style="color:#9EA0A3;font-size:var(--wp--preset--font-size--small);font-weight:600">2024</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="color:#1E2F6F;font-size:var(--wp--preset--font-size--large);font-weight:600">사랑의 유산</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
						<p style="color:#555555;font-size:var(--wp--preset--font-size--medium)">라하프 2024년 정기 창작 뮤지컬</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","width":"1px","color":"#E5E5E5"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;border:1px solid #E5E5E5;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30)">
						<!-- wp:paragraph {"style":{"color":{"text":"#9EA0A3"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
						<p style="color:#9EA0A3;font-size:var(--wp--preset--font-size--small);font-weight:600">2023</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="color:#1E2F6F;font-size:var(--wp--preset--font-size--large);font-weight:600">DREAMERS</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
						<p style="color:#555555;font-size:var(--wp--preset--font-size--medium)">라하프 2023년 정기 창작 뮤지컬</p>
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


<!-- Section 6: ART COLLEGE SUMMARY -->
<!-- wp:group {"style":{"color":{"background":"#1E2F6F"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#1E2F6F;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"50%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

			<!-- wp:heading {"level":2,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700","lineHeight":"1.3"}}} -->
			<h2 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--xx-large);font-weight:700;line-height:1.3">Art College</h2>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
			<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.8)"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.85"}}} -->
			<p style="color:rgba(255,255,255,0.8);font-size:var(--wp--preset--font-size--large);line-height:1.85">라하프 ART COLLEGE는 발달장애인이 전문 예술가로 성장할 수 있도록 설계된 교육 플랫폼입니다. 무대 경험과 직업 연계까지 함께 지원합니다.</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
			<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"2px"},"color":{"text":"#FFFFFF"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"28px","right":"28px"}},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/art-college" style="border-radius:6px;border-width:2px;border-color:rgba(255,255,255,0.6);color:#FFFFFF;padding:12px 28px;font-size:var(--wp--preset--font-size--medium)">Art College 알아보기 →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"rgba(255,255,255,0.06)"},"border":{"radius":"12px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding:var(--wp--preset--spacing--40);background-color:rgba(255,255,255,0.06);border-radius:12px">

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"#46C449"},"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"right":"var:preset|spacing|20"}}}} -->
					<p style="color:#46C449;font-size:1.25rem;font-weight:700;margin-right:var(--wp--preset--spacing--20)">✓</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.9)"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.4"}}} -->
					<p style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--large);line-height:1.4">전문 교육 커리큘럼</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"style":{"color":{"background":"rgba(255,255,255,0.1)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<hr class="wp-block-separator has-text-color has-background" style="background-color:rgba(255,255,255,0.1);color:rgba(255,255,255,0.1);margin:0"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"#46C449"},"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"right":"var:preset|spacing|20"}}}} -->
					<p style="color:#46C449;font-size:1.25rem;font-weight:700;margin-right:var(--wp--preset--spacing--20)">✓</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.9)"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.4"}}} -->
					<p style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--large);line-height:1.4">실무 공연 경험</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"style":{"color":{"background":"rgba(255,255,255,0.1)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<hr class="wp-block-separator has-text-color has-background" style="background-color:rgba(255,255,255,0.1);color:rgba(255,255,255,0.1);margin:0"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"#46C449"},"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"right":"var:preset|spacing|20"}}}} -->
					<p style="color:#46C449;font-size:1.25rem;font-weight:700;margin-right:var(--wp--preset--spacing--20)">✓</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.9)"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.4"}}} -->
					<p style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--large);line-height:1.4">직업 연계 지원</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"style":{"color":{"background":"rgba(255,255,255,0.1)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<hr class="wp-block-separator has-text-color has-background" style="background-color:rgba(255,255,255,0.1);color:rgba(255,255,255,0.1);margin:0"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"color":{"text":"#46C449"},"typography":{"fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"right":"var:preset|spacing|20"}}}} -->
					<p style="color:#46C449;font-size:1.25rem;font-weight:700;margin-right:var(--wp--preset--spacing--20)">✓</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.9)"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.4"}}} -->
					<p style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--large);line-height:1.4">맞춤형 학습 설계</p>
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


<!-- Section 7: ACADEMY PREVIEW -->
<!-- wp:group {"style":{"color":{"background":"#FFFBF0"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#FFFBF0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<h2 class="wp-block-heading" style="color:#1E2F6F;font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">Academy</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p style="color:#555555;font-size:var(--wp--preset--font-size--large);line-height:1.8;margin-bottom:var(--wp--preset--spacing--50)">라하프 아카데미는 발달장애인을 위한 문화예술 전문 아카데미입니다. 개인의 수준과 관심에 맞는 다양한 과정을 통해 예술적 재능을 키워갑니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"10px","left":{"width":"4px","color":"#46C449"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:10px;border-left:4px solid #46C449;padding:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<h4 class="wp-block-heading" style="color:#1E2F6F;font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">뮤지컬 아카데미</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"}}} -->
				<p style="color:#666666;font-size:var(--wp--preset--font-size--medium);line-height:1.65">연기, 노래, 무용을 결합한 종합 무대 예술 과정</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"10px","left":{"width":"4px","color":"#E2A21A"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:10px;border-left:4px solid #E2A21A;padding:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<h4 class="wp-block-heading" style="color:#1E2F6F;font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">보컬 아카데미</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"}}} -->
				<p style="color:#666666;font-size:var(--wp--preset--font-size--medium);line-height:1.65">기초 발성부터 무대 보컬까지 체계적으로 배우는 과정</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"10px","left":{"width":"4px","color":"#62C7E8"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:10px;border-left:4px solid #62C7E8;padding:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<h4 class="wp-block-heading" style="color:#1E2F6F;font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">탭 아카데미</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"}}} -->
				<p style="color:#666666;font-size:var(--wp--preset--font-size--medium);line-height:1.65">리듬과 움직임으로 표현하는 탭댄스 전문 과정</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"10px","left":{"width":"4px","color":"#6F4B8B"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:10px;border-left:4px solid #6F4B8B;padding:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<h4 class="wp-block-heading" style="color:#1E2F6F;font-weight:700;font-size:var(--wp--preset--font-size--large);margin-bottom:var(--wp--preset--spacing--10)">K-POP 아카데미</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"}}} -->
				<p style="color:#666666;font-size:var(--wp--preset--font-size--medium);line-height:1.65">최신 K-POP 안무를 배우는 활기찬 댄스 과정</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
	<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"28px","right":"28px"}},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/academy" style="border-radius:6px;padding:12px 28px;font-size:var(--wp--preset--font-size--medium)">전체 과정 보기 →</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->


<!-- Section 8: BOARD NOTICES -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","alignItems":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"level":2,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="color:#1E2F6F;font-size:var(--wp--preset--font-size--xx-large);font-weight:700">공연 알림</h2>
		<!-- /wp:heading -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"#1E2F6F","width":"1px"},"color":{"text":"#1E2F6F"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"18px","right":"18px"}}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/board/notices" style="border-radius:6px;border-color:#1E2F6F;color:#1E2F6F;padding:8px 18px">더 보기 →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":2,"query":{"perPage":5,"pages":0,"offset":0,"postType":"notice","order":"desc","orderBy":"date"},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

			<!-- wp:group {"style":{"border":{"bottom":{"width":"1px","color":"#E8E8E8"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","alignItems":"center"}} -->
			<div class="wp-block-group" style="border-bottom:1px solid #E8E8E8;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
				<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"#1E2F6F"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"500"}}} /-->
				<!-- wp:post-date {"style":{"color":{"text":"#9EA0A3"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#9EA0A3"},"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
			<p style="color:#9EA0A3;font-size:var(--wp--preset--font-size--medium);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">공연 알림이 곧 업데이트됩니다.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- Section 9: CTA SECTION -->
<!-- wp:group {"align":"full","style":{"color":{"background":"#46C449"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="background-color:#46C449;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:heading {"level":2,"textAlign":"center","style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700","lineHeight":"1.25"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--xx-large);font-weight:700;line-height:1.25;margin-bottom:var(--wp--preset--spacing--20)">라하프와 함께하고 싶으신가요?</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"rgba(255,255,255,0.9)"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p class="has-text-align-center" style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--large);line-height:1.7;margin-bottom:var(--wp--preset--spacing--50)">프로그램 참여, 공연 관람, 후원 등 라하프에 관한 모든 문의를 환영합니다.<br>먼저 연락 주시면 정성껏 안내해 드리겠습니다.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{"color":{"background":"#FFFFFF","text":"#46C449"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"36px","right":"36px"}},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"700"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="/inquiry" style="background-color:#FFFFFF;color:#46C449;border-radius:6px;padding:14px 36px;font-size:var(--wp--preset--font-size--large);font-weight:700">문의하기</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.7)","width":"2px"},"color":{"text":"#FFFFFF"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"36px","right":"36px"}},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"700"}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/academy" style="border-radius:6px;border-width:2px;border-color:rgba(255,255,255,0.7);color:#FFFFFF;padding:14px 36px;font-size:var(--wp--preset--font-size--large);font-weight:700">프로그램 안내</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
