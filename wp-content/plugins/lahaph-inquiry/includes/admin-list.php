<?php
/**
 * 관리자 문의 목록 페이지
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ---------------------------------------------------------------
 * 1. 어드민 메뉴 등록
 * ------------------------------------------------------------- */
add_action( 'admin_menu', 'lahaph_inquiry_admin_menu' );

function lahaph_inquiry_admin_menu() {
	add_menu_page(
		'문의 관리',
		'문의 관리',
		'manage_options',
		'lahaph-inquiries',
		'lahaph_inquiry_admin_page',
		'dashicons-email-alt',
		30
	);
}


/* ---------------------------------------------------------------
 * 2. 어드민 페이지 콜백
 * ------------------------------------------------------------- */
function lahaph_inquiry_admin_page() {
	global $wpdb;
	$table = $wpdb->prefix . 'lahaph_inquiries';

	// 상태 변경 처리
	if ( isset( $_GET['action'], $_GET['id'], $_GET['_wpnonce'] )
		&& wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['_wpnonce'] ) ), 'lahaph_inquiry_status' )
		&& current_user_can( 'manage_options' )
	) {
		$id     = absint( $_GET['id'] );
		$action = sanitize_key( $_GET['action'] );

		$allowed_statuses = array( 'new', 'in-progress', 'resolved' );
		if ( in_array( $action, $allowed_statuses, true ) ) {
			$wpdb->update( $table, array( 'status' => $action ), array( 'id' => $id ), array( '%s' ), array( '%d' ) );
		}
	}

	// 페이지네이션
	$per_page    = 20;
	$current_page = max( 1, absint( $_GET['paged'] ?? 1 ) );
	$offset      = ( $current_page - 1 ) * $per_page;

	// 필터
	$status_filter = isset( $_GET['status_filter'] ) ? sanitize_key( $_GET['status_filter'] ) : '';
	$where         = $status_filter ? $wpdb->prepare( 'WHERE status = %s', $status_filter ) : '';

	$total = (int) $wpdb->get_var( "SELECT COUNT(*) FROM {$table} {$where}" ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
	// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
	$rows  = $wpdb->get_results(
		$wpdb->prepare(
			"SELECT * FROM {$table} {$where} ORDER BY submitted_at DESC LIMIT %d OFFSET %d", // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
			$per_page,
			$offset
		)
	);

	$status_labels = array(
		'new'         => '<span style="color:#B53322;font-weight:700">신규</span>',
		'in-progress' => '<span style="color:#E2A21A;font-weight:700">진행 중</span>',
		'resolved'    => '<span style="color:#46C449;font-weight:700">완료</span>',
	);

	$base_url = admin_url( 'admin.php?page=lahaph-inquiries' );
	?>
	<div class="wrap">
		<h1 class="wp-heading-inline">문의 관리</h1>
		<span style="margin-left:12px;color:#666">총 <?php echo esc_html( $total ); ?>건</span>

		<hr class="wp-header-end">

		<!-- 필터 탭 -->
		<ul class="subsubsub">
			<li><a href="<?php echo esc_url( $base_url ); ?>"
				<?php echo '' === $status_filter ? 'class="current"' : ''; ?>>
				전체
			</a> | </li>
			<li><a href="<?php echo esc_url( add_query_arg( 'status_filter', 'new', $base_url ) ); ?>"
				<?php echo 'new' === $status_filter ? 'class="current"' : ''; ?>>
				신규
			</a> | </li>
			<li><a href="<?php echo esc_url( add_query_arg( 'status_filter', 'in-progress', $base_url ) ); ?>"
				<?php echo 'in-progress' === $status_filter ? 'class="current"' : ''; ?>>
				진행 중
			</a> | </li>
			<li><a href="<?php echo esc_url( add_query_arg( 'status_filter', 'resolved', $base_url ) ); ?>"
				<?php echo 'resolved' === $status_filter ? 'class="current"' : ''; ?>>
				완료
			</a></li>
		</ul>

		<table class="wp-list-table widefat fixed striped" style="margin-top:8px">
			<thead>
				<tr>
					<th style="width:40px">ID</th>
					<th style="width:100px">이름</th>
					<th style="width:130px">연락처</th>
					<th style="width:180px">이메일</th>
					<th style="width:110px">관심 과정</th>
					<th>문의 내용</th>
					<th style="width:140px">접수 일시</th>
					<th style="width:80px">상태</th>
					<th style="width:120px">액션</th>
				</tr>
			</thead>
			<tbody>
				<?php if ( $rows ) : ?>
					<?php foreach ( $rows as $row ) : ?>
						<?php
						$nonce    = wp_create_nonce( 'lahaph_inquiry_status' );
						$row_base = add_query_arg( array( '_wpnonce' => $nonce, 'id' => $row->id ), $base_url );
						?>
						<tr>
							<td><?php echo esc_html( $row->id ); ?></td>
							<td><?php echo esc_html( $row->name ); ?></td>
							<td><?php echo esc_html( $row->phone ); ?></td>
							<td><?php echo esc_html( $row->email ); ?></td>
							<td><?php echo esc_html( $row->program_interest ); ?></td>
							<td style="white-space:pre-wrap;max-width:260px;overflow:hidden;text-overflow:ellipsis"><?php echo esc_html( mb_strimwidth( $row->message, 0, 80, '…' ) ); ?></td>
							<td><?php echo esc_html( $row->submitted_at ); ?></td>
							<td><?php echo isset( $status_labels[ $row->status ] ) ? wp_kses_post( $status_labels[ $row->status ] ) : esc_html( $row->status ); ?></td>
							<td>
								<?php if ( 'new' !== $row->status ) : ?>
									<a href="<?php echo esc_url( add_query_arg( 'action', 'new', $row_base ) ); ?>">신규</a>
								<?php endif; ?>
								<?php if ( 'in-progress' !== $row->status ) : ?>
									<a href="<?php echo esc_url( add_query_arg( 'action', 'in-progress', $row_base ) ); ?>">진행</a>
								<?php endif; ?>
								<?php if ( 'resolved' !== $row->status ) : ?>
									<a href="<?php echo esc_url( add_query_arg( 'action', 'resolved', $row_base ) ); ?>">완료</a>
								<?php endif; ?>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php else : ?>
					<tr><td colspan="9" style="text-align:center;padding:24px">문의가 없습니다.</td></tr>
				<?php endif; ?>
			</tbody>
		</table>

		<!-- 페이지네이션 -->
		<?php
		$total_pages = (int) ceil( $total / $per_page );
		if ( $total_pages > 1 ) {
			echo '<div style="margin-top:16px">';
			echo paginate_links( array(
				'base'      => add_query_arg( 'paged', '%#%', $base_url ),
				'format'    => '',
				'current'   => $current_page,
				'total'     => $total_pages,
				'prev_text' => '&laquo; 이전',
				'next_text' => '다음 &raquo;',
			) );
			echo '</div>';
		}
		?>
	</div>
	<?php
}
