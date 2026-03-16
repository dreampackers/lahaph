<?php
/**
 * Elementor Widget: 영상 콘텐츠 그리드
 *
 * video_content CPT를 content_category 필터와 함께 출력합니다.
 */

namespace Lahaph\Elementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Video_Grid extends Widget_Base {

	public function get_name(): string {
		return 'lahaph_video_grid';
	}

	public function get_title(): string {
		return '영상 콘텐츠 그리드';
	}

	public function get_icon(): string {
		return 'eicon-video-camera';
	}

	public function get_categories(): array {
		return [ 'lahaph' ];
	}

	protected function register_controls(): void {

		$this->start_controls_section( 'section_query', [
			'label' => '쿼리 설정',
			'tab'   => Controls_Manager::TAB_CONTENT,
		] );

		$this->add_control( 'content_category', [
			'label'       => '콘텐츠 분류 (비워두면 전체)',
			'type'        => Controls_Manager::SELECT,
			'options'     => [
				''       => '전체',
				'드라마' => '드라마',
				'예능'   => '예능',
				'교육'   => '교육',
				'교양'   => '교양',
			],
			'default'     => '',
		] );

		$this->add_control( 'posts_per_page', [
			'label'   => '표시 개수',
			'type'    => Controls_Manager::NUMBER,
			'default' => 6,
			'min'     => 1,
			'max'     => 50,
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
			'label'        => '요약 표시',
			'type'         => Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default'      => 'yes',
		] );

		$this->end_controls_section();
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		$columns  = (int) $settings['columns'];

		$query_args = [
			'post_type'      => 'video_content',
			'posts_per_page' => (int) $settings['posts_per_page'],
			'orderby'        => 'meta_value_num',
			'meta_key'       => 'lahaph_display_order',
			'order'          => 'ASC',
		];

		$category = $settings['content_category'];
		if ( $category ) {
			$query_args['tax_query'] = [ [
				'taxonomy' => 'content_category',
				'field'    => 'name',
				'terms'    => $category,
			] ];
		}

		$query = new \WP_Query( $query_args );

		if ( ! $query->have_posts() ) {
			echo '<p style="color:#888">등록된 콘텐츠가 없습니다.</p>';
			return;
		}
		?>
		<div class="lahaph-video-grid lahaph-grid lahaph-grid--<?php echo esc_attr( $columns ); ?>">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				$summary = get_post_meta( get_the_ID(), 'lahaph_summary', true );
				$yt_url  = get_post_meta( get_the_ID(), 'lahaph_youtube_url', true );
				?>
				<article class="lahaph-video-card">
					<a href="<?php the_permalink(); ?>" class="lahaph-video-card__link">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="lahaph-video-card__thumb">
								<?php the_post_thumbnail( 'medium_large' ); ?>
								<?php if ( $yt_url ) : ?>
									<span class="lahaph-video-card__play">▶</span>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<div class="lahaph-video-card__body">
							<h3 class="lahaph-video-card__title"><?php the_title(); ?></h3>
							<?php if ( 'yes' === $settings['show_summary'] && $summary ) : ?>
								<p class="lahaph-video-card__summary"><?php echo esc_html( wp_trim_words( $summary, 18 ) ); ?></p>
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
