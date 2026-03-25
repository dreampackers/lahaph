<?php
/**
 * lahaph-core: 핵심 커스텀 포스트 타입 등록
 *
 * 등록 CPT: member
 * 뮤지컬(musical)은 lahaph-musicals 플러그인에서 등록합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_register_post_types(): void {
	lahaph_register_member_cpt();
}
add_action( 'init', 'lahaph_register_post_types' );

/**
 * 멤버 CPT
 */
function lahaph_register_member_cpt(): void {
	$labels = [
		'name'               => '멤버',
		'singular_name'      => '멤버',
		'add_new'            => '멤버 추가',
		'add_new_item'       => '새 멤버 추가',
		'edit_item'          => '멤버 편집',
		'new_item'           => '새 멤버',
		'view_item'          => '멤버 보기',
		'search_items'       => '멤버 검색',
		'not_found'          => '멤버를 찾을 수 없습니다.',
		'not_found_in_trash' => '휴지통에 멤버가 없습니다.',
		'all_items'          => '전체 멤버',
		'menu_name'          => '멤버',
	];

	register_post_type( 'member', [
		'labels'              => $labels,
		'public'              => true,
		'show_in_rest'        => true,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
		'menu_icon'           => 'dashicons-groups',
		'menu_position'       => 20,
		'has_archive'         => false,
		'rewrite'             => [ 'slug' => 'members' ],
		'show_in_nav_menus'   => false,
	] );
}
