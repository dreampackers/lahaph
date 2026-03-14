<?php
/**
 * Plugin Name: Lahaph Inquiry
 * Plugin URI: https://lahaph.org
 * Description: 라하프 문의 기능을 관리합니다. 문의 폼 처리, 이메일 발송, DB 저장, 관리자 문의 목록 뷰를 담당합니다.
 * Version: 1.0.0
 * Requires at least: 6.4
 * Requires PHP: 8.0
 * Author: Lahaph
 * Author URI: https://lahaph.org
 * License: GPL-2.0-or-later
 * Text Domain: lahaph-inquiry
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LAHAPH_INQUIRY_VERSION', '1.0.0' );
define( 'LAHAPH_INQUIRY_DIR', plugin_dir_path( __FILE__ ) );
define( 'LAHAPH_INQUIRY_URL', plugin_dir_url( __FILE__ ) );

require_once LAHAPH_INQUIRY_DIR . 'includes/db-setup.php';
require_once LAHAPH_INQUIRY_DIR . 'includes/form-handler.php';
require_once LAHAPH_INQUIRY_DIR . 'includes/admin-list.php';

/**
 * 플러그인 활성화 시 DB 테이블 생성
 */
register_activation_hook( __FILE__, 'lahaph_inquiry_create_table' );
