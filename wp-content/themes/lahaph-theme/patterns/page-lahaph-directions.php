<?php
/**
 * Title: 오시는 길 페이지
 * Slug: lahaph-theme/page-lahaph-directions
 * Categories: lahaph
 * Description: Lahaph > 오시는 길 — 주소, 교통 안내, 지도 embed
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- ① 페이지 헤더 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:paragraph {"className":"lahaph-section-label","style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700","letterSpacing":"0.15em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<p class="lahaph-section-label" style="color:var(--wp--preset--color--primary-green);font-size:var(--wp--preset--font-size--small);font-weight:700;letter-spacing:0.15em;margin-bottom:var(--wp--preset--spacing--20)">DIRECTIONS</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xxx-large","fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xxx-large);font-weight:800;margin-bottom:var(--wp--preset--spacing--20)">오시는 길</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"#555555"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.7"}}} -->
	<p style="color:#555555;font-size:var(--wp--preset--font-size--large);line-height:1.7">라하프를 방문하기 전에 아래 안내를 확인해 주세요.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ② 지도 + 주소 정보 (2컬럼) -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">

		<!-- 지도 컬럼 -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:html -->
			<!-- TODO: 아래 iframe src를 실제 카카오맵 또는 구글맵 embed URL로 교체해 주세요 -->
			<!-- 카카오맵 예시: https://map.kakao.com/?itemId=실제ID -->
			<!-- 구글맵 embed 예시: https://www.google.com/maps/embed?pb=실제파라미터 -->
			<div style="width:100%;aspect-ratio:4/3;background:#EEEEEE;border-radius:8px;display:flex;align-items:center;justify-content:center;overflow:hidden">
				<p style="color:#888;font-size:14px;text-align:center">지도를 여기에 삽입해 주세요<br><small>관리자 > 페이지 편집 > HTML 블록에서 iframe을 추가하세요</small></p>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- 주소·연락처 컬럼 -->
		<!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-column" style="flex-basis:40%;padding-top:var(--wp--preset--spacing--20)">

			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|15"}}}} -->
				<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--medium);font-weight:700;margin-bottom:var(--wp--preset--spacing--15)">주소</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"}}} -->
				<p style="color:#333333;font-size:var(--wp--preset--font-size--medium);line-height:1.7"><!-- TODO: 실제 주소를 입력해 주세요 --><br><span style="color:#888">예: 서울특별시 OO구 OO로 OO</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|15"}}}} -->
				<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--medium);font-weight:700;margin-bottom:var(--wp--preset--spacing--15)">전화</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<p style="color:#333333;font-size:var(--wp--preset--font-size--medium)"><!-- TODO: 실제 전화번호를 입력해 주세요 --></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|15"}}}} -->
				<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--medium);font-weight:700;margin-bottom:var(--wp--preset--spacing--15)">이메일</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
				<p style="color:#333333;font-size:var(--wp--preset--font-size--medium)"><!-- TODO: 실제 이메일 주소를 입력해 주세요 --></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--10)">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|15"}}}} -->
				<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--medium);font-weight:700;margin-bottom:var(--wp--preset--spacing--15)">운영 시간</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"}}} -->
				<p style="color:#333333;font-size:var(--wp--preset--font-size--medium);line-height:1.7"><!-- TODO: 실제 운영 시간을 입력해 주세요 --><br><span style="color:#888">예: 월~금 10:00 – 18:00 / 토 10:00 – 14:00</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ③ 대중교통 안내 -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">대중교통 안내</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">

		<!-- 지하철 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;border-left:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">지하철</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#444444"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"}}} -->
				<p style="color:#444444;font-size:var(--wp--preset--font-size--medium);line-height:1.7"><!-- TODO: 가장 가까운 지하철역 및 출구 번호를 입력해 주세요 --><br><span style="color:#888">예: OO선 OO역 O번 출구에서 도보 5분</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- 버스 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;border-left:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">버스</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#444444"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"}}} -->
				<p style="color:#444444;font-size:var(--wp--preset--font-size--medium);line-height:1.7"><!-- TODO: 가까운 버스 노선 및 정류장을 입력해 주세요 --><br><span style="color:#888">예: OO번, OO번 버스 OO 정류장 하차 후 도보 3분</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- 자가용 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","left":{"width":"4px","color":"var:preset|color|primary-green"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;border-left:4px solid var(--wp--preset--color--primary-green);padding:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h4 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-weight:700;margin-bottom:var(--wp--preset--spacing--20)">자가용 · 주차</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#444444"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"}}} -->
				<p style="color:#444444;font-size:var(--wp--preset--font-size--medium);line-height:1.7"><!-- TODO: 주차 가능 여부 및 주차장 위치를 입력해 주세요 --><br><span style="color:#888">예: 건물 내 주차장 이용 가능 (방문 전 전화 확인 권장)</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ④ 문의 CTA -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"lahaph-cta","style":{"color":{"background":"#F0FAF0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group lahaph-cta" style="background-color:#F0FAF0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);border-radius:8px">
		<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">방문 전에 미리 문의해 보세요</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#444444"},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
		<p class="has-text-align-center" style="color:#444444;font-size:var(--wp--preset--font-size--large)">상담 예약이나 위치 관련 문의는 아래 양식을 이용해 주세요.</p>
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
