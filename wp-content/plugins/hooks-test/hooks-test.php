<?php

/**
 * Plugin name: Hooks Test
 */

add_action( 'login_header', 'hello_world' );

function hello_world() {
    echo 'Hello world!';
}

add_filter( 'login_headerurl', 'change_header_url' );
function change_header_url( $url ) {
    $url = 'https://carriedils.com';
    return $url;
}