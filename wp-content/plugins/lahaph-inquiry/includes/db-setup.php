<?php
/**
 * DB 테이블 생성 — lahaph_inquiries
 *
 * activation hook 에서 호출됩니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_inquiry_create_table() {
	global $wpdb;

	$table   = $wpdb->prefix . 'lahaph_inquiries';
	$charset = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE {$table} (
		id            BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
		name          VARCHAR(100)        NOT NULL DEFAULT '',
		phone         VARCHAR(30)         NOT NULL DEFAULT '',
		email         VARCHAR(100)        NOT NULL DEFAULT '',
		program_interest VARCHAR(100)     NOT NULL DEFAULT '',
		message       TEXT                NOT NULL,
		submitted_at  DATETIME            NOT NULL DEFAULT CURRENT_TIMESTAMP,
		status        VARCHAR(20)         NOT NULL DEFAULT 'new',
		PRIMARY KEY (id)
	) {$charset};";

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );

	update_option( 'lahaph_inquiry_db_version', LAHAPH_INQUIRY_VERSION );
}
