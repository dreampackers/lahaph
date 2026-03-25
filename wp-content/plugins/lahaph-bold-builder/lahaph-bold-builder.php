<?php
/**
 * Plugin Name: Lahaph Bold Page Builder Elements
 * Plugin URI: https://lahaph.org
 * Description: Bold Page Builder 전용 커스텀 요소. 뮤지컬·멤버·아티스트·아카데미·콘텐츠·공연 알림·공시 서류·문의 폼·연락처 CPT를 빌더 안에서 동적으로 연결합니다.
 * Version: 1.2.0
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

define( 'LAHAPH_BB_VERSION', '1.2.0' );
define( 'LAHAPH_BB_DIR', plugin_dir_path( __FILE__ ) );
define( 'LAHAPH_BB_URL', plugin_dir_url( __FILE__ ) );

/* ─────────────────────────────────────────────────────────────
   Bold Page Builder 가 활성화되지 않은 경우 — 독립 숏코드 폴백
   BBP 활성 시에는 테마의 bold-page-builder/content_elements/ 클래스가
   shortcode를 자동 등록하므로 이 블록은 실행되지 않습니다.
───────────────────────────────────────────────────────────── */
add_action( 'init', 'lahaph_bb_load_fallback_elements', 20 );

function lahaph_bb_load_fallback_elements(): void {
	// BBP 가 활성화되어 있으면 테마 클래스가 shortcode 를 등록 — 중복 방지
	if ( class_exists( 'BT_BB_Element' ) ) {
		return;
	}

	$elements = [
		'musical-loop',
		'member-grid',
		'inquiry-form',
		'contact-info',
	];

	foreach ( $elements as $element ) {
		require_once LAHAPH_BB_DIR . "elements/{$element}.php";
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
   관리자 — 활성화 알림 (BBP 미설치 시 경고)
───────────────────────────────────────────────────────────── */
add_action( 'admin_notices', 'lahaph_bb_admin_notice' );

function lahaph_bb_admin_notice(): void {
	if ( class_exists( 'BT_BB_Root' ) ) {
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
