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

require_once LAHAPH_MUSICALS_DIR . 'includes/post-types.php';
require_once LAHAPH_MUSICALS_DIR . 'includes/taxonomies.php';
require_once LAHAPH_MUSICALS_DIR . 'includes/meta-fields.php';
require_once LAHAPH_MUSICALS_DIR . 'includes/admin-columns.php';
