<?php
/**
 * Lahaph Theme — functions.php
 *
 * 테마 기본 설정, 스타일 등록을 담당합니다.
 * 비즈니스 로직이나 CPT 등록은 플러그인에서 처리합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 테마 지원 기능 등록
 */
function lahaph_theme_setup(): void {
	// 한국어 포함 다국어 지원
	load_theme_textdomain( 'lahaph-theme', get_template_directory() . '/languages' );

	// 블록 에디터 스타일 지원
	add_theme_support( 'editor-styles' );

	// 반응형 임베드 지원
	add_theme_support( 'responsive-embeds' );

	// 커스텀 로고 지원
	add_theme_support( 'custom-logo', [
		'height'      => 80,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	] );

	// 포스트 썸네일 지원
	add_theme_support( 'post-thumbnails' );

	// HTML5 마크업 지원
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );

	// 타이틀 태그 자동 관리
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'lahaph_theme_setup' );

/**
 * 프론트엔드 스타일 등록
 */
function lahaph_enqueue_styles(): void {
	wp_enqueue_style(
		'lahaph-theme-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'lahaph_enqueue_styles' );
