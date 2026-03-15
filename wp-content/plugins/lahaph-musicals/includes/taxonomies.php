<?php
/**
 * lahaph-musicals: 뮤지컬 연도 택소노미 등록
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_musicals_register_taxonomy(): void {
	$labels = [
		'name'          => '공연 연도',
		'singular_name' => '공연 연도',
		'search_items'  => '연도 검색',
		'all_items'     => '전체 연도',
		'edit_item'     => '연도 편집',
		'update_item'   => '연도 수정',
		'add_new_item'  => '새 연도 추가',
		'new_item_name' => '새 연도',
		'menu_name'     => '공연 연도',
	];

	register_taxonomy( 'musical_year', 'musical', [
		'labels'            => $labels,
		'hierarchical'      => false,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'rewrite'           => [ 'slug' => 'musical-year' ],
	] );
}
add_action( 'init', 'lahaph_musicals_register_taxonomy' );
