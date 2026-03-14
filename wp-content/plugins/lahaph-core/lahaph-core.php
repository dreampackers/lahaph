<?php
/**
 * Plugin Name: Lahaph Core
 * Plugin URI: https://lahaph.org
 * Description: 라하프 웹사이트의 핵심 데이터 구조를 담당합니다. CPT, 택소노미, 공유 메타 필드, 유틸리티 함수를 등록합니다.
 * Version: 1.0.0
 * Requires at least: 6.4
 * Requires PHP: 8.0
 * Author: Lahaph
 * Author URI: https://lahaph.org
 * License: GPL-2.0-or-later
 * Text Domain: lahaph-core
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LAHAPH_CORE_VERSION', '1.0.0' );
define( 'LAHAPH_CORE_DIR', plugin_dir_path( __FILE__ ) );
define( 'LAHAPH_CORE_URL', plugin_dir_url( __FILE__ ) );

/**
 * 플러그인 초기화
 * Phase 2에서 CPT, 택소노미, 메타 필드 등록이 추가됩니다.
 */
function lahaph_core_init(): void {
	// TODO: Phase 2 — CPT 등록 (musical, member, artist, academy_course, video_content)
	// TODO: Phase 2 — 택소노미 등록 (musical_year, member_group, academy_category, content_category)
	// TODO: Phase 2 — 공유 메타 필드 등록
}
add_action( 'init', 'lahaph_core_init' );
