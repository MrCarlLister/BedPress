<?php


    /**
     * CHECK IF MAP OPTIONS ENABLED, SHOW LOCATION OPTION
     */
    add_filter('acf/load_field/key=field_5f8a237962c5b', 'ee_mph_acf__allow_map');
    function ee_mph_acf__allow_map($field) {
        $current_user = ee_mph__get_current_user_role();
        if(ee__acf_chk_theme_option('theme--map')):
            return $field;    
        else:
            return;
        endif;
    }


    function ee_mph__acf_google_map_api() {
        if(!empty(getenv('PLUGIN_ACF_GMAP'))):
            acf_update_setting('google_api_key', getenv('PLUGIN_ACF_GMAP'));
        endif;
    }

    add_action('acf/init', 'ee_mph__acf_google_map_api');  