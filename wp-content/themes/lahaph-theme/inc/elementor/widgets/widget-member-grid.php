<?php
/**
 * Elementor Widget: 멤버 그리드
 *
 * member CPT를 그룹 필터와 함께 카드 그리드로 출력합니다.
 */

namespace Lahaph\Elementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Member_Grid extends Widget_Base {

	public function get_name(): string {
		return 'lahaph_member_grid';
	}

	public function get_title(): string {
		return '멤버 그리드';
	}

	public function get_icon(): string {
		return 'eicon-person';
	}

	public function get_categories(): array {
		return [ 'lahaph' ];
	}

	protected function register_controls(): void {

		$this->start_controls_section( 'section_query', [
			'label' => '쿼리 설정',
			'tab'   => Controls_Manager::TAB_CONTENT,
		] );

		$this->add_control( 'member_group', [
			'label'       => '멤버 그룹 (비워두면 전체)',
			'type'        => Controls_Manager::TEXT,
			'placeholder' => '예: 감독진, 섬기는-분, 배우, 운영진',
			'description' => 'member_group 택소노미 슬러그 입력',
		] );

		$this->add_control( 'posts_per_page', [
			'label'   => '표시 개수',
			'type'    => Controls_Manager::NUMBER,
			'default' => 20,
			'min'     => 1,
			'max'     => 100,
		] );

		$this->end_controls_section();

		$this->start_controls_section( 'section_layout', [
			'label' => '레이아웃',
			'tab'   => Controls_Manager::TAB_CONTENT,
		] );

		$this->add_control( 'columns', [
			'label'   => '열 수',
			'type'    => Controls_Manager::SELECT,
			'options' => [ '2' => '2열', '3' => '3열', '4' => '4열' ],
			'default' => '3',
		] );

		$this->add_control( 'show_role', [
			'label'        => '역할 표시',
			'type'         => Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default'      => 'yes',
		] );

		$this->add_control( 'show_affiliation', [
			'label'        => '소속 표시',
			'type'         => Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default'      => 'yes',
		] );

		$this->add_control( 'show_photo', [
			'label'        => '프로필 사진 표시',
			'type'         => Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default'      => 'yes',
		] );

		$this->end_controls_section();
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();

		$query_args = [
			'post_type'      => 'member',
			'posts_per_page' => (int) $settings['posts_per_page'],
			'orderby'        => 'meta_value_num',
			'meta_key'       => 'lahaph_display_order',
			'order'          => 'ASC',
		];

		$group_slug = sanitize_text_field( $settings['member_group'] );
		if ( $group_slug ) {
			$query_args['tax_query'] = [ [
				'taxonomy' => 'member_group',
				'field'    => 'slug',
				'terms'    => $group_slug,
			] ];
		}

		$query   = new \WP_Query( $query_args );
		$columns = (int) $settings['columns'];

		if ( ! $query->have_posts() ) {
			echo '<p style="color:#888">등록된 멤버가 없습니다.</p>';
			return;
		}
		?>
		<div class="lahaph-member-grid lahaph-grid lahaph-grid--<?php echo esc_attr( $columns ); ?>">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				$role        = get_post_meta( get_the_ID(), 'lahaph_role', true );
				$affiliation = get_post_meta( get_the_ID(), 'lahaph_affiliation', true );
				?>
				<div class="lahaph-member-card">
					<?php if ( 'yes' === $settings['show_photo'] && has_post_thumbnail() ) : ?>
						<div class="lahaph-member-card__photo">
							<?php the_post_thumbnail( [ 80, 80 ] ); ?>
						</div>
					<?php endif; ?>
					<h3 class="lahaph-member-card__name"><?php the_title(); ?></h3>
					<?php if ( 'yes' === $settings['show_role'] && $role ) : ?>
						<p class="lahaph-member-card__role"><?php echo esc_html( $role ); ?></p>
					<?php endif; ?>
					<?php if ( 'yes' === $settings['show_affiliation'] && $affiliation ) : ?>
						<p class="lahaph-member-card__affiliation"><?php echo esc_html( $affiliation ); ?></p>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<?php
	}
}
