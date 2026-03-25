<?php
/**
 * lahaph-core: 핵심 CPT 메타 필드 등록
 *
 * member 의 스칼라 메타 필드를 등록합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lahaph_register_meta_fields(): void {
	lahaph_register_member_meta();
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
	register_post_meta( 'member', 'lahaph_affiliation', $defaults + [
		'type'        => 'string',
		'description' => '소속',
	] );
	register_post_meta( 'member', 'lahaph_profile_summary', $defaults + [
		'type'        => 'string',
		'description' => '프로필 요약',
	] );
	register_post_meta( 'member', 'lahaph_display_order', $defaults + [
		'type'        => 'integer',
		'description' => '노출 순서',
		'default'     => 0,
	] );
}
