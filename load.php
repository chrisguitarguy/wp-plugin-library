<?php
if( ! function_exists( 'davispress_load' ) ):
function davispress_load()
{
    if( is_admin() )
    {
        $dir = plugin_dir_path( __FILE__ );
        require_once( $dir . 'form-fields.php' );
        require_once( $dir . 'admin-page-tools.php' );
        require_once( $dir . 'meta-box-tools.php' );
        add_action( 'admin_enqueue_scripts', 'davispress_register_scripts' );
        add_action( 'admin_enqueue_styles', 'davispress_register_styles' );
    }
}
endif; 


if( ! function_exists( 'davispress_register_scripts' ) ):
function davispress_register_scripts()
{
    $url = plugin_dir_url( __FILE__ );
    wp_register_script(
        'davispress-metabox-tabs-js',
        $url . 'js/meta-box-tabs.js',
        array( 'jquery' ),
        NULL,
        true
    );
    wp_register_script(
        'davispress-thickbox-hijac',
        $url . 'js/thickbox-hijack.js',
        array( 'jquery' ),
        NULL,
        true
    );
}
endif;


if( ! function_exists( 'davispress_register_styles' ) ):
function davispress_register_styles()
{
    $url = plugin_dir_url( __FILE__ );
    wp_register_style(
        'davispress-metabox-tabs-css',
        $url . 'css/meta-box-tabs.css',
        array(),
        NULL,
        'screen'
    );
}
endif;
