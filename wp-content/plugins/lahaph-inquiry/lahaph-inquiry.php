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

/**
 * 플러그인 초기화
 * Phase 6에서 문의 처리 로직이 추가됩니다.
 */
function lahaph_inquiry_init(): void {
	// TODO: Phase 6 — 문의 폼 shortcode 또는 블록 등록
	// TODO: Phase 6 — 폼 제출 처리 (nonce 검증, 입력값 sanitize)
	// TODO: Phase 6 — 이메일 발송 (wp_mail)
	// TODO: Phase 6 — DB 저장 (선택적)
	// TODO: Phase 6 — 관리자 문의 목록 뷰
}
add_action( 'init', 'lahaph_inquiry_init' );
