<?php
/*
Plugin Name: MyPlugin
Plugin URI: http://myplugin.com
Description: Plugin for User-Python-User interaction
Version: 1.0
Author: gree-gorey
Author URI: http://greegorey.com
*/
mb_internal_encoding("UTF-8");

function html_form_code() {
    echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    echo '<p>';
    echo 'Первое слово <br/>';
    echo '<input type="text" name="mp-first" value="' . ( isset( $_POST["mp-first"] ) ? esc_attr( $_POST["mp-first"] ) : '' ) . '" size="20" />';
    echo '</p>';
    echo '<p>';
    echo 'Второе слово <br/>';
    echo '<input type="text" name="mp-second" value="' . ( isset( $_POST["mp-second"] ) ? esc_attr( $_POST["mp-second"] ) : '' ) . '" size="20" />';
    echo '</p>';
    echo '<p><input type="submit" name="mp-submitted" value="Send"></p>';
    echo '</form>';
}

function submitted() {

    // if the submit button is clicked, send the email
    if ( isset( $_POST['mp-submitted'] ) ) {

        $first    = ( $_POST["mp-first"] );
        $second   = ( $_POST["mp-second"] );

        echo '<div>';
        echo '<p>Thanks for submitting.</p>';
        echo $first, '<br/>';
        echo $second, '<br/>';
        echo '</div>';

    }
}

function cf_shortcode() {
    ob_start();
    submitted();
    html_form_code();

    return ob_get_clean();
}

add_shortcode( 'myplugin_contact_form', 'cf_shortcode' );