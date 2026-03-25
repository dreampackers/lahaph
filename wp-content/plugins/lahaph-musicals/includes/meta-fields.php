<?php
/**
 * lahaph-musicals: musical 메타 필드 등록
 *
 * 스칼라 필드를 register_post_meta로 등록합니다.
 * 배열 필드(purpose, staff, cast, gallery_images)는 Phase 4 메타박스 UI에서 처리합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_musicals_register_meta(): void {
	$defaults = [
		'single'       => true,
		'show_in_rest' => true,
	];

	register_post_meta( 'musical', 'lahaph_year', $defaults + [
		'type'        => 'integer',
		'description' => '공연 연도',
	] );
	register_post_meta( 'musical', 'lahaph_subtitle', $defaults + [
		'type'        => 'string',
		'description' => '부제목',
	] );
	register_post_meta( 'musical', 'lahaph_intro', $defaults + [
		'type'        => 'string',
		'description' => '공연 소개',
	] );
	register_post_meta( 'musical', 'lahaph_inquiry_phone', $defaults + [
		'type'        => 'string',
		'description' => '문의 전화번호',
	] );
	register_post_meta( 'musical', 'lahaph_poster_image', $defaults + [
		'type'        => 'integer',
		'description' => '포스터 이미지 첨부 ID',
	] );
	register_post_meta( 'musical', 'lahaph_display_order', $defaults + [
		'type'        => 'integer',
		'description' => '노출 순서',
		'default'     => 0,
	] );
	// TODO: Phase 4 — story_content (에디터 본문으로 처리)
	// TODO: Phase 4 — purpose (반복 필드: 공연 목적 목록)
	// TODO: Phase 4 — staff (반복 필드: 스태프 목록)
	// TODO: Phase 4 — cast (반복 필드: 출연진 목록)
	// TODO: Phase 4 — gallery_images (반복 필드: 갤러리 이미지 ID 목록)
}
add_action( 'init', 'lahaph_musicals_register_meta' );
