<?php
/**
 * Elementor Widget: 문의 폼
 *
 * lahaph-inquiry 플러그인의 [lahaph_inquiry_form] 숏코드를 Elementor에서 사용 가능하게 합니다.
 */

namespace Lahaph\Elementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Inquiry_Form extends Widget_Base {

	public function get_name(): string {
		return 'lahaph_inquiry_form';
	}

	public function get_title(): string {
		return '라하프 문의 폼';
	}

	public function get_icon(): string {
		return 'eicon-form-horizontal';
	}

	public function get_categories(): array {
		return [ 'lahaph' ];
	}

	protected function register_controls(): void {

		$this->start_controls_section( 'section_content', [
			'label' => '폼 설정',
			'tab'   => Controls_Manager::TAB_CONTENT,
		] );

		$this->add_control( 'form_title', [
			'label'   => '폼 상단 제목',
			'type'    => Controls_Manager::TEXT,
			'default' => '상담 신청',
		] );

		$this->add_control( 'form_description', [
			'label'   => '폼 상단 설명',
			'type'    => Controls_Manager::TEXTAREA,
			'default' => '아이의 이름과 연락처를 남겨주시면 담당자가 연락드립니다.',
		] );

		$this->add_control( 'show_wrapper', [
			'label'        => '카드 배경 표시',
			'type'         => Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default'      => 'yes',
		] );

		$this->end_controls_section();
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();

		$wrapper_open  = 'yes' === $settings['show_wrapper']
			? '<div class="lahaph-inquiry-wrap">' : '';
		$wrapper_close = 'yes' === $settings['show_wrapper']
			? '</div>' : '';

		echo wp_kses_post( $wrapper_open );

		if ( $settings['form_title'] ) {
			echo '<h2 class="lahaph-inquiry-title">' . esc_html( $settings['form_title'] ) . '</h2>';
		}
		if ( $settings['form_description'] ) {
			echo '<p class="lahaph-inquiry-desc">' . esc_html( $settings['form_description'] ) . '</p>';
		}

		// lahaph-inquiry 플러그인 숏코드 실행
		if ( shortcode_exists( 'lahaph_inquiry_form' ) ) {
			echo do_shortcode( '[lahaph_inquiry_form]' );
		} else {
			echo '<p style="color:#c00">⚠ lahaph-inquiry 플러그인을 활성화해 주세요.</p>';
		}

		echo wp_kses_post( $wrapper_close );
	}
}
