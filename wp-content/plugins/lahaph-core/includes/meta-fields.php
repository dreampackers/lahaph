<?php
/**
 * lahaph-core: 핵심 CPT 메타 필드 등록
 *
 * member, artist, academy_course, video_content 의 스칼라 메타 필드를 등록합니다.
 * 배열/반복 필드(career_items, award_items 등)는 Phase 4 메타박스 UI에서 처리합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_register_meta_fields(): void {
	lahaph_register_member_meta();
	lahaph_register_artist_meta();
	lahaph_register_academy_course_meta();
	lahaph_register_video_content_meta();
}
add_action( 'init', 'lahaph_register_meta_fields' );

/**
 * 멤버 메타 필드
 */
function lahaph_register_member_meta(): void {
	$defaults = [
		'single'       => true,
		'show_in_rest' => true,
	];

	register_post_meta( 'member', 'lahaph_role', $defaults + [
		'type'        => 'string',
		'description' => '역할',
	] );
	register_post_meta( 'member', 'lahaph_education', $defaults + [
		'type'        => 'string',
		'description' => '학력',
	] );
	register_post_meta( 'member', 'lahaph_affiliation', $defaults + [
		'type'        => 'string',
		'description' => '소속',
	] );
	register_post_meta( 'member', 'lahaph_profile_summary', $defaults + [
		'type'        => 'string',
		'description' => '프로필 요약',
	] );
	register_post_meta( 'member', 'lahaph_profile_image', $defaults + [
		'type'        => 'integer',
		'description' => '프로필 이미지 첨부 ID',
	] );
	register_post_meta( 'member', 'lahaph_display_order', $defaults + [
		'type'        => 'integer',
		'description' => '노출 순서',
		'default'     => 0,
	] );
	// TODO: Phase 4 — career_items (반복 필드: 경력 목록)
	// TODO: Phase 4 — award_items (반복 필드: 수상 목록)
}

/**
 * 아티스트 메타 필드
 */
function lahaph_register_artist_meta(): void {
	$defaults = [
		'single'       => true,
		'show_in_rest' => true,
	];

	register_post_meta( 'artist', 'lahaph_role', $defaults + [
		'type'        => 'string',
		'description' => '역할',
	] );
	register_post_meta( 'artist', 'lahaph_profile_summary', $defaults + [
		'type'        => 'string',
		'description' => '소개',
	] );
	register_post_meta( 'artist', 'lahaph_profile_image', $defaults + [
		'type'        => 'integer',
		'description' => '프로필 이미지 첨부 ID',
	] );
	register_post_meta( 'artist', 'lahaph_display_order', $defaults + [
		'type'        => 'integer',
		'description' => '노출 순서',
		'default'     => 0,
	] );
	// TODO: Phase 4 — major_works (반복 필드: 주요 작품)
	// TODO: Phase 4 — awards (반복 필드: 수상 목록)
}

/**
 * 아카데미 과정 메타 필드
 */
function lahaph_register_academy_course_meta(): void {
	$defaults = [
		'single'       => true,
		'show_in_rest' => true,
	];

	register_post_meta( 'academy_course', 'lahaph_summary', $defaults + [
		'type'        => 'string',
		'description' => '과정 요약',
	] );
	register_post_meta( 'academy_course', 'lahaph_after_school_time', $defaults + [
		'type'        => 'string',
		'description' => '방과 후 운영 시간',
	] );
	register_post_meta( 'academy_course', 'lahaph_after_work_time', $defaults + [
		'type'        => 'string',
		'description' => '직장인반 운영 시간',
	] );
	register_post_meta( 'academy_course', 'lahaph_display_order', $defaults + [
		'type'        => 'integer',
		'description' => '노출 순서',
		'default'     => 0,
	] );
	// TODO: Phase 4 — detail_description (에디터 본문으로 처리)
	// TODO: Phase 4 — expected_effects (반복 필드: 기대 효과 목록)
}

/**
 * 콘텐츠 (영상) 메타 필드
 */
function lahaph_register_video_content_meta(): void {
	$defaults = [
		'single'       => true,
		'show_in_rest' => true,
	];

	register_post_meta( 'video_content', 'lahaph_summary', $defaults + [
		'type'        => 'string',
		'description' => '콘텐츠 요약',
	] );
	register_post_meta( 'video_content', 'lahaph_youtube_url', $defaults + [
		'type'              => 'string',
		'description'       => 'YouTube URL',
		'sanitize_callback' => 'esc_url_raw',
	] );
	register_post_meta( 'video_content', 'lahaph_thumbnail', $defaults + [
		'type'        => 'integer',
		'description' => '썸네일 이미지 첨부 ID',
	] );
	register_post_meta( 'video_content', 'lahaph_display_order', $defaults + [
		'type'        => 'integer',
		'description' => '노출 순서',
		'default'     => 0,
	] );
}
