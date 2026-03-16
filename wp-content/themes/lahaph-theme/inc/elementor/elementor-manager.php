<?php
/**
 * Lahaph Elementor Manager
 *
 * 커스텀 위젯과 동적 태그를 Elementor에 등록합니다.
 * functions.php 의 plugins_loaded 훅에서 로드됩니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 위젯 파일 로드
require_once __DIR__ . '/widgets/widget-musical-loop.php';
require_once __DIR__ . '/widgets/widget-member-grid.php';
require_once __DIR__ . '/widgets/widget-artist-grid.php';
require_once __DIR__ . '/widgets/widget-video-grid.php';
require_once __DIR__ . '/widgets/widget-inquiry-form.php';

// 동적 태그 파일 로드
require_once __DIR__ . '/dynamic-tags/tag-lahaph-meta.php';

/**
 * 커스텀 위젯 등록
 */
add_action( 'elementor/widgets/register', 'lahaph_register_elementor_widgets' );

function lahaph_register_elementor_widgets( $widgets_manager ): void {
	$widgets_manager->register( new \Lahaph\Elementor\Widgets\Musical_Loop() );
	$widgets_manager->register( new \Lahaph\Elementor\Widgets\Member_Grid() );
	$widgets_manager->register( new \Lahaph\Elementor\Widgets\Artist_Grid() );
	$widgets_manager->register( new \Lahaph\Elementor\Widgets\Video_Grid() );
	$widgets_manager->register( new \Lahaph\Elementor\Widgets\Inquiry_Form() );
}

/**
 * 동적 태그 그룹 + 태그 등록
 */
add_action( 'elementor/dynamic_tags/register', 'lahaph_register_elementor_dynamic_tags' );

function lahaph_register_elementor_dynamic_tags( $dynamic_tags ): void {
	\Elementor\Plugin::$instance->dynamic_tags->register_group(
		'lahaph-meta',
		[ 'title' => '라하프 메타 필드' ]
	);

	$dynamic_tags->register( new \Lahaph\Elementor\Dynamic_Tags\Lahaph_Meta_Tag() );
}
