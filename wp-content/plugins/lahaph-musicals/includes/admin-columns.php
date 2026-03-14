<?php
/**
 * lahaph-musicals: 관리자 목록 커스텀 컬럼
 *
 * 공연 목록에 연도, 포스터 컬럼을 추가합니다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 컬럼 정의
 */
function lahaph_musicals_admin_columns( array $columns ): array {
	$new = [];
	foreach ( $columns as $key => $label ) {
		$new[ $key ] = $label;
		if ( 'title' === $key ) {
			$new['lahaph_year']   = '연도';
			$new['lahaph_poster'] = '포스터';
		}
	}
	return $new;
}
add_filter( 'manage_musical_posts_columns', 'lahaph_musicals_admin_columns' );

/**
 * 컬럼 출력
 */
function lahaph_musicals_admin_column_content( string $column, int $post_id ): void {
	if ( 'lahaph_year' === $column ) {
		$year = get_post_meta( $post_id, 'lahaph_year', true );
		echo $year ? esc_html( $year ) : '—';
	}

	if ( 'lahaph_poster' === $column ) {
		$image_id = (int) get_post_meta( $post_id, 'lahaph_poster_image', true );
		if ( $image_id ) {
			echo wp_get_attachment_image( $image_id, [ 40, 60 ], false, [ 'style' => 'height:60px;width:auto;' ] );
		} else {
			echo '—';
		}
	}
}
add_action( 'manage_musical_posts_custom_column', 'lahaph_musicals_admin_column_content', 10, 2 );

/**
 * 연도 컬럼 정렬 가능 설정
 */
function lahaph_musicals_sortable_columns( array $columns ): array {
	$columns['lahaph_year'] = 'lahaph_year';
	return $columns;
}
add_filter( 'manage_edit-musical_sortable_columns', 'lahaph_musicals_sortable_columns' );

/**
 * 연도 기준 정렬 쿼리 처리
 */
function lahaph_musicals_orderby( \WP_Query $query ): void {
	if ( ! is_admin() || ! $query->is_main_query() ) {
		return;
	}
	if ( 'lahaph_year' === $query->get( 'orderby' ) ) {
		$query->set( 'meta_key', 'lahaph_year' );
		$query->set( 'orderby', 'meta_value_num' );
	}
}
add_action( 'pre_get_posts', 'lahaph_musicals_orderby' );
