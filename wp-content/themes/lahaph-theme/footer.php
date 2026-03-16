</div><!-- /#lahaph-content-wrap -->

<footer class="lahaph-footer" role="contentinfo">
	<div class="lahaph-footer__top-bar"></div>

	<div class="lahaph-footer__inner">

		<!-- 컬럼 1: 브랜드 -->
		<div class="lahaph-footer__brand">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<span class="lahaph-footer__site-name"><?php bloginfo( 'name' ); ?></span>
			<?php endif; ?>
			<p class="lahaph-footer__tagline">
				라하프는 발달장애인과 비장애 예술가가 함께 성장하는<br>
				문화예술 공동체입니다.
			</p>
		</div>

		<!-- 컬럼 2: 바로가기 -->
		<div class="lahaph-footer__links">
			<h4 class="lahaph-footer__col-title">바로가기</h4>
			<ul class="lahaph-footer__nav-list">
				<li><a href="/lahaph/intro">라하프 소개</a></li>
				<li><a href="/musical">뮤지컬 공연</a></li>
				<li><a href="/art-college/intro">Art College</a></li>
				<li><a href="/academy/intro">Academy</a></li>
				<li><a href="/board/notices">공연 알림</a></li>
				<li><a href="/board/disclosures">공시 서류</a></li>
			</ul>
		</div>

		<!-- 컬럼 3: 연락처 -->
		<div class="lahaph-footer__contact">
			<h4 class="lahaph-footer__col-title">연락처</h4>
			<address class="lahaph-footer__address">
				서울특별시 마포구 서교동 408-18<br>
				스페이스빌딩 5층<br>
				<a href="tel:0233372004">02-337-2004</a><br>
				<a href="mailto:musicaln@naver.com">musicaln@naver.com</a>
			</address>
			<div class="lahaph-footer__social">
				<a href="https://www.youtube.com/channel/UCpkCPxWdDI18VV6JGLGTKJw" target="_blank" rel="noopener noreferrer">YouTube</a>
				<a href="https://blog.naver.com/musicaln" target="_blank" rel="noopener noreferrer">Blog</a>
			</div>
			<a href="/inquiry" class="lahaph-btn lahaph-btn--green lahaph-btn--pill lahaph-btn--sm" style="margin-top:16px;display:inline-block">문의하기</a>
		</div>

	</div><!-- /.lahaph-footer__inner -->

	<hr class="lahaph-footer__divider">

	<div class="lahaph-footer__bottom">
		<p>© 2016–<?php echo esc_html( gmdate( 'Y' ) ); ?> 라하프. All rights reserved.</p>
		<p><a href="/privacy-policy">개인정보처리방침</a></p>
	</div>

</footer><!-- /.lahaph-footer -->

<?php wp_footer(); ?>
</body>
</html>
