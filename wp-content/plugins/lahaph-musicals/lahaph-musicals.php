<?php
/**
 * Plugin Name: Lahaph Musicals
 * Plugin URI: https://lahaph.org
 * Description: 라하프 뮤지컬 공연 콘텐츠를 관리합니다. 공연별 커스텀 필드, 아카이브 동작, 관리자 컬럼 및 레이블을 처리합니다.
 * Version: 1.0.0
 * Requires at least: 6.4
 * Requires PHP: 8.0
 * Author: Lahaph
 * Author URI: https://lahaph.org
 * License: GPL-2.0-or-later
 * Text Domain: lahaph-musicals
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LAHAPH_MUSICALS_VERSION', '1.0.0' );
define( 'LAHAPH_MUSICALS_DIR', plugin_dir_path( __FILE__ ) );
define( 'LAHAPH_MUSICALS_URL', plugin_dir_url( __FILE__ ) );

/**
 * 플러그인 초기화
 * Phase 2에서 뮤지컬 관련 필드 및 관리자 UI가 추가됩니다.
 */
function lahaph_musicals_init(): void {
	// TODO: Phase 2 — musical CPT 커스텀 필드 등록
	//   (year, subtitle, intro, story_content, purpose, staff, cast,
	//    inquiry_phone, poster_image, gallery_images, display_order)
	// TODO: Phase 2 — musical_year 택소노미 등록
	// TODO: Phase 2 — 관리자 컬럼 (연도, 제목, 포스터 등)
	// TODO: Phase 2 — 아카이브 정렬 (연도 기준 내림차순)
}
add_action( 'init', 'lahaph_musicals_init' );
