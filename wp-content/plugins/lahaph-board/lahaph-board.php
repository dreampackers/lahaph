<?php
/**
 * Plugin Name: Lahaph Board
 * Plugin URI: https://lahaph.org
 * Description: 라하프 게시판 콘텐츠를 관리합니다. 공연 알림(notice)과 법인 재정관련 공시 서류(disclosure) CPT 및 파일 첨부, 날짜, 상태 필드를 처리합니다.
 * Version: 1.0.0
 * Requires at least: 6.4
 * Requires PHP: 8.0
 * Author: Lahaph
 * Author URI: https://lahaph.org
 * License: GPL-2.0-or-later
 * Text Domain: lahaph-board
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LAHAPH_BOARD_VERSION', '1.0.0' );
define( 'LAHAPH_BOARD_DIR', plugin_dir_path( __FILE__ ) );
define( 'LAHAPH_BOARD_URL', plugin_dir_url( __FILE__ ) );

/**
 * 플러그인 초기화
 * Phase 2에서 CPT 및 커스텀 필드가 추가됩니다.
 */
function lahaph_board_init(): void {
	// TODO: Phase 2 — notice CPT 등록 (공연 알림)
	//   필드: title, summary, content, notice_status, related_program,
	//          attached_file, event_date, display_order
	// TODO: Phase 2 — disclosure CPT 등록 (법인 재정관련 공시 서류)
	//   필드: title, summary, disclosure_year, attached_file, display_order
	// TODO: Phase 2 — 관리자 컬럼 및 파일 첨부 UI
}
add_action( 'init', 'lahaph_board_init' );
