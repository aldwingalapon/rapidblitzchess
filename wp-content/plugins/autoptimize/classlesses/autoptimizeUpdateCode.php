<?php
/* 
* below code handles updates and is only included by autoptimize.php if/ when needed
*/

$majorUp = false;        
$autoptimize_major_version=substr($autoptimize_db_version,0,3);

switch($autoptimize_major_version) {
    case "1.6":
        // from back in the days when I did not yet consider multisite
        // if user was on version 1.6.x, force advanced options to be shown by default
        update_option('autoptimize_show_adv','1');

        // and remove old options
        $to_delete_options=array("autoptimize_cdn_css","autoptimize_cdn_css_url","autoptimize_cdn_js","autoptimize_cdn_js_url","autoptimize_cdn_img","autoptimize_cdn_img_url","autoptimize_css_yui","autoptimize_js_yui");
        foreach ($to_delete_options as $del_opt) {
            delete_option( $del_opt );
        }
        $majorUp = true;
    case "1.7":
        // force 3.8 dashicons in CSS exclude options when upgrading from 1.7 to 1.8
        if ( !is_multisite() ) {
            $css_exclude = get_option('autoptimize_css_exclude');
            if (empty($css_exclude)) {
                $css_exclude = "admin-bar.min.css, dashicons.min.css";
            } else if (strpos($css_exclude,"dashicons.min.css")===false) {
                $css_exclude .= ", dashicons.min.css";
            }
            update_option('autoptimize_css_exclude',$css_exclude);
        } else {
            global $wpdb;
            $blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
            $original_blog_id = get_current_blog_id();
            foreach ( $blog_ids as $blog_id ) {
                switch_to_blog( $blog_id );
                $css_exclude = get_option('autoptimize_css_exclude');
                if (empty($css_exclude)) {
                    $css_exclude = "admin-bar.min.css, dashicons.min.css";
                } else if (strpos($css_exclude,"dashicons.min.css")===false) {
                    $css_exclude .= ", dashicons.min.css";
                }
                update_option('autoptimize_css_exclude',$css_exclude);
            }
            switch_to_blog( $original_blog_id );
        }
        $majorUp = true;
    case "1.9":
        /* 
        * 2.0 will not aggregate inline CSS/JS by default, but we want users
        * upgrading from 1.9 to keep their inline code aggregated by default. 
        */
        if ( !is_multisite() ) {
            update_option('autoptimize_css_include_inline','on');
            update_option('autoptimize_js_include_inline','on');
        } else {
            global $wpdb;
            $blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
            $original_blog_id = get_current_blog_id();
            foreach ( $blog_ids as $blog_id ) {
                switch_to_blog( $blog_id );
                update_option('autoptimize_css_include_inline','on');
                update_option('autoptimize_js_include_inline','on');
            }
            switch_to_blog( $original_blog_id );    
        }
        $majorUp = true;
    }

if ( $majorUp === true ) {
    // clear cache and notify user to check result if major upgrade
    autoptimizeCache::clearall();
    add_action('admin_notices', 'autoptimize_update_config_notice');
}
