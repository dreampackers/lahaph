<?php
/**
 * lahaph-core: 핵심 커스텀 포스트 타입 등록
 *
 * 등록 CPT: member, artist, academy_course, video_content
 * 뮤지컬(musical)은 lahaph-musicals 플러그인에서 등록합니다.
 * 게시판(notice, disclosure)은 lahaph-board 플러그인에서 등록합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_register_post_types(): void {
	lahaph_register_member_cpt();
	lahaph_register_artist_cpt();
	lahaph_register_academy_course_cpt();
	lahaph_register_video_content_cpt();
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

/**
 * 아티스트 CPT
 */
function lahaph_register_artist_cpt(): void {
	$labels = [
		'name'               => '아티스트',
		'singular_name'      => '아티스트',
		'add_new'            => '아티스트 추가',
		'add_new_item'       => '새 아티스트 추가',
		'edit_item'          => '아티스트 편집',
		'new_item'           => '새 아티스트',
		'view_item'          => '아티스트 보기',
		'search_items'       => '아티스트 검색',
		'not_found'          => '아티스트를 찾을 수 없습니다.',
		'not_found_in_trash' => '휴지통에 아티스트가 없습니다.',
		'all_items'          => '전체 아티스트',
		'menu_name'          => '아티스트',
	];

	register_post_type( 'artist', [
		'labels'            => $labels,
		'public'            => true,
		'show_in_rest'      => true,
		'supports'          => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
		'menu_icon'         => 'dashicons-art',
		'menu_position'     => 21,
		'has_archive'       => false,
		'rewrite'           => [ 'slug' => 'artists' ],
		'show_in_nav_menus' => false,
	] );
}

/**
 * 아카데미 과정 CPT
 */
function lahaph_register_academy_course_cpt(): void {
	$labels = [
		'name'               => '아카데미 과정',
		'singular_name'      => '아카데미 과정',
		'add_new'            => '과정 추가',
		'add_new_item'       => '새 과정 추가',
		'edit_item'          => '과정 편집',
		'new_item'           => '새 과정',
		'view_item'          => '과정 보기',
		'search_items'       => '과정 검색',
		'not_found'          => '과정을 찾을 수 없습니다.',
		'not_found_in_trash' => '휴지통에 과정이 없습니다.',
		'all_items'          => '전체 과정',
		'menu_name'          => '아카데미 과정',
	];

	register_post_type( 'academy_course', [
		'labels'            => $labels,
		'public'            => true,
		'show_in_rest'      => true,
		'supports'          => [ 'title', 'editor', 'custom-fields' ],
		'menu_icon'         => 'dashicons-welcome-learn-more',
		'menu_position'     => 22,
		'has_archive'       => true,
		'rewrite'           => [ 'slug' => 'academy/courses' ],
		'show_in_nav_menus' => false,
	] );
}

/**
 * 콘텐츠 (영상) CPT
 */
function lahaph_register_video_content_cpt(): void {
	$labels = [
		'name'               => '콘텐츠',
		'singular_name'      => '콘텐츠',
		'add_new'            => '콘텐츠 추가',
		'add_new_item'       => '새 콘텐츠 추가',
		'edit_item'          => '콘텐츠 편집',
		'new_item'           => '새 콘텐츠',
		'view_item'          => '콘텐츠 보기',
		'search_items'       => '콘텐츠 검색',
		'not_found'          => '콘텐츠를 찾을 수 없습니다.',
		'not_found_in_trash' => '휴지통에 콘텐츠가 없습니다.',
		'all_items'          => '전체 콘텐츠',
		'menu_name'          => '콘텐츠',
	];

	register_post_type( 'video_content', [
		'labels'            => $labels,
		'public'            => true,
		'show_in_rest'      => true,
		'supports'          => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
		'menu_icon'         => 'dashicons-video-alt3',
		'menu_position'     => 23,
		'has_archive'       => true,
		'rewrite'           => [ 'slug' => 'contents' ],
		'show_in_nav_menus' => false,
	] );
}
