<?php
/**
 * Plugin Name: Developer Dojo
 * Plugin URI: https://github.com/phpbits/developer-dojo
 * Description: Custom Gutenberg block for tutorial purposes
 * Version: 1.0
 * Author: Jeffrey Carandang
 * Author URI: https://jeffreycarandang.com/
 *
 * @category Gutenberg
 * @author Jeffrey Carandang
 * @version 1.0
 */
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
function developer_dojo_block_editor_assets(){
	$url = untrailingslashit( plugin_dir_url( __FILE__ ) );
	
    // Scripts.
    wp_enqueue_script(
        'developer-dojo-block-js', // Handle.
        $url . '/build/index.js',
        array( 'wp-blocks', 'wp-i18n', 'wp-element' )
    );
    // Styles.
    wp_enqueue_style(
        'developer-dojo-block-editor-css', // Handle.
        $url . '/build/editor.css',
        array( 'wp-edit-blocks' )
    );
} // End function developer_dojo_block_editor_assets().
// Hook: Editor assets.
add_action( 'enqueue_block_editor_assets', 'developer_dojo_block_editor_assets' );
function developer_dojo_block_assets(){
	$url = untrailingslashit( plugin_dir_url( __FILE__ ) );
	
	wp_enqueue_style(
        'developer-dojo-block-frontend-css', // Handle.
        $url . '/build/style.css'
    );
}
// Hook: Frontend assets.
add_action( 'enqueue_block_assets', 'developer_dojo_block_assets' );