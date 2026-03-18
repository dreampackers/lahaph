<?php
/**
 * Bold Page Builder Element: 공시 서류 테이블
 * Shortcode: [lahaph_disclosure_table]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class lahaph_disclosure_table extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		$a = shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, [
			'year'           => '',
			'posts_per_page' => '20',
			'show_year_col'  => 'yes',
			'show_summary'   => 'yes',
			'show_download'  => 'yes',
			'el_id'    => '',
			'el_class' => '',
			'el_style' => '',
		] ), $atts, $this->shortcode );

		$query_args = [
			'post_type'      => 'disclosure',
			'posts_per_page' => max( 1, (int) $a['posts_per_page'] ),
			'orderby'        => 'meta_value_num',
			'meta_key'       => 'lahaph_disclosure_year',
			'order'          => 'DESC',
			'no_found_rows'  => true,
		];

		$year = sanitize_text_field( $a['year'] );
		if ( $year ) {
			$query_args['meta_query'] = [ [
				'key'     => 'lahaph_disclosure_year',
				'value'   => $year,
				'compare' => '=',
				'type'    => 'NUMERIC',
			] ];
		}

		$query = new WP_Query( $query_args );

		if ( ! $query->have_posts() ) {
			return '<p class="lahaph-bb-empty">등록된 공시 서류가 없습니다.</p>';
		}

		$id_attr    = $a['el_id'] ? ' id="' . esc_attr( $a['el_id'] ) . '"' : '';
		$class_attr = trim( $this->shortcode . ' lahaph-bb-disclosure-wrap ' . $a['el_class'] );
		$style_attr = $a['el_style'] ? ' style="' . esc_attr( $a['el_style'] ) . '"' : '';

		ob_start();
		?>
		<div<?php echo $id_attr; ?> class="<?php echo esc_attr( $class_attr ); ?>"<?php echo $style_attr; ?>>
			<table class="lahaph-bb-table">
				<thead>
					<tr>
						<th>서류 제목</th>
						<?php if ( 'yes' === $a['show_year_col'] ) : ?><th>연도</th><?php endif; ?>
						<?php if ( 'yes' === $a['show_summary'] ) : ?><th>요약</th><?php endif; ?>
						<?php if ( 'yes' === $a['show_download'] ) : ?><th>파일</th><?php endif; ?>
					</tr>
				</thead>
				<tbody>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<?php
						$year_val = get_post_meta( get_the_ID(), 'lahaph_disclosure_year', true );
						$summary  = get_post_meta( get_the_ID(), 'lahaph_summary', true );
						$file_id  = get_post_meta( get_the_ID(), 'lahaph_attached_file', true );
						$file_url = $file_id ? wp_get_attachment_url( $file_id ) : '';
						?>
						<tr>
							<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
							<?php if ( 'yes' === $a['show_year_col'] ) : ?>
								<td><?php echo $year_val ? esc_html( $year_val ) : '—'; ?></td>
							<?php endif; ?>
							<?php if ( 'yes' === $a['show_summary'] ) : ?>
								<td><?php echo $summary ? esc_html( $summary ) : ''; ?></td>
							<?php endif; ?>
							<?php if ( 'yes' === $a['show_download'] ) : ?>
								<td>
									<?php if ( $file_url ) : ?>
										<a href="<?php echo esc_url( $file_url ); ?>" target="_blank" rel="noopener" class="lahaph-bb-btn lahaph-bb-btn--sm lahaph-bb-btn--outline">다운로드</a>
									<?php else : ?>
										<span class="lahaph-bb-muted">파일 없음</span>
									<?php endif; ?>
								</td>
							<?php endif; ?>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
		<?php
		wp_reset_postdata();
		$output = ob_get_clean();
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		return apply_filters( $this->shortcode . '_output', $output, $atts );
	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, [
			'name'        => '공시 서류 목록',
			'description' => 'disclosure CPT(법인 공시 서류)를 테이블로 출력합니다.',
			'icon'        => 'dashicons-media-spreadsheet',
			'params'      => [
				[ 'param_name' => 'year',           'type' => 'textfield', 'heading' => '연도 필터',          'value' => '', 'description' => '예: 2023 — 비워두면 전체 연도 표시' ],
				[ 'param_name' => 'posts_per_page', 'type' => 'textfield', 'heading' => '표시 개수',           'value' => '20' ],
				[ 'param_name' => 'show_year_col',  'type' => 'dropdown',  'heading' => '연도 컬럼 표시',      'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'show_summary',   'type' => 'dropdown',  'heading' => '요약 컬럼 표시',      'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
				[ 'param_name' => 'show_download',  'type' => 'dropdown',  'heading' => '다운로드 버튼 표시',  'value' => [ '표시' => 'yes', '숨김' => 'no' ] ],
			],
		] );
	}
}
