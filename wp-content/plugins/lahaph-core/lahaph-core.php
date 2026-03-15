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

require_once LAHAPH_CORE_DIR . 'includes/post-types.php';
require_once LAHAPH_CORE_DIR . 'includes/taxonomies.php';
require_once LAHAPH_CORE_DIR . 'includes/meta-fields.php';
require_once LAHAPH_CORE_DIR . 'includes/admin-usability.php';
