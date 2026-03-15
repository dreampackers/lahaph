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

require_once LAHAPH_BOARD_DIR . 'includes/post-types.php';
require_once LAHAPH_BOARD_DIR . 'includes/meta-fields.php';
