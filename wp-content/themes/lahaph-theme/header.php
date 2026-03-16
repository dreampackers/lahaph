<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="lahaph-header" id="lahaph-header" role="banner">
	<div class="lahaph-header__inner">

		<!-- 로고 -->
		<div class="lahaph-header__logo">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="lahaph-header__site-name">
					<?php bloginfo( 'name' ); ?>
				</a>
			<?php endif; ?>
		</div>

		<!-- 데스크탑 네비게이션 -->
		<nav class="lahaph-header__nav" id="lahaph-nav" aria-label="주 메뉴">
			<?php
			wp_nav_menu( [
				'theme_location' => 'primary',
				'menu_class'     => 'lahaph-nav__list',
				'container'      => false,
				'fallback_cb'    => 'lahaph_nav_fallback',
			] );
			?>
		</nav>

		<!-- 우측: 문의 버튼 + 모바일 토글 -->
		<div class="lahaph-header__actions">
			<a href="/inquiry" class="lahaph-btn lahaph-btn--green lahaph-btn--pill lahaph-btn--sm">
				문의하기
			</a>
			<button
				class="lahaph-nav-toggle"
				id="lahaph-nav-toggle"
				aria-controls="lahaph-nav"
				aria-expanded="false"
				aria-label="메뉴 열기"
			>
				<span class="lahaph-nav-toggle__bar"></span>
				<span class="lahaph-nav-toggle__bar"></span>
				<span class="lahaph-nav-toggle__bar"></span>
			</button>
		</div>

	</div><!-- /.lahaph-header__inner -->
</header><!-- /.lahaph-header -->

<div id="lahaph-content-wrap">
