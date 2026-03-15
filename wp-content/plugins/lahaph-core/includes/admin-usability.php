<?php
/**
 * 관리자 UX 개선
 *
 * - 대시보드 라하프 위젯
 * - 불필요한 기본 위젯 제거
 * - 어드민 푸터 브랜딩
 * - 각 CPT 편집 화면 도움말 탭
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ---------------------------------------------------------------
 * 1. 대시보드 — 불필요 위젯 제거 + 라하프 환영 위젯 추가
 * ------------------------------------------------------------- */
add_action( 'wp_dashboard_setup', 'lahaph_dashboard_setup' );

function lahaph_dashboard_setup(): void {
	// 기본 위젯 제거 (선택적: 관리자가 혼란스럽지 않도록)
	remove_meta_box( 'dashboard_quick_press',       'dashboard', 'side' );
	remove_meta_box( 'dashboard_primary',           'dashboard', 'side' );
	remove_meta_box( 'dashboard_activity',          'dashboard', 'normal' );

	// 라하프 환영 위젯 추가
	wp_add_dashboard_widget(
		'lahaph_dashboard_widget',
		'라하프 웹사이트 관리',
		'lahaph_dashboard_widget_content'
	);
}

function lahaph_dashboard_widget_content(): void {
	$sections = array(
		array(
			'label' => '뮤지컬',
			'url'   => admin_url( 'edit.php?post_type=musical' ),
			'desc'  => '공연 정보 등록 및 수정',
		),
		array(
			'label' => '아카데미 과정',
			'url'   => admin_url( 'edit.php?post_type=academy_course' ),
			'desc'  => '과정 등록 및 순서 설정',
		),
		array(
			'label' => '멤버',
			'url'   => admin_url( 'edit.php?post_type=member' ),
			'desc'  => '스태프·감독진 관리',
		),
		array(
			'label' => '아티스트',
			'url'   => admin_url( 'edit.php?post_type=artist' ),
			'desc'  => '발달장애 예술인 프로필 관리',
		),
		array(
			'label' => '영상 콘텐츠',
			'url'   => admin_url( 'edit.php?post_type=video_content' ),
			'desc'  => '드라마·예능·교육·교양 영상',
		),
		array(
			'label' => '공연 알림',
			'url'   => admin_url( 'edit.php?post_type=notice' ),
			'desc'  => '공연 일정 및 티켓 안내',
		),
		array(
			'label' => '공시 서류',
			'url'   => admin_url( 'edit.php?post_type=disclosure' ),
			'desc'  => '법인 재정 공개 문서',
		),
		array(
			'label' => '문의 관리',
			'url'   => admin_url( 'admin.php?page=lahaph-inquiries' ),
			'desc'  => '상담 신청 목록 확인',
		),
	);
	?>
	<style>
		.lahaph-dash-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:8px; margin-top:8px }
		.lahaph-dash-item { background:#F8F8F8; border-radius:6px; padding:10px 14px; text-decoration:none; display:block }
		.lahaph-dash-item:hover { background:#F0FAF0 }
		.lahaph-dash-label { font-weight:700; color:#1E2F6F; font-size:0.9rem }
		.lahaph-dash-desc { color:#666; font-size:0.8rem; margin-top:2px }
	</style>
	<p style="color:#444;margin-bottom:12px">라하프 웹사이트 콘텐츠를 관리하는 바로가기입니다.</p>
	<div class="lahaph-dash-grid">
		<?php foreach ( $sections as $s ) : ?>
			<a href="<?php echo esc_url( $s['url'] ); ?>" class="lahaph-dash-item">
				<div class="lahaph-dash-label"><?php echo esc_html( $s['label'] ); ?></div>
				<div class="lahaph-dash-desc"><?php echo esc_html( $s['desc'] ); ?></div>
			</a>
		<?php endforeach; ?>
	</div>
	<?php
}


/* ---------------------------------------------------------------
 * 2. 어드민 푸터 텍스트
 * ------------------------------------------------------------- */
add_filter( 'admin_footer_text', 'lahaph_admin_footer_text' );

function lahaph_admin_footer_text(): string {
	return '라하프 (LAHAPH) — 발달장애 문화예술 교육 · 공연 · 전문 양성';
}


/* ---------------------------------------------------------------
 * 3. CPT 편집 화면 도움말 탭
 * ------------------------------------------------------------- */
add_action( 'current_screen', 'lahaph_add_help_tabs' );

function lahaph_add_help_tabs(): void {
	$screen = get_current_screen();
	if ( ! $screen ) {
		return;
	}

	$help = array(
		'post-musical' => array(
			'title'   => '뮤지컬 입력 안내',
			'content' => '<p><strong>제목</strong>: 공연 이름 (예: 2024 사랑의 유산)</p>
				<p><strong>연도(lahaph_year)</strong>: 4자리 숫자 (예: 2024)</p>
				<p><strong>부제(lahaph_subtitle)</strong>: 공연 슬로건 또는 부제</p>
				<p><strong>전화(lahaph_inquiry_phone)</strong>: 문의처 전화번호</p>
				<p><strong>포스터(lahaph_poster_image)</strong>: 포스터 이미지 URL</p>
				<p><strong>표시 순서(lahaph_display_order)</strong>: 낮은 숫자가 먼저 표시됩니다.</p>',
		),
		'post-academy_course' => array(
			'title'   => '아카데미 과정 입력 안내',
			'content' => '<p><strong>제목</strong>: 과정 이름 (예: 랩 아카데미)</p>
				<p><strong>과정 분류(academy_category)</strong>: 음악·무용·미술·생활·미디어 중 선택</p>
				<p><strong>표시 순서(lahaph_display_order)</strong>: 과정 목록 정렬 기준</p>
				<p><strong>본문</strong>: 과정 소개 (2~3문장 권장)</p>',
		),
		'post-member' => array(
			'title'   => '멤버 입력 안내',
			'content' => '<p><strong>제목</strong>: 이름</p>
				<p><strong>멤버 그룹(member_group)</strong>: 감독진·스태프·이사 중 선택</p>
				<p><strong>직책(lahaph_role)</strong>: 직함 (예: 예술 감독)</p>
				<p><strong>소속(lahaph_affiliation)</strong>: 소속 기관 또는 단체명</p>',
		),
		'post-video_content' => array(
			'title'   => '영상 콘텐츠 입력 안내',
			'content' => '<p><strong>제목</strong>: 영상 제목</p>
				<p><strong>콘텐츠 분류(content_category)</strong>: 드라마·예능·교육·교양 중 선택</p>
				<p><strong>유튜브 URL(lahaph_video_url)</strong>: YouTube embed URL 또는 직접 URL</p>
				<p><strong>방영 연도(lahaph_air_year)</strong>: 4자리 숫자</p>',
		),
		'post-notice' => array(
			'title'   => '공연 알림 입력 안내',
			'content' => '<p><strong>제목</strong>: 공연 알림 제목</p>
				<p><strong>요약(lahaph_summary)</strong>: 한 줄 요약 (목록 페이지에 표시)</p>
				<p><strong>상태(lahaph_notice_status)</strong>: upcoming · ongoing · ended 중 입력</p>
				<p><strong>공연일(lahaph_event_date)</strong>: YYYY-MM-DD 형식</p>
				<p><strong>관련 프로그램(lahaph_related_program)</strong>: 관련 뮤지컬·아카데미명</p>',
		),
		'post-disclosure' => array(
			'title'   => '공시 서류 입력 안내',
			'content' => '<p><strong>제목</strong>: 문서 이름 (예: 2023년 결산 재무제표)</p>
				<p><strong>요약(lahaph_summary)</strong>: 한 줄 설명</p>
				<p><strong>연도(lahaph_disclosure_year)</strong>: 4자리 숫자</p>
				<p><strong>첨부 파일 URL(lahaph_attached_file)</strong>: PDF 업로드 후 URL 입력</p>',
		),
	);

	$key = $screen->base . '-' . $screen->post_type;
	if ( isset( $help[ $key ] ) ) {
		$screen->add_help_tab( array(
			'id'      => 'lahaph-help',
			'title'   => $help[ $key ]['title'],
			'content' => $help[ $key ]['content'],
		) );
	}
}


/* ---------------------------------------------------------------
 * 4. 어드민 바 색상 커스텀 (라하프 딥네이비)
 * ------------------------------------------------------------- */
add_action( 'admin_head', 'lahaph_admin_bar_color' );

function lahaph_admin_bar_color(): void {
	if ( ! is_admin() ) {
		return;
	}
	echo '<style>
		#wpadminbar { background-color: #1E2F6F !important; }
		#wpadminbar .ab-top-menu > li.hover > .ab-item,
		#wpadminbar .ab-top-menu > li:hover > .ab-item { background-color: #162356 !important; }
	</style>';
}
