<?php
/**
 * Lahaph Theme — functions.php (v2.0 · Elementor Edition)
 *
 * 클래식 테마 설정, Elementor 연동, 커스텀 위젯/동적 태그 등록을 담당합니다.
 * 비즈니스 로직 / CPT / 택소노미는 플러그인(lahaph-core 등)에서 처리합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LAHAPH_THEME_VERSION', '2.0.0' );
define( 'LAHAPH_THEME_DIR', get_template_directory() );
define( 'LAHAPH_THEME_URL', get_template_directory_uri() );


/* ═══════════════════════════════════════════════════════════════
   1. 테마 기본 설정
   ═══════════════════════════════════════════════════════════════ */

add_action( 'after_setup_theme', 'lahaph_theme_setup' );

function lahaph_theme_setup(): void {
	load_theme_textdomain( 'lahaph-theme', LAHAPH_THEME_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'custom-logo', [
		'height'      => 80,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	] );
	add_theme_support( 'html5', [
		'search-form', 'comment-form', 'comment-list',
		'gallery', 'caption', 'style', 'script',
	] );

	// Elementor 헤더/푸터 + 전체 너비 / 캔버스 템플릿 지원
	add_theme_support( 'elementor-header-footer' );

	// 네비게이션 메뉴 등록
	register_nav_menus( [
		'primary' => '주 메뉴',
		'footer'  => '푸터 메뉴',
	] );
}


/* ═══════════════════════════════════════════════════════════════
   2. 스타일 / 스크립트 등록
   ═══════════════════════════════════════════════════════════════ */

add_action( 'wp_enqueue_scripts', 'lahaph_enqueue_assets' );

function lahaph_enqueue_assets(): void {
	wp_enqueue_style(
		'lahaph-theme-style',
		get_stylesheet_uri(),
		[],
		LAHAPH_THEME_VERSION
	);

	wp_enqueue_style(
		'lahaph-google-fonts',
		'https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;600;700;800&display=swap',
		[],
		null
	);

	wp_enqueue_script(
		'lahaph-nav-toggle',
		LAHAPH_THEME_URL . '/assets/js/nav-toggle.js',
		[],
		LAHAPH_THEME_VERSION,
		true
	);
}


/* ═══════════════════════════════════════════════════════════════
   3. Elementor 커스텀 확장 로드
   ═══════════════════════════════════════════════════════════════ */

add_action( 'plugins_loaded', 'lahaph_load_elementor_extensions' );

function lahaph_load_elementor_extensions(): void {
	if ( ! did_action( 'elementor/loaded' ) ) {
		return;
	}
	require_once LAHAPH_THEME_DIR . '/inc/elementor/elementor-manager.php';
}


/* ═══════════════════════════════════════════════════════════════
   4. 위젯 영역
   ═══════════════════════════════════════════════════════════════ */

add_action( 'widgets_init', 'lahaph_register_sidebars' );

function lahaph_register_sidebars(): void {
	register_sidebar( [
		'name'          => '사이드바',
		'id'            => 'sidebar-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	] );
}


/* ═══════════════════════════════════════════════════════════════
   5. Elementor — 커스텀 위젯 카테고리 등록
   ═══════════════════════════════════════════════════════════════ */

add_action( 'elementor/elements/categories_registered', 'lahaph_register_elementor_category' );

function lahaph_register_elementor_category( $elements_manager ): void {
	$elements_manager->add_category( 'lahaph', [
		'title' => '라하프',
		'icon'  => 'fa fa-star',
	] );
}


/* ═══════════════════════════════════════════════════════════════
   6. Open Graph / SEO 메타 태그
   ═══════════════════════════════════════════════════════════════ */

add_action( 'wp_head', 'lahaph_seo_meta', 1 );

function lahaph_seo_meta(): void {
	global $post;

	$site_name = get_bloginfo( 'name' );

	if ( is_singular() && isset( $post ) ) {
		$title       = get_the_title( $post );
		$description = has_excerpt( $post )
			? wp_strip_all_tags( get_the_excerpt( $post ) )
			: wp_trim_words( wp_strip_all_tags( get_the_content( null, false, $post ) ), 30, '' );
		$image = get_the_post_thumbnail_url( $post, 'large' ) ?: '';
		$url   = get_permalink( $post );
		$type  = 'article';
	} elseif ( is_front_page() ) {
		$title       = $site_name . ' — 발달장애 문화예술 전문 기관';
		$description = '라하프는 발달장애인을 위한 아카데미, ART COLLEGE, 뮤지컬 공연을 운영하는 비영리 예술 단체입니다.';
		$image = '';
		$url   = home_url( '/' );
		$type  = 'website';
	} else {
		$title       = wp_get_document_title();
		$description = get_bloginfo( 'description' );
		$image = '';
		$url   = home_url( sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ?? '/' ) ) );
		$type  = 'website';
	}

	$description = mb_strimwidth( wp_strip_all_tags( $description ), 0, 160, '' );

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


/* ═══════════════════════════════════════════════════════════════
   7. 관리자 — Elementor 편집 바로가기 링크 추가
   ═══════════════════════════════════════════════════════════════ */

add_filter( 'page_row_actions', 'lahaph_elementor_edit_link', 10, 2 );

function lahaph_elementor_edit_link( array $actions, \WP_Post $post ): array {
	if ( ! did_action( 'elementor/loaded' ) ) {
		return $actions;
	}

	$document = \Elementor\Plugin::$instance->documents->get( $post->ID );
	if ( ! $document || ! $document->is_built_with_elementor() ) {
		return $actions;
	}

	$actions['elementor_edit'] = sprintf(
		'<a href="%s">%s</a>',
		esc_url( $document->get_edit_url() ),
		'Elementor로 편집'
	);

	return $actions;
}
