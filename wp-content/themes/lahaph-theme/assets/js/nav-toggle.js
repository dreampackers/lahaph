/**
 * Lahaph 헤더 모바일 네비게이션 토글
 */
( function () {
	'use strict';

	var toggle = document.getElementById( 'lahaph-nav-toggle' );
	var nav    = document.getElementById( 'lahaph-nav' );

	if ( ! toggle || ! nav ) return;

	toggle.addEventListener( 'click', function () {
		var isOpen = toggle.getAttribute( 'aria-expanded' ) === 'true';

		toggle.setAttribute( 'aria-expanded', String( ! isOpen ) );
		toggle.setAttribute( 'aria-label', isOpen ? '메뉴 열기' : '메뉴 닫기' );
		nav.classList.toggle( 'is-open', ! isOpen );
		toggle.classList.toggle( 'is-active', ! isOpen );
	} );

	// 외부 클릭 시 닫기
	document.addEventListener( 'click', function ( e ) {
		if ( ! nav.contains( e.target ) && ! toggle.contains( e.target ) ) {
			toggle.setAttribute( 'aria-expanded', 'false' );
			toggle.setAttribute( 'aria-label', '메뉴 열기' );
			nav.classList.remove( 'is-open' );
			toggle.classList.remove( 'is-active' );
		}
	} );

	// ESC 키로 닫기
	document.addEventListener( 'keydown', function ( e ) {
		if ( e.key === 'Escape' ) {
			toggle.setAttribute( 'aria-expanded', 'false' );
			nav.classList.remove( 'is-open' );
			toggle.classList.remove( 'is-active' );
		}
	} );
} )();
