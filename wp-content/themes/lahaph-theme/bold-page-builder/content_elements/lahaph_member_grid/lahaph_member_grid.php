<?php
/**
 * Bold Page Builder Element: 멤버 그리드
 * Shortcode: [lahaph_member_grid]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class lahaph_member_grid extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		$a = shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, [
			'group'            => '',
			'columns'          => '3',
			'posts_per_page'   => '20',
			'show_role'        => 'yes',
			'show_affiliation' => 'yes',
			'show_photo'       => 'yes',
			'style'            => 'card',
			'el_id'    => '',
			'el_class' => '',
			'el_style' => '',
		] ), $atts, $this->shortcode );

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
		$id_attr    = $a['el_id'] ? ' id="' . esc_attr( $a['el_id'] ) . '"' : '';
		$class_attr = trim( $this->shortcode . ' lahaph-bb-grid lahaph-bb-grid--' . $columns . ' lahaph-bb-member-grid ' . $a['el_class'] );
		$style_attr = $a['el_style'] ? ' style="' . esc_attr( $a['el_style'] ) . '"' : '';

		ob_start();
		?>
		<div<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				$role        = get_post_meta( get_the_ID(), 'lahaph_role', true );
				$affiliation = get_post_meta( get_the_ID(), 'lahaph_affiliation', true );
				$summary     = get_post_meta( get_the_ID(), 'lahaph_profile_summary', true );
				?>
				<div class="<?php echo esc_attr( $card_class ); ?>">
					<?php if ( 'yes' === $a['show_photo'] && has_post_thumbnail() ) : ?>
						<div class="lahaph-bb-member-card__photo"><?php the_post_thumbnail( [ 80, 80 ] ); ?></div>
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
		$output = ob_get_clean();
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		return apply_filters( $this->shortcode . '_output', $output, $atts );
	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, [
			'name'        => '멤버 그리드',
			'description' => 'member CPT를 그룹별 카드 그리드로 출력합니다.',
			'icon'        => 'dashicons-groups',
			'params'      => [
				[ 'param_name' => 'group',            'type' => 'textfield', 'heading' => '멤버 그룹 슬러그',  'value' => '', 'description' => '예: 섬기는-분, 감독진, 배우, 예술하는-강사들, 운영진 — 비워두면 전체' ],
				[ 'param_name' => 'columns',           'type' => 'dropdown',  'heading' => '열 수',            'value' => [ '2열' => '2', '3열' => '3', '4열' => '4' ] ],
				[ 'param_name' => 'posts_per_page',    'type' => 'textfield', 'heading' => '표시 개수',         'value' => '20' ],
				[ 'param_name' => 'show_role',         'type' => 'dropdown',  'heading' => '역할 표시',         'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'show_affiliation',  'type' => 'dropdown',  'heading' => '소속 표시',         'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'show_photo',        'type' => 'dropdown',  'heading' => '프로필 사진 표시',  'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'style',             'type' => 'dropdown',  'heading' => '카드 스타일',       'value' => [ '카드형 (배경 있음)' => 'card', '미니멀 (배경 없음)' => 'minimal' ] ],
			],
		] );
	}
}
