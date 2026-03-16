<?php
/**
 * Elementor Widget: 아티스트 그리드
 */

namespace Lahaph\Elementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Artist_Grid extends Widget_Base {

	public function get_name(): string {
		return 'lahaph_artist_grid';
	}

	public function get_title(): string {
		return '아티스트 그리드';
	}

	public function get_icon(): string {
		return 'eicon-image-rollover';
	}

	public function get_categories(): array {
		return [ 'lahaph' ];
	}

	protected function register_controls(): void {

		$this->start_controls_section( 'section_query', [
			'label' => '쿼리 설정',
			'tab'   => Controls_Manager::TAB_CONTENT,
		] );

		$this->add_control( 'posts_per_page', [
			'label'   => '표시 개수',
			'type'    => Controls_Manager::NUMBER,
			'default' => 12,
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

		$this->add_control( 'show_summary', [
			'label'        => '소개 요약 표시',
			'type'         => Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default'      => 'yes',
		] );

		$this->end_controls_section();
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();

		$query = new \WP_Query( [
			'post_type'      => 'artist',
			'posts_per_page' => (int) $settings['posts_per_page'],
			'orderby'        => 'meta_value_num',
			'meta_key'       => 'lahaph_display_order',
			'order'          => 'ASC',
		] );

		$columns = (int) $settings['columns'];

		if ( ! $query->have_posts() ) {
			echo '<p style="color:#888">등록된 아티스트가 없습니다.</p>';
			return;
		}
		?>
		<div class="lahaph-artist-grid lahaph-grid lahaph-grid--<?php echo esc_attr( $columns ); ?>">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				$role    = get_post_meta( get_the_ID(), 'lahaph_role', true );
				$summary = get_post_meta( get_the_ID(), 'lahaph_profile_summary', true );
				?>
				<div class="lahaph-artist-card">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="lahaph-artist-card__photo">
							<?php the_post_thumbnail( [ 100, 100 ] ); ?>
						</div>
					<?php endif; ?>
					<h3 class="lahaph-artist-card__name"><?php the_title(); ?></h3>
					<?php if ( $role ) : ?>
						<p class="lahaph-artist-card__role"><?php echo esc_html( $role ); ?></p>
					<?php endif; ?>
					<?php if ( 'yes' === $settings['show_summary'] && $summary ) : ?>
						<p class="lahaph-artist-card__summary"><?php echo esc_html( wp_trim_words( $summary, 20 ) ); ?></p>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<?php
	}
}
