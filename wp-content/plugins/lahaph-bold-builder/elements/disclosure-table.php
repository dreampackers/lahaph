<?php
/**
 * Bold Page Builder Element: 공시 서류 테이블
 * Shortcode: [lahaph_disclosure_table]
 *
 * 파라미터:
 *   year           - 특정 연도 필터 (비워두면 전체)
 *   posts_per_page - 표시 개수
 *   show_year_col  - 연도 컬럼 표시 (yes|no)
 *   show_summary   - 요약 컬럼 표시 (yes|no)
 *   show_download  - 다운로드 버튼 표시 (yes|no)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ── 숏코드 렌더 (BBP 미활성 시 폴백) ───────────────────── */
add_shortcode( 'lahaph_disclosure_table', 'lahaph_bb_render_disclosure_table' );

function lahaph_bb_render_disclosure_table( array $atts ): string {
	$a = shortcode_atts( [
		'year'           => '',
		'posts_per_page' => '20',
		'show_year_col'  => 'yes',
		'show_summary'   => 'yes',
		'show_download'  => 'yes',
	], $atts );

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

	ob_start();
	?>
	<div class="lahaph-bb-disclosure-wrap">
		<table class="lahaph-bb-table">
			<thead>
				<tr>
					<th>서류 제목</th>
					<?php if ( 'yes' === $a['show_year_col'] ) : ?>
						<th>연도</th>
					<?php endif; ?>
					<?php if ( 'yes' === $a['show_summary'] ) : ?>
						<th>요약</th>
					<?php endif; ?>
					<?php if ( 'yes' === $a['show_download'] ) : ?>
						<th>파일</th>
					<?php endif; ?>
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
						<td>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</td>
						<?php if ( 'yes' === $a['show_year_col'] ) : ?>
							<td><?php echo $year_val ? esc_html( $year_val ) : '—'; ?></td>
						<?php endif; ?>
						<?php if ( 'yes' === $a['show_summary'] ) : ?>
							<td><?php echo $summary ? esc_html( $summary ) : ''; ?></td>
						<?php endif; ?>
						<?php if ( 'yes' === $a['show_download'] ) : ?>
							<td>
								<?php if ( $file_url ) : ?>
									<a href="<?php echo esc_url( $file_url ); ?>" target="_blank" rel="noopener" class="lahaph-bb-btn lahaph-bb-btn--sm lahaph-bb-btn--outline">
										다운로드
									</a>
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
	return ob_get_clean();
}
