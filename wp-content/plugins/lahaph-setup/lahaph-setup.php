<?php
/**
 * Plugin Name: Lahaph Setup
 * Description: 라하프 웹사이트 초기 콘텐츠 일괄 설치 플러그인. 활성화 시 CPT 데이터와 모든 페이지를 자동 생성합니다. 설치 완료 후 비활성화하세요.
 * Version: 1.0.0
 * Author: Lahaph
 * Text Domain: lahaph-setup
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LAHAPH_SETUP_DIR', plugin_dir_path( __FILE__ ) );

require_once LAHAPH_SETUP_DIR . 'data/members.php';
require_once LAHAPH_SETUP_DIR . 'data/musicals.php';
require_once LAHAPH_SETUP_DIR . 'data/courses.php';
require_once LAHAPH_SETUP_DIR . 'data/pages.php';
require_once LAHAPH_SETUP_DIR . 'includes/installer.php';

register_activation_hook( __FILE__, 'lahaph_setup_run' );

function lahaph_setup_run(): void {
	lahaph_setup_terms();
	lahaph_setup_members();
	lahaph_setup_musicals();
	lahaph_setup_courses();
	lahaph_setup_pages();
	lahaph_setup_options();

	flush_rewrite_rules();
}
