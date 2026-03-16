<?php
/**
 * Elementor Dynamic Tag: 라하프 메타 필드
 *
 * 현재 포스트의 lahaph_* 메타 필드 값을 Elementor 동적 태그로 반환합니다.
 * Elementor Pro 가 필요합니다.
 *
 * 사용 예:
 * - 텍스트 위젯의 내용 → 동적 태그 → 라하프 메타 필드 → 필드명: lahaph_year
 * - 이미지 위젯의 URL → 동적 태그 → 라하프 메타 필드 → 필드명: lahaph_poster_image (첨부 ID)
 */

namespace Lahaph\Elementor\Dynamic_Tags;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Elementor Pro 없이는 Dynamic_Tag 클래스가 존재하지 않으므로 방어 처리
if ( ! class_exists( '\Elementor\Core\DynamicTags\Tag' ) ) {
	return;
}

use Elementor\Core\DynamicTags\Tag;
use Elementor\Controls_Manager;
use Elementor\Modules\DynamicTags\Module;

class Lahaph_Meta_Tag extends Tag {

	public function get_name(): string {
		return 'lahaph-meta-tag';
	}

	public function get_title(): string {
		return '라하프 메타 필드';
	}

	public function get_group(): string {
		return 'lahaph-meta';
	}

	/**
	 * 이 태그를 사용할 수 있는 Elementor 컨트롤 타입 목록
	 */
	public function get_categories(): array {
		return [
			Module::TEXT_CATEGORY,
			Module::URL_CATEGORY,
			Module::NUMBER_CATEGORY,
		];
	}

	protected function register_controls(): void {
		$this->add_control( 'meta_key', [
			'label'       => '메타 필드 키',
			'type'        => Controls_Manager::SELECT,
			'options'     => [
				'lahaph_year'             => '연도 (lahaph_year)',
				'lahaph_subtitle'         => '부제 (lahaph_subtitle)',
				'lahaph_intro'            => '공연 소개 (lahaph_intro)',
				'lahaph_inquiry_phone'    => '문의 전화 (lahaph_inquiry_phone)',
				'lahaph_role'             => '역할 (lahaph_role)',
				'lahaph_education'        => '학력 (lahaph_education)',
				'lahaph_affiliation'      => '소속 (lahaph_affiliation)',
				'lahaph_profile_summary'  => '프로필 요약 (lahaph_profile_summary)',
				'lahaph_summary'          => '요약 (lahaph_summary)',
				'lahaph_youtube_url'      => 'YouTube URL (lahaph_youtube_url)',
				'lahaph_after_school_time'=> '방과 후 운영 시간',
				'lahaph_after_work_time'  => '직장인반 운영 시간',
				'lahaph_notice_status'    => '모집 상태 (lahaph_notice_status)',
				'lahaph_event_date'       => '공연 날짜 (lahaph_event_date)',
				'lahaph_related_program'  => '관련 프로그램',
				'lahaph_disclosure_year'  => '공시 연도 (lahaph_disclosure_year)',
				'lahaph_display_order'    => '표시 순서 (lahaph_display_order)',
			],
			'default'     => 'lahaph_year',
		] );

		$this->add_control( 'fallback', [
			'label'       => '기본값 (비어있을 때)',
			'type'        => Controls_Manager::TEXT,
			'placeholder' => '값이 없을 때 표시할 텍스트',
		] );
	}

	public function render(): void {
		$meta_key = $this->get_settings( 'meta_key' );
		$fallback = $this->get_settings( 'fallback' );

		if ( ! $meta_key ) {
			echo esc_html( $fallback );
			return;
		}

		$value = get_post_meta( get_the_ID(), $meta_key, true );

		echo esc_html( $value ?: $fallback );
	}
}
