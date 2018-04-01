<?php

function heroeshype_alert_customizer_settings($wp_customize) {
    // add a setting for the site alert
    $wp_customize->add_setting('global_site_alert');
    // Add a control to specify site alert text
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'global_site_alert',
    array(
    'label' => 'Global Site Alert',
    'section' => 'title_tagline',
    'settings' => 'global_site_alert',
    'type' => 'text'
    ) ) );
}

function heroeshype_alert_link_customizer_settings($wp_customize) {
    // add a setting for the site alert
    $wp_customize->add_setting('global_site_alert_link');
    // Add a control to specify site alert text
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'global_site_alert_link',
    array(
    'label' => 'Global Site Alert Link',
    'section' => 'title_tagline',
    'settings' => 'global_site_alert_link',
    'type' => 'url'
    ) ) );
}


add_action('customize_register', 'heroeshype_alert_customizer_settings');
add_action('customize_register', 'heroeshype_alert_link_customizer_settings');

?>