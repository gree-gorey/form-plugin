<?php
/*
Plugin Name: formPlugin
Description: Plugin for User-Python-User interaction
Version: 1.0
Author: gree-gorey
*/
mb_internal_encoding("utf-8");
mb_http_output("utf-8");

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
    echo '<p><input type="submit" name="mp-submitted" value="Сгенерировать"></p>';
    echo '</form>';
}

function submitted() {

    if ( isset( $_POST['mp-submitted'] ) ) {
        
        $first    = ( $_POST["mp-first"] );
        $second   = ( $_POST["mp-second"] );
        
        $output = passthru('/home/stimdb/stimdb.ru/cgi/creator.py '.$first.' '.$second);

        echo '<div>';
        echo $output, '<br/>';
        echo '<br/>';
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
