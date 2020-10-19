<?php


    /**
     * CHECK IF OPENING TIMES IS ENABLED, AND SHOW OPTIONS
     */
    add_filter('acf/load_field/key=field_5e4692d6eaf91', 'ee_mph_acf__allow_opening_times');
    add_filter('acf/load_field/key=field_5e4692d0eaf8e', 'ee_mph_acf__allow_opening_times');
    add_filter('acf/load_field/key=field_5e4692caeaf8b', 'ee_mph_acf__allow_opening_times');
    add_filter('acf/load_field/key=field_5e4692c4eaf88', 'ee_mph_acf__allow_opening_times');
    add_filter('acf/load_field/key=field_5e4692bfeaf85', 'ee_mph_acf__allow_opening_times');
    add_filter('acf/load_field/key=field_5e4692b7eaf82', 'ee_mph_acf__allow_opening_times');
    add_filter('acf/load_field/key=field_5e4691d1555ce', 'ee_mph_acf__allow_opening_times');
    add_filter('acf/load_field/key=field_5e46916d555cc', 'ee_mph_acf__allow_opening_times');
    function ee_mph_acf__allow_opening_times($field) {
        $current_user = ee_mph__get_current_user_role();
        if(ee__acf_chk_theme_option('theme--opening_times')):
            return $field;    
        else:
            return;
        endif;
    }

     