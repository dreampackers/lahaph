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


/* ---------------------------------------------------------------
 * Open Graph / SEO 기본 메타 태그
 * ------------------------------------------------------------- */
add_action( 'wp_head', 'lahaph_seo_meta', 1 );

function lahaph_seo_meta(): void {
	global $post;

	$site_name = get_bloginfo( 'name' );

	// 제목
	if ( is_singular() && isset( $post ) ) {
		$title       = get_the_title( $post );
		$description = has_excerpt( $post )
			? wp_strip_all_tags( get_the_excerpt( $post ) )
			: wp_trim_words( wp_strip_all_tags( get_the_content( null, false, $post ) ), 30, '' );
		$image       = get_the_post_thumbnail_url( $post, 'large' ) ?: '';
		$url         = get_permalink( $post );
		$type        = 'article';
	} elseif ( is_front_page() ) {
		$title       = $site_name . ' — 발달장애 문화예술 전문 기관';
		$description = '라하프는 발달장애인을 위한 아카데미, ART COLLEGE, 뮤지컬 공연을 운영하는 비영리 예술 단체입니다.';
		$image       = '';
		$url         = home_url( '/' );
		$type        = 'website';
	} else {
		$title       = wp_get_document_title();
		$description = get_bloginfo( 'description' );
		$image       = '';
		$url         = ( isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http' )
			. '://' . ( $_SERVER['HTTP_HOST'] ?? '' )
			. ( $_SERVER['REQUEST_URI'] ?? '' );
		$type        = 'website';
	}

	$description = mb_strimwidth( wp_strip_all_tags( $description ), 0, 160, '' );
	$image       = $image ?: '';

	echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:type"        content="' . esc_attr( $type ) . '">' . "\n";
	echo '<meta property="og:title"       content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:url"         content="' . esc_url( $url ) . '">' . "\n";
	echo '<meta property="og:site_name"   content="' . esc_attr( $site_name ) . '">' . "\n";
	echo '<meta property="og:locale"      content="ko_KR">' . "\n";
	if ( $image ) {
		echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";
	}
}
