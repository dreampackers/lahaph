<?php
/**
 * Bold Page Builder Element: 뮤지컬 공연 목록
 * Shortcode: [lahaph_musical_loop]
 *
 * 파라미터:
 *   columns        - 열 수 (2|3|4), 기본: 3
 *   posts_per_page - 표시 개수, 기본: 9
 *   orderby        - 정렬 (display_order|year|date), 기본: display_order
 *   order          - 방향 (ASC|DESC), 기본: ASC
 *   show_year      - 연도 뱃지 (yes|no), 기본: yes
 *   show_intro     - 소개 (yes|no), 기본: yes
 *   title_tag      - 제목 태그 (h2|h3|h4), 기본: h2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ── Bold Page Builder 등록 ──────────────────────────────── */
function lahaph_bb_register_musical_loop(): void {
	if ( ! function_exists( 'bt_bb_add_shortcode' ) ) {
		return;
	}

	bt_bb_add_shortcode(
		'lahaph_musical_loop',
		'뮤지컬 공연 목록',
		'',
		[
			[
				'name'  => 'columns',
				'title' => '열 수',
				'type'  => 'select',
				'value' => '3',
				'values' => [
					[ 'name' => '2열', 'value' => '2' ],
					[ 'name' => '3열', 'value' => '3' ],
					[ 'name' => '4열', 'value' => '4' ],
				],
			],
			[
				'name'  => 'posts_per_page',
				'title' => '표시 개수',
				'type'  => 'text',
				'value' => '9',
				'help'  => '최대 표시할 공연 수',
			],
			[
				'name'  => 'orderby',
				'title' => '정렬 기준',
				'type'  => 'select',
				'value' => 'display_order',
				'values' => [
					[ 'name' => '표시 순서', 'value' => 'display_order' ],
					[ 'name' => '공연 연도', 'value' => 'year' ],
					[ 'name' => '등록일',    'value' => 'date' ],
				],
			],
			[
				'name'  => 'order',
				'title' => '정렬 방향',
				'type'  => 'select',
				'value' => 'ASC',
				'values' => [
					[ 'name' => '오름차순 (오래된 공연 먼저)', 'value' => 'ASC' ],
					[ 'name' => '내림차순 (최신 공연 먼저)',   'value' => 'DESC' ],
				],
			],
			[
				'name'  => 'show_year',
				'title' => '연도 뱃지 표시',
				'type'  => 'select',
				'value' => 'yes',
				'values' => [
					[ 'name' => '표시', 'value' => 'yes' ],
					[ 'name' => '숨김', 'value' => 'no' ],
				],
			],
			[
				'name'  => 'show_intro',
				'title' => '공연 소개 표시',
				'type'  => 'select',
				'value' => 'yes',
				'values' => [
					[ 'name' => '표시', 'value' => 'yes' ],
					[ 'name' => '숨김', 'value' => 'no' ],
				],
			],
			[
				'name'  => 'title_tag',
				'title' => '공연 제목 태그',
				'type'  => 'select',
				'value' => 'h2',
				'values' => [
					[ 'name' => 'H2', 'value' => 'h2' ],
					[ 'name' => 'H3', 'value' => 'h3' ],
					[ 'name' => 'H4', 'value' => 'h4' ],
				],
			],
		],
		'뮤지컬 공연(musical CPT)을 카드 그리드로 출력합니다.'
	);
}

/* ── 숏코드 렌더 ─────────────────────────────────────────── */
add_shortcode( 'lahaph_musical_loop', 'lahaph_bb_render_musical_loop' );

function lahaph_bb_render_musical_loop( array $atts ): string {
	$a = shortcode_atts( [
		'columns'        => '3',
		'posts_per_page' => '9',
		'orderby'        => 'display_order',
		'order'          => 'ASC',
		'show_year'      => 'yes',
		'show_intro'     => 'yes',
		'title_tag'      => 'h2',
	], $atts );

	$orderby_map = [
		'display_order' => [ 'orderby' => 'meta_value_num', 'meta_key' => 'lahaph_display_order' ],
		'year'          => [ 'orderby' => 'meta_value_num', 'meta_key' => 'lahaph_year' ],
		'date'          => [ 'orderby' => 'date',           'meta_key' => '' ],
	];
	$ob = $orderby_map[ $a['orderby'] ] ?? $orderby_map['display_order'];

	$query_args = [
		'post_type'      => 'musical',
		'posts_per_page' => max( 1, (int) $a['posts_per_page'] ),
		'orderby'        => $ob['orderby'],
		'order'          => $a['order'],
		'no_found_rows'  => true,
	];
	if ( $ob['meta_key'] ) {
		$query_args['meta_key'] = $ob['meta_key'];
	}

	$query   = new WP_Query( $query_args );
	$columns = max( 2, min( 4, (int) $a['columns'] ) );
	$tag     = in_array( $a['title_tag'], [ 'h2', 'h3', 'h4' ], true ) ? $a['title_tag'] : 'h2';

	if ( ! $query->have_posts() ) {
		return '<p class="lahaph-bb-empty">등록된 뮤지컬 공연이 없습니다.</p>';
	}

	ob_start();
	?>
	<div class="lahaph-bb-grid lahaph-bb-grid--<?php echo esc_attr( $columns ); ?> lahaph-bb-musical-loop">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
			$year  = get_post_meta( get_the_ID(), 'lahaph_year', true );
			$intro = get_post_meta( get_the_ID(), 'lahaph_intro', true );
			?>
			<article class="lahaph-bb-musical-card">
				<a href="<?php the_permalink(); ?>" class="lahaph-bb-musical-card__link">

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="lahaph-bb-musical-card__thumb">
							<?php the_post_thumbnail( 'medium_large' ); ?>
							<?php if ( 'yes' === $a['show_year'] && $year ) : ?>
								<span class="lahaph-bb-badge lahaph-bb-badge--green"><?php echo esc_html( $year ); ?></span>
							<?php endif; ?>
							<div class="lahaph-bb-musical-card__overlay">
								<span>공연 보기 →</span>
							</div>
						</div>
					<?php endif; ?>

					<div class="lahaph-bb-musical-card__body">
						<<?php echo esc_attr( $tag ); ?> class="lahaph-bb-musical-card__title">
							<?php the_title(); ?>
						</<?php echo esc_attr( $tag ); ?>>
						<?php if ( 'yes' === $a['show_intro'] && $intro ) : ?>
							<p class="lahaph-bb-musical-card__intro">
								<?php echo esc_html( wp_trim_words( $intro, 20 ) ); ?>
							</p>
						<?php endif; ?>
					</div>

				</a>
			</article>
		<?php endwhile; ?>
	</div>
	<?php
	wp_reset_postdata();
	return ob_get_clean();
}
