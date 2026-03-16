<?php
/**
 * Elementor Widget: 뮤지컬 공연 목록
 *
 * musical CPT를 그리드로 출력합니다.
 * Elementor 편집기에서 '라하프' 카테고리에서 찾을 수 있습니다.
 */

namespace Lahaph\Elementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Musical_Loop extends Widget_Base {

	public function get_name(): string {
		return 'lahaph_musical_loop';
	}

	public function get_title(): string {
		return '뮤지컬 공연 목록';
	}

	public function get_icon(): string {
		return 'eicon-posts-grid';
	}

	public function get_categories(): array {
		return [ 'lahaph' ];
	}

	protected function register_controls(): void {

		// ─── 쿼리 설정 ──────────────────────────────────────
		$this->start_controls_section( 'section_query', [
			'label' => '쿼리 설정',
			'tab'   => Controls_Manager::TAB_CONTENT,
		] );

		$this->add_control( 'posts_per_page', [
			'label'   => '표시 개수',
			'type'    => Controls_Manager::NUMBER,
			'default' => 9,
			'min'     => 1,
			'max'     => 50,
		] );

		$this->add_control( 'orderby', [
			'label'   => '정렬 기준',
			'type'    => Controls_Manager::SELECT,
			'options' => [
				'display_order' => '표시 순서 (lahaph_display_order)',
				'year'          => '공연 연도 (lahaph_year)',
				'date'          => '등록일',
			],
			'default' => 'display_order',
		] );

		$this->add_control( 'order', [
			'label'   => '정렬 방향',
			'type'    => Controls_Manager::SELECT,
			'options' => [
				'ASC'  => '오름차순 (오래된 것 먼저)',
				'DESC' => '내림차순 (최신 먼저)',
			],
			'default' => 'ASC',
		] );

		$this->end_controls_section();

		// ─── 레이아웃 설정 ──────────────────────────────────
		$this->start_controls_section( 'section_layout', [
			'label' => '레이아웃',
			'tab'   => Controls_Manager::TAB_CONTENT,
		] );

		$this->add_control( 'columns', [
			'label'   => '열 수',
			'type'    => Controls_Manager::SELECT,
			'options' => [
				'2' => '2열',
				'3' => '3열',
				'4' => '4열',
			],
			'default' => '3',
		] );

		$this->add_control( 'show_year_badge', [
			'label'        => '연도 뱃지 표시',
			'type'         => Controls_Manager::SWITCHER,
			'label_on'     => '표시',
			'label_off'    => '숨김',
			'return_value' => 'yes',
			'default'      => 'yes',
		] );

		$this->add_control( 'show_intro', [
			'label'        => '공연 소개 표시',
			'type'         => Controls_Manager::SWITCHER,
			'label_on'     => '표시',
			'label_off'    => '숨김',
			'return_value' => 'yes',
			'default'      => 'yes',
		] );

		$this->end_controls_section();
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();

		$orderby_map = [
			'display_order' => [ 'meta_key' => 'lahaph_display_order', 'orderby' => 'meta_value_num' ],
			'year'          => [ 'meta_key' => 'lahaph_year', 'orderby' => 'meta_value_num' ],
			'date'          => [ 'meta_key' => '', 'orderby' => 'date' ],
		];
		$ob = $orderby_map[ $settings['orderby'] ] ?? $orderby_map['display_order'];

		$query_args = [
			'post_type'      => 'musical',
			'posts_per_page' => (int) $settings['posts_per_page'],
			'order'          => $settings['order'],
			'orderby'        => $ob['orderby'],
		];
		if ( $ob['meta_key'] ) {
			$query_args['meta_key'] = $ob['meta_key'];
		}

		$query   = new \WP_Query( $query_args );
		$columns = (int) $settings['columns'];

		if ( ! $query->have_posts() ) {
			echo '<p style="color:#888">등록된 뮤지컬 공연이 없습니다.</p>';
			return;
		}
		?>
		<div class="lahaph-musical-loop lahaph-grid lahaph-grid--<?php echo esc_attr( $columns ); ?>">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				$year  = get_post_meta( get_the_ID(), 'lahaph_year', true );
				$intro = get_post_meta( get_the_ID(), 'lahaph_intro', true );
				?>
				<article class="lahaph-musical-card">
					<a href="<?php the_permalink(); ?>" class="lahaph-musical-card__link">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="lahaph-musical-card__thumb">
								<?php the_post_thumbnail( 'medium_large' ); ?>
								<?php if ( 'yes' === $settings['show_year_badge'] && $year ) : ?>
									<span class="lahaph-musical-card__year"><?php echo esc_html( $year ); ?></span>
								<?php endif; ?>
								<div class="lahaph-musical-card__overlay">
									<span class="lahaph-musical-card__cta">공연 보기</span>
								</div>
							</div>
						<?php endif; ?>
						<div class="lahaph-musical-card__body">
							<h3 class="lahaph-musical-card__title"><?php the_title(); ?></h3>
							<?php if ( 'yes' === $settings['show_intro'] && $intro ) : ?>
								<p class="lahaph-musical-card__intro"><?php echo esc_html( wp_trim_words( $intro, 18 ) ); ?></p>
							<?php endif; ?>
						</div>
					</a>
				</article>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<?php
	}
}
