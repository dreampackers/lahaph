<?php
/**
 * Bold Page Builder Element: 뮤지컬 공연 목록
 * Shortcode: [lahaph_musical_loop]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class lahaph_musical_loop extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		$a = shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, [
			'columns'        => '3',
			'posts_per_page' => '9',
			'orderby'        => 'display_order',
			'order'          => 'ASC',
			'show_year'      => 'yes',
			'show_intro'     => 'yes',
			'title_tag'      => 'h3',
			'link_url'       => '',   // 비워두면 각 공연 포스트 페이지로 연결
			// base params
			'el_id'    => '',
			'el_class' => '',
			'el_style' => '',
		] ), $atts, $this->shortcode );

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
			'order'          => in_array( $a['order'], [ 'ASC', 'DESC' ], true ) ? $a['order'] : 'ASC',
			'no_found_rows'  => true,
		];
		if ( $ob['meta_key'] ) {
			$query_args['meta_key'] = $ob['meta_key'];
		}

		$query   = new WP_Query( $query_args );
		$columns = max( 2, min( 4, (int) $a['columns'] ) );
		$tag     = in_array( $a['title_tag'], [ 'h2', 'h3', 'h4' ], true ) ? $a['title_tag'] : 'h3';
		// 일괄 링크 URL — 입력 시 모든 카드가 해당 URL로 연결, 없으면 포스트 페이지
		$bulk_url = esc_url( trim( $a['link_url'] ) );

		if ( ! $query->have_posts() ) {
			return '<p class="lahaph-bb-empty">등록된 뮤지컬 공연이 없습니다.</p>';
		}

		$id_attr    = $a['el_id'] ? ' id="' . esc_attr( $a['el_id'] ) . '"' : '';
		$class_attr = trim( $this->shortcode . ' lahaph-bb-grid lahaph-bb-grid--' . $columns . ' lahaph-bb-musical-loop ' . $a['el_class'] );
		$style_attr = $a['el_style'] ? ' style="' . esc_attr( $a['el_style'] ) . '"' : '';

		ob_start();
		?>
		<div<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				$year     = get_post_meta( get_the_ID(), 'lahaph_year', true );
				$intro    = get_post_meta( get_the_ID(), 'lahaph_intro', true );
				$card_url = $bulk_url ?: get_permalink();
				?>
				<article class="lahaph-bb-musical-card">
					<a href="<?php echo esc_url( $card_url ); ?>" class="lahaph-bb-musical-card__link">
						<div class="lahaph-bb-musical-card__thumb">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium_large' ); ?>
							<?php endif; ?>
							<div class="lahaph-bb-musical-card__overlay">
								<?php if ( 'yes' === $a['show_year'] && $year ) : ?>
									<span class="lahaph-bb-musical-card__year"><?php echo esc_html( $year ); ?></span>
								<?php endif; ?>
								<<?php echo esc_attr( $tag ); ?> class="lahaph-bb-musical-card__title"><?php the_title(); ?></<?php echo esc_attr( $tag ); ?>>
								<?php if ( 'yes' === $a['show_intro'] && $intro ) : ?>
									<p class="lahaph-bb-musical-card__intro"><?php echo esc_html( wp_trim_words( $intro, 20 ) ); ?></p>
								<?php endif; ?>
							</div>
						</div>
					</a>
				</article>
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
			'name'        => '뮤지컬 공연 목록',
			'description' => 'musical CPT를 카드 그리드로 출력합니다.',
			'icon'        => 'dashicons-tickets-alt',
			'params'      => [
				[ 'param_name' => 'columns',        'type' => 'dropdown',  'heading' => '열 수',          'value' => [ '2열' => '2', '3열' => '3', '4열' => '4' ] ],
				[ 'param_name' => 'posts_per_page', 'type' => 'textfield', 'heading' => '표시 개수',       'value' => '9' ],
				[ 'param_name' => 'orderby',        'type' => 'dropdown',  'heading' => '정렬 기준',       'value' => [ '표시 순서' => 'display_order', '공연 연도' => 'year', '등록일' => 'date' ] ],
				[ 'param_name' => 'order',          'type' => 'dropdown',  'heading' => '정렬 방향',       'value' => [ '오름차순' => 'ASC', '내림차순' => 'DESC' ] ],
				[ 'param_name' => 'link_url',       'type' => 'textfield', 'heading' => '카드 연결 URL',   'value' => '', 'description' => '입력하면 모든 카드가 이 URL로 연결됩니다. 비워두면 각 공연 포스트 페이지로 연결됩니다.' ],
				[ 'param_name' => 'show_year',      'type' => 'dropdown',  'heading' => '연도 표시',       'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'show_intro',     'type' => 'dropdown',  'heading' => '공연 소개 표시',  'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'title_tag',      'type' => 'dropdown',  'heading' => '제목 태그',       'value' => [ 'H2' => 'h2', 'H3' => 'h3', 'H4' => 'h4' ] ],
			],
		] );
	}
}
