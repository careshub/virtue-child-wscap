<?php
/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.1
 */
function virtue_child_scripts() {
	// Include the needed js file.
	// wp_enqueue_script( 'virtue-child-arc-base-scripts', get_stylesheet_directory_uri( '/js/public.js' ), array( 'jquery' ), '1.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'virtue_child_scripts' );

/**
 * Avoid double Bootstrap enqueues if CARES Data Tools is active.
 *
 * @since 1.0.1
 */
function virtue_child_check_bootstrap() {
	// Dequeue the Virtue version of bootstrap on the reports page
	if ( is_page( array( 'report', 'interactive-report' ) ) ) {
		wp_dequeue_script( 'bootstrap' );
	}
}
add_action( 'wp_enqueue_scripts', 'virtue_child_check_bootstrap', 999 );

/**
 * Use the directory title setting for the Docs archive.
 * Virtue has its own title function that ignores the setting.
 *
 * @since 1.0.1
 */
function virtue_child_docs_title( $title ) {
	if ( is_archive( 'bp_doc' ) ) {
		$title = bp_docs_get_docs_directory_title();
	}
	return $title;
}
add_filter( 'virtue_title', 'virtue_child_docs_title' );

