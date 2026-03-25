<?php
/**
 * lahaph-core: 핵심 택소노미 등록
 *
 * 등록 택소노미: member_group
 * musical 관련 택소노미는 lahaph-musicals 플러그인에서 등록합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_register_taxonomies(): void {
	lahaph_register_member_group_taxonomy();
}
add_action( 'init', 'lahaph_register_taxonomies' );

/**
 * 멤버 그룹 택소노미
 * 기본 항목: 섬기는 분, 감독진, 배우, 예술하는 강사들, 운영진
 */
function lahaph_register_member_group_taxonomy(): void {
	$labels = [
		'name'          => '멤버 그룹',
		'singular_name' => '멤버 그룹',
		'search_items'  => '그룹 검색',
		'all_items'     => '전체 그룹',
		'edit_item'     => '그룹 편집',
		'update_item'   => '그룹 수정',
		'add_new_item'  => '새 그룹 추가',
		'new_item_name' => '새 그룹 이름',
		'menu_name'     => '멤버 그룹',
	];

	register_taxonomy( 'member_group', 'member', [
		'labels'            => $labels,
		'hierarchical'      => false,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'rewrite'           => [ 'slug' => 'member-group' ],
	] );
}
