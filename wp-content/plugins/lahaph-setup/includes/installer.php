<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ---------------------------------------------------------------
 * 1. 택소노미 텀 생성
 * ------------------------------------------------------------- */
function lahaph_setup_terms(): void {
	// member_group
	$member_groups = array( '임원', '감독진', '스태프', '문화예술', '배우' );
	foreach ( $member_groups as $name ) {
		if ( ! term_exists( $name, 'member_group' ) ) {
			wp_insert_term( $name, 'member_group' );
		}
	}

	// academy_category
	$academy_cats = array( '음악', '무용/댄스', '미술', '생활', '미디어' );
	foreach ( $academy_cats as $name ) {
		if ( ! term_exists( $name, 'academy_category' ) ) {
			wp_insert_term( $name, 'academy_category' );
		}
	}

	// musical_year
	foreach ( array( '2016', '2017', '2018', '2019', '2023', '2024', '2025' ) as $year ) {
		if ( ! term_exists( $year, 'musical_year' ) ) {
			wp_insert_term( $year, 'musical_year' );
		}
	}
}


/* ---------------------------------------------------------------
 * 2. 멤버 CPT 등록
 * ------------------------------------------------------------- */
function lahaph_setup_members(): void {
	$members = lahaph_get_members_data();

	foreach ( $members as $m ) {
		// 중복 체크
		$existing = get_page_by_path( sanitize_title( $m['title'] ), OBJECT, 'member' );
		if ( $existing ) {
			continue;
		}

		$post_id = wp_insert_post( array(
			'post_title'   => $m['title'],
			'post_type'    => 'member',
			'post_status'  => 'publish',
			'post_content' => $m['meta']['lahaph_bio'] ?? '',
		) );

		if ( is_wp_error( $post_id ) ) {
			continue;
		}

		// 그룹 택소노미
		$term = get_term_by( 'name', $m['group'], 'member_group' );
		if ( $term ) {
			wp_set_post_terms( $post_id, array( $term->term_id ), 'member_group' );
		}

		// 메타 필드
		foreach ( $m['meta'] as $key => $value ) {
			update_post_meta( $post_id, $key, $value );
		}
	}
}


/* ---------------------------------------------------------------
 * 3. 뮤지컬 CPT 등록
 * ------------------------------------------------------------- */
function lahaph_setup_musicals(): void {
	$musicals = lahaph_get_musicals_data();

	foreach ( $musicals as $musical ) {
		$existing = get_page_by_path( sanitize_title( $musical['title'] ), OBJECT, 'musical' );
		if ( $existing ) {
			continue;
		}

		$post_id = wp_insert_post( array(
			'post_title'   => $musical['title'],
			'post_type'    => 'musical',
			'post_status'  => 'publish',
			'post_content' => $musical['content'],
		) );

		if ( is_wp_error( $post_id ) ) {
			continue;
		}

		// 연도 택소노미
		$year_term = get_term_by( 'name', $musical['year_tax'], 'musical_year' );
		if ( $year_term ) {
			wp_set_post_terms( $post_id, array( $year_term->term_id ), 'musical_year' );
		}

		// 메타 필드
		foreach ( $musical['meta'] as $key => $value ) {
			update_post_meta( $post_id, $key, $value );
		}
	}
}


/* ---------------------------------------------------------------
 * 4. 아카데미 과정 CPT 등록
 * ------------------------------------------------------------- */
function lahaph_setup_courses(): void {
	$courses = lahaph_get_courses_data();

	foreach ( $courses as $course ) {
		$existing = get_page_by_path( sanitize_title( $course['title'] ), OBJECT, 'academy_course' );
		if ( $existing ) {
			continue;
		}

		$post_id = wp_insert_post( array(
			'post_title'   => $course['title'],
			'post_type'    => 'academy_course',
			'post_status'  => 'publish',
			'post_content' => $course['content'],
			'post_excerpt' => mb_strimwidth( $course['content'], 0, 60, '…' ),
		) );

		if ( is_wp_error( $post_id ) ) {
			continue;
		}

		// 분류 택소노미
		$cat_term = get_term_by( 'name', $course['category'], 'academy_category' );
		if ( $cat_term ) {
			wp_set_post_terms( $post_id, array( $cat_term->term_id ), 'academy_category' );
		}

		// 메타
		foreach ( $course['meta'] as $key => $value ) {
			update_post_meta( $post_id, $key, $value );
		}
	}
}


/* ---------------------------------------------------------------
 * 5. 정적 페이지 생성
 * ------------------------------------------------------------- */
function lahaph_setup_pages(): void {
	$pages = lahaph_get_pages_data();

	$slug_to_id = array();

	foreach ( $pages as $page ) {
		// 이미 존재하는 페이지는 건너뜀
		$existing = get_page_by_path( $page['slug'] );
		if ( $existing ) {
			$slug_to_id[ $page['slug'] ] = $existing->ID;
			continue;
		}

		$parent_id = 0;
		if ( ! empty( $page['parent_slug'] ) && isset( $slug_to_id[ $page['parent_slug'] ] ) ) {
			$parent_id = $slug_to_id[ $page['parent_slug'] ];
		}

		$post_id = wp_insert_post( array(
			'post_title'     => $page['title'],
			'post_name'      => $page['slug'],
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'post_content'   => $page['content'],
			'post_parent'    => $parent_id,
			'comment_status' => 'closed',
		) );

		if ( ! is_wp_error( $post_id ) ) {
			$slug_to_id[ $page['slug'] ] = $post_id;
		}
	}
}


/* ---------------------------------------------------------------
 * 6. 사이트 옵션 설정
 * ------------------------------------------------------------- */
function lahaph_setup_options(): void {
	// 홈 페이지 설정
	$front_page = get_page_by_path( 'home' );
	if ( $front_page ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page->ID );
	}

	// 샘플 페이지 삭제 (있을 경우)
	$sample = get_page_by_path( 'sample-page' );
	if ( $sample ) {
		wp_delete_post( $sample->ID, true );
	}

	// 블로그 설명
	update_option( 'blogdescription', '발달장애인 문화예술 교육·공연·전문 양성 기관' );
}
