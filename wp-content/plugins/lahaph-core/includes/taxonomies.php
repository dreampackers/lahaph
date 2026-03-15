<?php
/**
 * lahaph-core: 핵심 택소노미 등록
 *
 * 등록 택소노미: member_group, academy_category, content_category
 * musical_year는 lahaph-musicals 플러그인에서 등록합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_register_taxonomies(): void {
	lahaph_register_member_group_taxonomy();
	lahaph_register_academy_category_taxonomy();
	lahaph_register_content_category_taxonomy();
}
add_action( 'init', 'lahaph_register_taxonomies' );

/**
 * 멤버 그룹 택소노미
 * 기본 항목: 섬기는 분, 감독진, 배우, 예술하는 강사들, 운영진
 */
function lahaph_register_member_group_taxonomy(): void {
	$labels = [
		'name'              => '멤버 그룹',
		'singular_name'     => '멤버 그룹',
		'search_items'      => '그룹 검색',
		'all_items'         => '전체 그룹',
		'edit_item'         => '그룹 편집',
		'update_item'       => '그룹 수정',
		'add_new_item'      => '새 그룹 추가',
		'new_item_name'     => '새 그룹 이름',
		'menu_name'         => '멤버 그룹',
	];

	register_taxonomy( 'member_group', 'member', [
		'labels'            => $labels,
		'hierarchical'      => false,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'rewrite'           => [ 'slug' => 'member-group' ],
	] );
}

/**
 * 아카데미 분류 택소노미
 * 기본 항목: 음악, 무용/댄스, 미술, 생활, 미디어
 */
function lahaph_register_academy_category_taxonomy(): void {
	$labels = [
		'name'              => '과정 분류',
		'singular_name'     => '과정 분류',
		'search_items'      => '분류 검색',
		'all_items'         => '전체 분류',
		'edit_item'         => '분류 편집',
		'update_item'       => '분류 수정',
		'add_new_item'      => '새 분류 추가',
		'new_item_name'     => '새 분류 이름',
		'menu_name'         => '과정 분류',
	];

	register_taxonomy( 'academy_category', 'academy_course', [
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'rewrite'           => [ 'slug' => 'academy-category' ],
	] );
}

/**
 * 콘텐츠 카테고리 택소노미
 * 기본 항목: 드라마, 예능, 교육, 교양
 */
function lahaph_register_content_category_taxonomy(): void {
	$labels = [
		'name'              => '콘텐츠 분류',
		'singular_name'     => '콘텐츠 분류',
		'search_items'      => '분류 검색',
		'all_items'         => '전체 분류',
		'edit_item'         => '분류 편집',
		'update_item'       => '분류 수정',
		'add_new_item'      => '새 분류 추가',
		'new_item_name'     => '새 분류 이름',
		'menu_name'         => '콘텐츠 분류',
	];

	register_taxonomy( 'content_category', 'video_content', [
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'rewrite'           => [ 'slug' => 'content-category' ],
	] );
}
