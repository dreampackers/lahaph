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

	<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} -->
	<p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프 아카데미는 총 12개의 전문 과정을 운영하고 있습니다. 음악, 무용/댄스, 미술, 생활, 미디어 분야에 걸쳐 발달장애인의 다양한 예술적 관심사를 반영합니다.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ② 동적 과정 카드 (academy_course CPT) -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:query {"queryId":0,"query":{"perPage":20,"pages":0,"offset":0,"postType":"academy_course","order":"asc","orderBy":"meta_value_num","metaKey":"lahaph_display_order"},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"course-card","style":{"border":{"radius":"8px","width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group course-card" style="border-radius:8px;border:1px solid #E8E8E8;padding:var(--wp--preset--spacing--30)">
				<!-- wp:post-terms {"term":"academy_category","style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
				<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"700"}}} /-->
				<!-- wp:post-excerpt {"moreText":"자세히 보기","excerptLength":15,"style":{"color":{"text":"#666666"},"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- 과정이 등록되지 않은 경우 정적 목록 표시 -->
		<!-- wp:query-no-results -->

			<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">운영 과정 목록</h3>
			<!-- /wp:heading -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:list {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
					<ul style="color:#333333;font-size:var(--wp--preset--font-size--large)">
						<!-- wp:list-item --><li>랩 아카데미</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>뮤지컬 아카데미</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>탭 아카데미</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>K-POP 아카데미</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>보컬 아카데미</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>발레 아카데미</li><!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:list {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
					<ul style="color:#333333;font-size:var(--wp--preset--font-size--large)">
						<!-- wp:list-item --><li>레크레이션 아카데미</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>힙합댄스 아카데미</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>미술 아카데미</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>챠밍 아카데미</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>미디어 아카데미</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>데이트코칭 아카데미</li><!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


<!-- ③ 운영 시간 안내 -->
<!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">운영 시간</h3>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small"}}} -->
			<p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--small)">IN THE HIGH SCHOOL</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontStyle":"italic"}}} -->
			<p style="color:#333333;font-style:italic">운영 시간 — TODO</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|primary-green"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|small"}}} -->
			<p style="color:var(--wp--preset--color--primary-green);font-weight:700;font-size:var(--wp--preset--font-size--small)">AFTER WORK</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontStyle":"italic"}}} -->
			<p style="color:#333333;font-style:italic">운영 시간 — TODO</p>
			<!-- /wp:paragraph -->
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
