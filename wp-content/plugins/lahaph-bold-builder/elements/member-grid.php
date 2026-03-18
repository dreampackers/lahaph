<?php
/**
 * Bold Page Builder Element: 멤버 그리드
 * Shortcode: [lahaph_member_grid]
 *
 * 파라미터:
 *   group          - member_group 택소노미 슬러그 (비워두면 전체)
 *   columns        - 열 수 (2|3|4)
 *   posts_per_page - 표시 개수
 *   show_role      - 역할 표시 (yes|no)
 *   show_affiliation - 소속 표시 (yes|no)
 *   show_photo     - 사진 표시 (yes|no)
 *   style          - 카드 스타일 (card|minimal)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ── Bold Page Builder 등록 ──────────────────────────────── */
function lahaph_bb_register_member_grid(): void {
	if ( ! function_exists( 'bt_bb_add_shortcode' ) ) {
		return;
	}

	bt_bb_add_shortcode(
		'lahaph_member_grid',
		'멤버 그리드',
		'',
		[
			[
				'name'  => 'group',
				'title' => '멤버 그룹 슬러그',
				'type'  => 'text',
				'value' => '',
				'help'  => '예: 섬기는-분, 감독진, 배우, 예술하는-강사들, 운영진 — 비워두면 전체',
			],
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
				'value' => '20',
			],
			[
				'name'  => 'show_role',
				'title' => '역할 표시',
				'type'  => 'select',
				'value' => 'yes',
				'values' => [
					[ 'name' => '표시', 'value' => 'yes' ],
					[ 'name' => '숨김', 'value' => 'no' ],
				],
			],
			[
				'name'  => 'show_affiliation',
				'title' => '소속 표시',
				'type'  => 'select',
				'value' => 'yes',
				'values' => [
					[ 'name' => '표시', 'value' => 'yes' ],
					[ 'name' => '숨김', 'value' => 'no' ],
				],
			],
			[
				'name'  => 'show_photo',
				'title' => '프로필 사진 표시',
				'type'  => 'select',
				'value' => 'yes',
				'values' => [
					[ 'name' => '표시', 'value' => 'yes' ],
					[ 'name' => '숨김', 'value' => 'no' ],
				],
			],
			[
				'name'  => 'style',
				'title' => '카드 스타일',
				'type'  => 'select',
				'value' => 'card',
				'values' => [
					[ 'name' => '카드형 (배경 있음)',  'value' => 'card' ],
					[ 'name' => '미니멀 (배경 없음)', 'value' => 'minimal' ],
				],
			],
		],
		'member CPT를 그룹별 카드 그리드로 출력합니다.'
	);
}

/* ── 숏코드 렌더 ─────────────────────────────────────────── */
add_shortcode( 'lahaph_member_grid', 'lahaph_bb_render_member_grid' );

function lahaph_bb_render_member_grid( array $atts ): string {
	$a = shortcode_atts( [
		'group'            => '',
		'columns'          => '3',
		'posts_per_page'   => '20',
		'show_role'        => 'yes',
		'show_affiliation' => 'yes',
		'show_photo'       => 'yes',
		'style'            => 'card',
	], $atts );

	$query_args = [
		'post_type'      => 'member',
		'posts_per_page' => max( 1, (int) $a['posts_per_page'] ),
		'orderby'        => 'meta_value_num',
		'meta_key'       => 'lahaph_display_order',
		'order'          => 'ASC',
		'no_found_rows'  => true,
	];

	$group = sanitize_text_field( $a['group'] );
	if ( $group ) {
		$query_args['tax_query'] = [ [
			'taxonomy' => 'member_group',
			'field'    => 'slug',
			'terms'    => $group,
		] ];
	}

	$query   = new WP_Query( $query_args );
	$columns = max( 2, min( 4, (int) $a['columns'] ) );

	if ( ! $query->have_posts() ) {
		return '<p class="lahaph-bb-empty">등록된 멤버가 없습니다.</p>';
	}

	$card_class = 'lahaph-bb-member-card lahaph-bb-member-card--' . esc_attr( $a['style'] );

	ob_start();
	?>
	<div class="lahaph-bb-grid lahaph-bb-grid--<?php echo esc_attr( $columns ); ?> lahaph-bb-member-grid">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
			$role        = get_post_meta( get_the_ID(), 'lahaph_role', true );
			$affiliation = get_post_meta( get_the_ID(), 'lahaph_affiliation', true );
			$summary     = get_post_meta( get_the_ID(), 'lahaph_profile_summary', true );
			?>
			<div class="<?php echo esc_attr( $card_class ); ?>">

				<?php if ( 'yes' === $a['show_photo'] && has_post_thumbnail() ) : ?>
					<div class="lahaph-bb-member-card__photo">
						<?php the_post_thumbnail( [ 80, 80 ] ); ?>
					</div>
				<?php endif; ?>

				<div class="lahaph-bb-member-card__info">
					<strong class="lahaph-bb-member-card__name"><?php the_title(); ?></strong>

					<?php if ( 'yes' === $a['show_role'] && $role ) : ?>
						<span class="lahaph-bb-member-card__role"><?php echo esc_html( $role ); ?></span>
					<?php endif; ?>

					<?php if ( 'yes' === $a['show_affiliation'] && $affiliation ) : ?>
						<span class="lahaph-bb-member-card__affiliation"><?php echo esc_html( $affiliation ); ?></span>
					<?php endif; ?>

					<?php if ( $summary ) : ?>
						<p class="lahaph-bb-member-card__summary"><?php echo esc_html( wp_trim_words( $summary, 15 ) ); ?></p>
					<?php endif; ?>
				</div>

			</div>
		<?php endwhile; ?>
	</div>
	<?php
	wp_reset_postdata();
	return ob_get_clean();
}
