<?php
/**
 * 뮤지컬 아카이브 템플릿
 */
get_header();
?>

<main id="lahaph-main" class="lahaph-main lahaph-main--archive">

	<!-- 헤더 섹션 -->
	<section class="lahaph-archive-hero" style="background:var(--lahaph-deep-navy);color:#fff;padding:60px 0 50px">
		<div class="lahaph-container">
			<span class="lahaph-section-label" style="color:var(--lahaph-green)">MUSICAL</span>
			<h1 class="lahaph-archive-title" style="color:#fff;margin-top:8px">뮤지컬 공연</h1>
			<p style="color:rgba(255,255,255,0.8);font-size:1.05rem;line-height:1.8;margin-top:16px">
				2016년부터 현재까지, 라하프 발달장애 예술인들이 함께 만들어 온 공연 기록입니다.
			</p>
		</div>
	</section>

	<!-- 공연 그리드 -->
	<section class="lahaph-section" style="background:var(--lahaph-soft-gray)">
		<div class="lahaph-container">
			<?php if ( have_posts() ) : ?>
				<div class="lahaph-grid lahaph-grid--3">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
						$year = get_post_meta( get_the_ID(), 'lahaph_year', true );
						?>
						<article class="lahaph-musical-card <?php post_class(); ?>">
							<a href="<?php the_permalink(); ?>" class="lahaph-musical-card__link">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="lahaph-musical-card__thumb">
										<?php the_post_thumbnail( 'medium_large' ); ?>
										<?php if ( $year ) : ?>
											<span class="lahaph-musical-card__year"><?php echo esc_html( $year ); ?></span>
										<?php endif; ?>
										<div class="lahaph-musical-card__overlay">
											<span class="lahaph-musical-card__cta">공연 보기</span>
										</div>
									</div>
								<?php endif; ?>
								<div class="lahaph-musical-card__body">
									<h2 class="lahaph-musical-card__title"><?php the_title(); ?></h2>
									<?php
									$intro = get_post_meta( get_the_ID(), 'lahaph_intro', true );
									if ( $intro ) :
										?>
										<p class="lahaph-musical-card__intro"><?php echo esc_html( wp_trim_words( $intro, 18 ) ); ?></p>
									<?php endif; ?>
								</div>
							</a>
						</article>
					<?php endwhile; ?>
				</div>

				<?php the_posts_pagination( [
					'prev_text' => '← 이전',
					'next_text' => '다음 →',
				] ); ?>

			<?php else : ?>
				<p class="lahaph-no-results">등록된 공연이 없습니다.</p>
			<?php endif; ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>
