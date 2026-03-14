<?php
/**
 * lahaph-board: notice, disclosure 메타 필드 등록
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_board_register_meta(): void {
	lahaph_board_register_notice_meta();
	lahaph_board_register_disclosure_meta();
}
add_action( 'init', 'lahaph_board_register_meta' );

/**
 * 공연 알림 메타 필드
 */
function lahaph_board_register_notice_meta(): void {
	$defaults = [
		'single'       => true,
		'show_in_rest' => true,
	];

	register_post_meta( 'notice', 'lahaph_summary', $defaults + [
		'type'        => 'string',
		'description' => '알림 요약',
	] );
	register_post_meta( 'notice', 'lahaph_notice_status', $defaults + [
		'type'        => 'string',
		'description' => '모집 상태 (모집중 / 마감 / 예정)',
	] );
	register_post_meta( 'notice', 'lahaph_related_program', $defaults + [
		'type'        => 'string',
		'description' => '관련 프로그램명',
	] );
	register_post_meta( 'notice', 'lahaph_event_date', $defaults + [
		'type'        => 'string',
		'description' => '공연/이벤트 날짜 (YYYY-MM-DD)',
	] );
	register_post_meta( 'notice', 'lahaph_attached_file', $defaults + [
		'type'        => 'integer',
		'description' => '첨부 파일 첨부 ID',
	] );
	register_post_meta( 'notice', 'lahaph_display_order', $defaults + [
		'type'        => 'integer',
		'description' => '노출 순서',
		'default'     => 0,
	] );
}

/**
 * 공시 서류 메타 필드
 */
function lahaph_board_register_disclosure_meta(): void {
	$defaults = [
		'single'       => true,
		'show_in_rest' => true,
	];

	register_post_meta( 'disclosure', 'lahaph_summary', $defaults + [
		'type'        => 'string',
		'description' => '서류 요약',
	] );
	register_post_meta( 'disclosure', 'lahaph_disclosure_year', $defaults + [
		'type'        => 'integer',
		'description' => '공시 연도',
	] );
	register_post_meta( 'disclosure', 'lahaph_attached_file', $defaults + [
		'type'        => 'integer',
		'description' => '첨부 파일 첨부 ID',
	] );
	register_post_meta( 'disclosure', 'lahaph_display_order', $defaults + [
		'type'        => 'integer',
		'description' => '노출 순서',
		'default'     => 0,
	] );
}
