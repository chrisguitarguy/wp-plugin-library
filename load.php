<?php
if( ! function_exists( 'davispress_load' ) ):
function davispress_load()
{
    $dir = plugin_dir_path( __FILE__ );
    require_once( $dir . 'form-fields.php' );
    require_once( $dir . 'admin-page-tools.php' );
    require_once( $dir . 'meta-box-tools.php' );
}
endif; 
