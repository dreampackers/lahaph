<?php
/**
 * lahaph-musicals: musical CPT 등록
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_musicals_register_post_type(): void {
	$labels = [
		'name'               => '뮤지컬 공연',
		'singular_name'      => '공연',
		'add_new'            => '공연 추가',
		'add_new_item'       => '새 공연 추가',
		'edit_item'          => '공연 편집',
		'new_item'           => '새 공연',
		'view_item'          => '공연 보기',
		'search_items'       => '공연 검색',
		'not_found'          => '공연을 찾을 수 없습니다.',
		'not_found_in_trash' => '휴지통에 공연이 없습니다.',
		'all_items'          => '전체 공연',
		'menu_name'          => '뮤지컬 공연',
	];

	register_post_type( 'musical', [
		'labels'            => $labels,
		'public'            => true,
		'show_in_rest'      => true,
		'supports'          => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
		'menu_icon'         => 'dashicons-tickets-alt',
		'menu_position'     => 10,
		'has_archive'       => true,
		'rewrite'           => [ 'slug' => 'musical' ],
		'show_in_nav_menus' => false,
	] );
}
add_action( 'init', 'lahaph_musicals_register_post_type' );
