<?php
/**
 * 단일 뮤지컬 공연 템플릿
 * Elementor로 빌드하거나 기본 메타 필드를 표시합니다.
 */
get_header();
?>

<main id="lahaph-main" class="lahaph-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
		// Elementor로 빌드된 경우 바로 출력
		if ( did_action( 'elementor/loaded' ) &&
			\Elementor\Plugin::$instance->documents->get( get_the_ID() )->is_built_with_elementor() ) :
			the_content();
		else :
			// Elementor가 없거나 빌드 전: 기본 메타 필드 렌더링
			$year     = get_post_meta( get_the_ID(), 'lahaph_year', true );
			$subtitle = get_post_meta( get_the_ID(), 'lahaph_subtitle', true );
			$intro    = get_post_meta( get_the_ID(), 'lahaph_intro', true );
			$phone    = get_post_meta( get_the_ID(), 'lahaph_inquiry_phone', true );
			?>
			<section class="lahaph-musical-hero">
				<div class="lahaph-container">
					<?php if ( $year ) : ?>
						<span class="lahaph-tag lahaph-tag--green"><?php echo esc_html( $year ); ?></span>
					<?php endif; ?>
					<?php the_title( '<h1 class="lahaph-post__title">', '</h1>' ); ?>
					<?php if ( $subtitle ) : ?>
						<p class="lahaph-musical-subtitle"><?php echo esc_html( $subtitle ); ?></p>
					<?php endif; ?>
				</div>
			</section>

			<section class="lahaph-section">
				<div class="lahaph-container lahaph-columns">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="lahaph-column lahaph-column--40">
							<?php the_post_thumbnail( 'large', [ 'class' => 'lahaph-musical-poster' ] ); ?>
						</div>
					<?php endif; ?>
					<div class="lahaph-column lahaph-column--60">
						<?php if ( $intro ) : ?>
							<p class="lahaph-musical-intro"><?php echo wp_kses_post( $intro ); ?></p>
						<?php endif; ?>
						<div class="lahaph-musical-body">
							<?php the_content(); ?>
						</div>
						<?php if ( $phone ) : ?>
							<p class="lahaph-musical-inquiry">
								문의: <a href="tel:<?php echo esc_attr( preg_replace( '/\D/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
							</p>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
