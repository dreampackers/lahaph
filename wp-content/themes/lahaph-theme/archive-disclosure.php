<?php
/**
 * 법인 공시 서류 아카이브 템플릿
 */
get_header();
?>

<main id="lahaph-main" class="lahaph-main lahaph-main--archive">
	<section class="lahaph-archive-hero">
		<div class="lahaph-container">
			<span class="lahaph-section-label">BOARD</span>
			<h1 class="lahaph-archive-title">법인 재정관련 공시 서류</h1>
		</div>
	</section>

	<section class="lahaph-section">
		<div class="lahaph-container">
			<?php if ( have_posts() ) : ?>
				<table class="lahaph-table lahaph-table--disclosure">
					<thead>
						<tr>
							<th>제목</th>
							<th>연도</th>
							<th>요약</th>
							<th>파일</th>
						</tr>
					</thead>
					<tbody>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php
							$year     = get_post_meta( get_the_ID(), 'lahaph_disclosure_year', true );
							$summary  = get_post_meta( get_the_ID(), 'lahaph_summary', true );
							$file_id  = get_post_meta( get_the_ID(), 'lahaph_attached_file', true );
							$file_url = $file_id ? wp_get_attachment_url( $file_id ) : '';
							?>
							<tr>
								<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
								<td><?php echo $year ? esc_html( $year ) : '—'; ?></td>
								<td><?php echo $summary ? esc_html( $summary ) : ''; ?></td>
								<td>
									<?php if ( $file_url ) : ?>
										<a href="<?php echo esc_url( $file_url ); ?>" target="_blank" rel="noopener" class="lahaph-btn lahaph-btn--sm lahaph-btn--outline">
											다운로드
										</a>
									<?php else : ?>
										<span style="color:var(--lahaph-text-muted)">—</span>
									<?php endif; ?>
								</td>
							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
				<?php the_posts_pagination(); ?>
			<?php else : ?>
				<p class="lahaph-no-results">등록된 공시 서류가 없습니다.</p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
