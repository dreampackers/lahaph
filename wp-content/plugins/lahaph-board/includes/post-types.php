<?php
/**
 * lahaph-board: notice, disclosure CPT 등록
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_board_register_post_types(): void {
	lahaph_board_register_notice_cpt();
	lahaph_board_register_disclosure_cpt();
}
add_action( 'init', 'lahaph_board_register_post_types' );

/**
 * 공연 알림 CPT
 */
function lahaph_board_register_notice_cpt(): void {
	$labels = [
		'name'               => '공연 알림',
		'singular_name'      => '공연 알림',
		'add_new'            => '알림 추가',
		'add_new_item'       => '새 알림 추가',
		'edit_item'          => '알림 편집',
		'new_item'           => '새 알림',
		'view_item'          => '알림 보기',
		'search_items'       => '알림 검색',
		'not_found'          => '알림을 찾을 수 없습니다.',
		'not_found_in_trash' => '휴지통에 알림이 없습니다.',
		'all_items'          => '전체 알림',
		'menu_name'          => '공연 알림',
	];

	register_post_type( 'notice', [
		'labels'            => $labels,
		'public'            => true,
		'show_in_rest'      => true,
		'supports'          => [ 'title', 'editor', 'custom-fields' ],
		'menu_icon'         => 'dashicons-megaphone',
		'menu_position'     => 30,
		'has_archive'       => true,
		'rewrite'           => [ 'slug' => 'board/notices' ],
		'show_in_nav_menus' => false,
	] );
}

/**
 * 법인 공시 서류 CPT
 */
function lahaph_board_register_disclosure_cpt(): void {
	$labels = [
		'name'               => '공시 서류',
		'singular_name'      => '공시 서류',
		'add_new'            => '서류 추가',
		'add_new_item'       => '새 서류 추가',
		'edit_item'          => '서류 편집',
		'new_item'           => '새 서류',
		'view_item'          => '서류 보기',
		'search_items'       => '서류 검색',
		'not_found'          => '서류를 찾을 수 없습니다.',
		'not_found_in_trash' => '휴지통에 서류가 없습니다.',
		'all_items'          => '전체 서류',
		'menu_name'          => '공시 서류',
	];

	register_post_type( 'disclosure', [
		'labels'            => $labels,
		'public'            => true,
		'show_in_rest'      => true,
		'supports'          => [ 'title', 'editor', 'custom-fields' ],
		'menu_icon'         => 'dashicons-media-document',
		'menu_position'     => 31,
		'has_archive'       => true,
		'rewrite'           => [ 'slug' => 'board/disclosures' ],
		'show_in_nav_menus' => false,
	] );
}
