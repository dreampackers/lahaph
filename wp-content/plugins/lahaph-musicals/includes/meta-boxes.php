<?php
/**
 * lahaph-musicals: musical 관리자 메타박스
 *
 * 공연 편집 화면에 '페이지 연결 URL' 입력 필드를 제공합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 메타박스 등록
 */
add_action( 'add_meta_boxes', function () {
	add_meta_box(
		'lahaph_musical_page_url',
		'카드 연결 페이지',
		'lahaph_musical_page_url_render',
		'musical',
		'side',
		'default'
	);
} );

/**
 * 메타박스 렌더링
 */
function lahaph_musical_page_url_render( WP_Post $post ): void {
	$url = get_post_meta( $post->ID, 'lahaph_page_url', true );
	wp_nonce_field( 'lahaph_musical_page_url_save', 'lahaph_musical_page_url_nonce' );
	?>
	<p style="margin:0 0 6px;font-size:12px;color:#666;">
		비워두면 공연 단일 포스트 페이지로 연결됩니다.<br>
		URL을 입력하면 해당 페이지로 연결됩니다.
	</p>
	<input
		type="url"
		name="lahaph_page_url"
		id="lahaph_page_url"
		value="<?php echo esc_attr( $url ); ?>"
		placeholder="https://..."
		style="width:100%;box-sizing:border-box;"
	/>
	<?php
}

/**
 * 저장
 */
add_action( 'save_post_musical', function ( int $post_id ) {
	if (
		! isset( $_POST['lahaph_musical_page_url_nonce'] ) ||
		! wp_verify_nonce( $_POST['lahaph_musical_page_url_nonce'], 'lahaph_musical_page_url_save' ) ||
		( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) ||
		! current_user_can( 'edit_post', $post_id )
	) {
		return;
	}

	$url = isset( $_POST['lahaph_page_url'] ) ? esc_url_raw( $_POST['lahaph_page_url'] ) : '';
	update_post_meta( $post_id, 'lahaph_page_url', $url );
} );
