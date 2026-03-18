<?php
/**
 * Plugin Name: Lahaph Bold Page Builder Elements
 * Plugin URI: https://lahaph.org
 * Description: Bold Page Builder 전용 커스텀 요소. 뮤지컬·멤버·아티스트·아카데미·콘텐츠·공연 알림·공시 서류·문의 폼·연락처 CPT를 빌더 안에서 동적으로 연결합니다.
 * Version: 1.0.0
 * Requires at least: 6.4
 * Requires PHP: 8.0
 * Author: Lahaph
 * Author URI: https://lahaph.org
 * License: GPL-2.0-or-later
 * Text Domain: lahaph-bold-builder
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LAHAPH_BB_VERSION', '1.0.0' );
define( 'LAHAPH_BB_DIR', plugin_dir_path( __FILE__ ) );
define( 'LAHAPH_BB_URL', plugin_dir_url( __FILE__ ) );

/* ─────────────────────────────────────────────────────────────
   요소 파일 로드
───────────────────────────────────────────────────────────── */
add_action( 'init', 'lahaph_bb_load_elements', 5 );

function lahaph_bb_load_elements(): void {
	$elements = [
		'musical-loop',
		'member-grid',
		'artist-grid',
		'academy-courses',
		'video-grid',
		'notice-list',
		'disclosure-table',
		'inquiry-form',
		'contact-info',
	];

	foreach ( $elements as $element ) {
		require_once LAHAPH_BB_DIR . "elements/{$element}.php";
	}
}

/* ─────────────────────────────────────────────────────────────
   Bold Page Builder 요소 등록 (빌더 활성화 시)
───────────────────────────────────────────────────────────── */
add_action( 'bt_bb_ready', 'lahaph_bb_register_elements' );

function lahaph_bb_register_elements(): void {
	// 각 요소 파일에서 lahaph_bb_register_{slug}() 를 호출합니다.
	$callbacks = [
		'lahaph_bb_register_musical_loop',
		'lahaph_bb_register_member_grid',
		'lahaph_bb_register_artist_grid',
		'lahaph_bb_register_academy_courses',
		'lahaph_bb_register_video_grid',
		'lahaph_bb_register_notice_list',
		'lahaph_bb_register_disclosure_table',
		'lahaph_bb_register_inquiry_form',
		'lahaph_bb_register_contact_info',
	];

	foreach ( $callbacks as $callback ) {
		if ( function_exists( $callback ) ) {
			call_user_func( $callback );
		}
	}
}

/* ─────────────────────────────────────────────────────────────
   프론트엔드 스타일
───────────────────────────────────────────────────────────── */
add_action( 'wp_enqueue_scripts', 'lahaph_bb_enqueue_styles' );

function lahaph_bb_enqueue_styles(): void {
	wp_enqueue_style(
		'lahaph-bb-elements',
		LAHAPH_BB_URL . 'assets/css/elements.css',
		[],
		LAHAPH_BB_VERSION
	);
}

/* ─────────────────────────────────────────────────────────────
   관리자 — 활성화 알림
───────────────────────────────────────────────────────────── */
add_action( 'admin_notices', 'lahaph_bb_admin_notice' );

function lahaph_bb_admin_notice(): void {
	if ( function_exists( 'bt_bb_add_shortcode' ) ) {
		return; // Bold Page Builder 정상 감지 — 알림 없음
	}
	?>
	<div class="notice notice-warning is-dismissible">
		<p>
			<strong>Lahaph Bold Builder Elements</strong>:
			Bold Page Builder 플러그인이 감지되지 않았습니다.
			빌더 UI를 사용하려면 <strong>Bold Page Builder</strong> 플러그인을 설치·활성화해 주세요.
			숏코드([lahaph_musical_loop] 등)는 빌더 없이도 동작합니다.
		</p>
	</div>
	<?php
}
