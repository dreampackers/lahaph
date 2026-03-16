<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

function lahaph_get_pages_data(): array {

	/* ─────────────────────────────────────────────────────
	 * 공통 CTA 블록 (문의하기)
	 * ──────────────────────────────────────────────────── */
	$cta = '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"lahaph-cta","style":{"color":{"background":"#F0FAF0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} --><div class="wp-block-group lahaph-cta" style="background-color:#F0FAF0;padding:var(--wp--preset--spacing--60);border-radius:8px"><!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"}}} --><h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700">라하프에 대해 궁금하신가요?</h3><!-- /wp:heading --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary-green","textColor":"white","style":{"border":{"radius":"6px"},"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} --><div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-green-background-color has-text-color has-background wp-element-button" href="/inquiry" style="border-radius:6px;font-size:var(--wp--preset--font-size--large);padding:14px 32px">문의하기</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:group -->';

	return array(

		/* ══════════════════════════════════════════════════
		 * 홈 (front page)
		 * ════════════════════════════════════════════════ */
		array(
			'title'       => '홈',
			'slug'        => 'home',
			'parent_slug' => '',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/homepage-full"} /-->',
		),

		/* ══════════════════════════════════════════════════
		 * Lahaph 섹션
		 * ════════════════════════════════════════════════ */
		array(
			'title'       => 'Lahaph',
			'slug'        => 'lahaph',
			'parent_slug' => '',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">라하프</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">사단법인 라하프는 발달장애인을 위한 문화예술 공동체입니다. 공연·교육·콘텐츠를 통해 발달장애인과 그 가족들이 함께 꿈꾸고 성장합니다.</p><!-- /wp:paragraph --><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/lahaph/intro" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">소개</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/lahaph/purpose" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">설립 목적</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/lahaph/history" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">연혁</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
		),

		array(
			'title'       => '소개',
			'slug'        => 'intro',
			'parent_slug' => 'lahaph',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/page-lahaph-intro"} /-->',
		),

		array(
			'title'       => '설립 목적',
			'slug'        => 'purpose',
			'parent_slug' => 'lahaph',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/page-lahaph-purpose"} /-->',
		),

		array(
			'title'       => '연혁',
			'slug'        => 'history',
			'parent_slug' => 'lahaph',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/page-lahaph-history"} /-->',
		),

		array(
			'title'       => 'Members',
			'slug'        => 'members',
			'parent_slug' => 'lahaph',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">Members</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프를 이끌어가는 임원, 감독진, 스태프를 소개합니다.</p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":10,"query":{"perPage":20,"pages":0,"offset":0,"postType":"member","order":"asc","orderBy":"meta_value_num","metaKey":"lahaph_display_order"},"layout":{"type":"default"}} --><div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} --><!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} --><div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;padding:var(--wp--preset--spacing--30)"><!-- wp:post-title {"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"700"}}} /--><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":true,"excerptLength":20,"style":{"color":{"text":"#555555"}}} /--></div><!-- /wp:group --><!-- /wp:post-template --><!-- wp:query-no-results --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"}}} --><p style="color:var(--wp--preset--color--soft-gray)">등록된 멤버가 없습니다.</p><!-- /wp:paragraph --><!-- /wp:query-no-results --></div><!-- /wp:query --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => 'Artist',
			'slug'        => 'artist',
			'parent_slug' => 'lahaph',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">Artist</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프의 무대를 빛내는 발달장애 예술가들을 소개합니다.</p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":11,"query":{"perPage":20,"pages":0,"offset":0,"postType":"member","order":"asc","orderBy":"meta_value_num","metaKey":"lahaph_display_order","taxQuery":{"member_group":[{"taxonomy":"member_group","field":"name","terms":["배우"]}]}},"layout":{"type":"default"}} --><div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} --><!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} --><div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;padding:var(--wp--preset--spacing--30)"><!-- wp:post-title {"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"700"}}} /--><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":true,"excerptLength":20,"style":{"color":{"text":"#555555"}}} /--></div><!-- /wp:group --><!-- /wp:post-template --><!-- wp:query-no-results --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"}}} --><p style="color:var(--wp--preset--color--soft-gray)">등록된 아티스트가 없습니다.</p><!-- /wp:paragraph --><!-- /wp:query-no-results --></div><!-- /wp:query --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '오시는 길',
			'slug'        => 'directions',
			'parent_slug' => 'lahaph',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">오시는 길</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프 사무국 위치 및 교통 안내입니다.</p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} --><div class="wp-block-columns"><!-- wp:column {"width":"50%"} --><div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} --><h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">주소</h2><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large)"><!-- TODO: 주소 입력 필요 --></p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}}}} --><h3 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--x-large);font-weight:700;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20)">대중교통</h3><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.8"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--medium);line-height:1.8"><!-- TODO: 대중교통 안내 입력 필요 --></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"50%"} --><div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"color":{"background":"#E8E8E8"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} --><div class="wp-block-group" style="background-color:#E8E8E8;border-radius:8px;padding:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"var:preset|color|soft-gray"}}} --><p class="has-text-align-center" style="color:var(--wp--preset--color--soft-gray)">지도 이미지</p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->' . $cta,
		),

		/* ══════════════════════════════════════════════════
		 * Musical 섹션
		 * ════════════════════════════════════════════════ */
		array(
			'title'       => 'Musical',
			'slug'        => 'musical',
			'parent_slug' => '',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">Musical</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">2016년부터 이어온 라하프의 창작 뮤지컬 공연 기록입니다. 발달장애 배우들이 직접 무대에 서는 특별한 공연을 만나보세요.</p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:query {"queryId":20,"query":{"perPage":12,"pages":0,"offset":0,"postType":"musical","order":"desc","orderBy":"meta_value_num","metaKey":"lahaph_year"},"layout":{"type":"default"}} --><div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} --><!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"border":{"radius":"8px","width":"1px","color":"#E8E8E8"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"layout":{"type":"default"}} --><div class="wp-block-group" style="background-color:#FFFFFF;border-radius:8px;border:1px solid #E8E8E8;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/3","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /--><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} --><div class="wp-block-group" style="padding:var(--wp--preset--spacing--20)"><!-- wp:post-title {"isLink":true,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"600"}}} /--></div><!-- /wp:group --></div><!-- /wp:group --><!-- /wp:post-template --><!-- wp:query-no-results --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"}}} --><p style="color:var(--wp--preset--color--soft-gray)">등록된 공연이 없습니다.</p><!-- /wp:paragraph --><!-- /wp:query-no-results --></div><!-- /wp:query --></div><!-- /wp:group -->' . $cta,
		),

		/* ──────────────────────────────────────────────────
		 * Musical 하위 페이지 (연도별 공연)
		 * ──────────────────────────────────────────────── */
		array(
			'title'       => '2016 너는 대학에 갈 수 없어',
			'slug'        => '2016-noneun-daehage',
			'parent_slug' => 'musical',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">너는 대학에 갈 수 없어</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"}}} --><p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--large)">2016</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프의 첫 번째 창작 뮤지컬. 발달장애 청년들의 꿈과 도전을 무대 위에서 펼쳐낸 첫 번째 이야기입니다.</p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '2017 복수할꺼야',
			'slug'        => '2017-boksuhalgeoya',
			'parent_slug' => 'musical',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">복수할꺼야</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"}}} --><p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--large)">2017</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">2017년 라하프의 두 번째 창작 뮤지컬. 삶의 상처와 회복을 담은 진솔한 이야기를 무대에 올렸습니다.</p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '2018 이게 바로 우리들의 이야기',
			'slug'        => '2018-igega-baro',
			'parent_slug' => 'musical',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">이게 바로 우리들의 이야기</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"}}} --><p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--large)">2018</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">2018년 라하프의 창작 뮤지컬. 발달장애 당사자들이 직접 자신의 삶을 이야기로 풀어낸 작품입니다.</p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '2018 한일 라이브 콘서트 안단테코베',
			'slug'        => '2018-andante-kobe',
			'parent_slug' => 'musical',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">한일 라이브 콘서트 안단테코베</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"}}} --><p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--large)">2018</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">한국과 일본 발달장애 예술가들이 함께한 특별한 라이브 콘서트. 국제 문화 교류의 장을 열었습니다.</p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '2019 21C 현대로 본 신데렐라',
			'slug'        => '2019-cinderella',
			'parent_slug' => 'musical',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">21C 현대로 본 신데렐라</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"}}} --><p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--large)">2019</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">현대적 감각으로 재해석한 신데렐라 이야기. 21세기를 살아가는 발달장애 청년들의 꿈과 희망을 담은 뮤지컬입니다.</p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '2019 THE VOICE',
			'slug'        => '2019-the-voice',
			'parent_slug' => 'musical',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">THE VOICE</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"}}} --><p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--large)">2019</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">발달장애 배우들의 목소리로 전하는 감동의 무대. 그들의 진솔한 이야기와 노래가 관객의 마음을 울렸습니다.</p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '2023 DREAMERS',
			'slug'        => '2023-dreamers',
			'parent_slug' => 'musical',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">DREAMERS</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"}}} --><p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--large)">2023</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">꿈꾸는 자들의 이야기. 코로나 이후 다시 무대에 선 라하프 배우들의 열정과 희망을 담은 공연입니다.</p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '2024 사랑의 유산',
			'slug'        => '2024-love-legacy',
			'parent_slug' => 'musical',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">사랑의 유산</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"}}} --><p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--large)">2024</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">사랑과 헌신의 유산을 주제로 한 2024년 라하프의 창작 뮤지컬. 세대를 넘어 이어지는 사랑의 이야기를 무대에 담았습니다.</p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '2025 굿바이 네버랜드',
			'slug'        => '2025-goodbye-neverland',
			'parent_slug' => 'musical',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">굿바이 네버랜드</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|warm-yellow"},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"}}} --><p style="color:var(--wp--preset--color--warm-yellow);font-weight:700;font-size:var(--wp--preset--font-size--large)">2025</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">2025년 라하프의 최신 창작 뮤지컬. 성장과 이별, 새로운 시작의 이야기를 담은 감동적인 무대입니다.</p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		/* ══════════════════════════════════════════════════
		 * Art College 섹션
		 * ════════════════════════════════════════════════ */
		array(
			'title'       => 'Art College',
			'slug'        => 'art-college',
			'parent_slug' => '',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">Art College</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프 ART COLLEGE는 전문 발달장애 예술가를 양성하는 교육 플랫폼입니다.</p><!-- /wp:paragraph --><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/art-college/intro" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">소개</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/art-college/philosophy" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">교육 이념</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/art-college/vision" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">비전</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/art-college/curriculum" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">교과 과정</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
		),

		array(
			'title'       => '소개',
			'slug'        => 'intro',
			'parent_slug' => 'art-college',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/page-art-college-intro"} /-->',
		),

		array(
			'title'       => '교육 이념',
			'slug'        => 'philosophy',
			'parent_slug' => 'art-college',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/page-art-college-philosophy"} /-->',
		),

		array(
			'title'       => '비전',
			'slug'        => 'vision',
			'parent_slug' => 'art-college',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/page-art-college-vision"} /-->',
		),

		array(
			'title'       => '교과 과정',
			'slug'        => 'curriculum',
			'parent_slug' => 'art-college',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/page-art-college-curriculum"} /-->',
		),

		/* ══════════════════════════════════════════════════
		 * Academy 섹션
		 * ════════════════════════════════════════════════ */
		array(
			'title'       => 'Academy',
			'slug'        => 'academy',
			'parent_slug' => '',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">Academy</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">문화예술을 배우고 싶은 발달장애인을 위한 전문 아카데미입니다.</p><!-- /wp:paragraph --><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/academy/intro" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">소개</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/academy/courses" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">과정</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
		),

		array(
			'title'       => '소개',
			'slug'        => 'intro',
			'parent_slug' => 'academy',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/page-academy-intro"} /-->',
		),

		array(
			'title'       => '과정',
			'slug'        => 'courses',
			'parent_slug' => 'academy',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/page-academy-courses"} /-->',
		),

		/* ══════════════════════════════════════════════════
		 * Contents 섹션
		 * ════════════════════════════════════════════════ */
		array(
			'title'       => 'Contents',
			'slug'        => 'contents',
			'parent_slug' => '',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">Contents</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프가 제작·참여한 드라마, 예능, 교육, 교양 콘텐츠를 소개합니다.</p><!-- /wp:paragraph --><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|40"}}}} --><div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:column --><div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#1E2F6F"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} --><div class="wp-block-group" style="background-color:#1E2F6F;border-radius:8px;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"}}} --><h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700">드라마</h3><!-- /wp:heading --><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} --><div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"1px"},"color":{"text":"#FFFFFF"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contents/drama" style="border-radius:6px;border-color:rgba(255,255,255,0.6);color:#FFFFFF">보기</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#46C449"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} --><div class="wp-block-group" style="background-color:#46C449;border-radius:8px;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"}}} --><h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700">예능</h3><!-- /wp:heading --><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} --><div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"1px"},"color":{"text":"#FFFFFF"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contents/entertainment" style="border-radius:6px;border-color:rgba(255,255,255,0.6);color:#FFFFFF">보기</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#E2A21A"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} --><div class="wp-block-group" style="background-color:#E2A21A;border-radius:8px;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"}}} --><h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700">교육</h3><!-- /wp:heading --><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} --><div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"1px"},"color":{"text":"#FFFFFF"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contents/education" style="border-radius:6px;border-color:rgba(255,255,255,0.6);color:#FFFFFF">보기</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#6F4B8B"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} --><div class="wp-block-group" style="background-color:#6F4B8B;border-radius:8px;padding:var(--wp--preset--spacing--40) var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"700"}}} --><h3 class="wp-block-heading" style="color:#FFFFFF;font-size:var(--wp--preset--font-size--x-large);font-weight:700">교양</h3><!-- /wp:heading --><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} --><div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"1px"},"color":{"text":"#FFFFFF"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contents/culture" style="border-radius:6px;border-color:rgba(255,255,255,0.6);color:#FFFFFF">보기</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
		),

		array(
			'title'       => '드라마',
			'slug'        => 'drama',
			'parent_slug' => 'contents',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">드라마</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프가 참여하거나 제작한 드라마 콘텐츠입니다.</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"}}} --><p style="color:var(--wp--preset--color--soft-gray)"><!-- TODO: 드라마 콘텐츠 목록 추가 필요 --></p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '예능',
			'slug'        => 'entertainment',
			'parent_slug' => 'contents',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">예능</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프가 참여하거나 제작한 예능 콘텐츠입니다.</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"}}} --><p style="color:var(--wp--preset--color--soft-gray)"><!-- TODO: 예능 콘텐츠 목록 추가 필요 --></p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '교육',
			'slug'        => 'education',
			'parent_slug' => 'contents',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">교육</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프가 참여하거나 제작한 교육 콘텐츠입니다.</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"}}} --><p style="color:var(--wp--preset--color--soft-gray)"><!-- TODO: 교육 콘텐츠 목록 추가 필요 --></p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		array(
			'title'       => '교양',
			'slug'        => 'culture',
			'parent_slug' => 'contents',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">교양</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프가 참여하거나 제작한 교양 콘텐츠입니다.</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"}}} --><p style="color:var(--wp--preset--color--soft-gray)"><!-- TODO: 교양 콘텐츠 목록 추가 필요 --></p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		/* ══════════════════════════════════════════════════
		 * Board 섹션
		 * ════════════════════════════════════════════════ */
		array(
			'title'       => 'Board',
			'slug'        => 'board',
			'parent_slug' => '',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">Board</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프의 공연 알림과 법인 공시 서류를 확인하세요.</p><!-- /wp:paragraph --><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/board/notices" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">공연 알림</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px","color":"var:preset|color|deep-navy","width":"1px"},"color":{"text":"var:preset|color|deep-navy"}}} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/board/disclosures" style="border-radius:6px;border-color:var(--wp--preset--color--deep-navy);color:var(--wp--preset--color--deep-navy)">법인 재정관련 공시 서류</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
		),

		array(
			'title'       => '공연 알림',
			'slug'        => 'notices',
			'parent_slug' => 'board',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">공연 알림</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">라하프의 공연 및 행사 일정을 안내합니다.</p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:group {"style":{"color":{"background":"#F8F8F8"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="background-color:#F8F8F8;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:query {"queryId":30,"query":{"perPage":10,"pages":0,"offset":0,"postType":"notice","order":"desc","orderBy":"date"},"layout":{"type":"default"}} --><div class="wp-block-query"><!-- wp:post-template --><!-- wp:group {"style":{"border":{"bottom":{"width":"1px","color":"#E8E8E8"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"space-between","alignItems":"center"}} --><div class="wp-block-group" style="border-bottom:1px solid #E8E8E8;padding:var(--wp--preset--spacing--30) 0"><!-- wp:post-title {"isLink":true,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"600"}}} /--><!-- wp:post-date {"style":{"color":{"text":"var:preset|color|soft-gray"},"typography":{"fontSize":"var:preset|font-size|small"}}} /--></div><!-- /wp:group --><!-- /wp:post-template --><!-- wp:query-no-results --><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|soft-gray"}}} --><p style="color:var(--wp--preset--color--soft-gray)">등록된 공연 알림이 없습니다.</p><!-- /wp:paragraph --><!-- /wp:query-no-results --><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} --><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /--><!-- /wp:query-pagination --></div><!-- /wp:query --></div><!-- /wp:group -->',
		),

		array(
			'title'       => '법인 재정관련 공시 서류',
			'slug'        => 'disclosures',
			'parent_slug' => 'board',
			'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"700"}}} --><h1 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--hero);font-weight:700">법인 재정관련 공시 서류</h1><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.9"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--large);line-height:1.9">사단법인 라하프의 투명한 운영을 위한 재정 관련 공시 서류를 공개합니다.</p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- wp:group {"style":{"color":{"background":"#FFFBF0"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="background-color:#FFFBF0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|deep-navy"},"typography":{"fontSize":"var:preset|font-size|xx-large","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} --><h2 class="wp-block-heading" style="color:var(--wp--preset--color--deep-navy);font-size:var(--wp--preset--font-size--xx-large);font-weight:700;margin-bottom:var(--wp--preset--spacing--30)">공시 서류</h2><!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#333333"},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.8"}}} --><p style="color:#333333;font-size:var(--wp--preset--font-size--medium);line-height:1.8"><!-- TODO: 공시 서류 파일 첨부 및 목록 추가 필요 --></p><!-- /wp:paragraph --></div><!-- /wp:group -->' . $cta,
		),

		/* ══════════════════════════════════════════════════
		 * 문의 페이지
		 * ════════════════════════════════════════════════ */
		array(
			'title'       => '문의하기',
			'slug'        => 'inquiry',
			'parent_slug' => '',
			'content'     => '<!-- wp:pattern {"slug":"lahaph-theme/page-inquiry"} /-->',
		),

	);
}
