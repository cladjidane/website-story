<?php

function cbzh_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Diaporama',
      'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type( 'slide', $args );

    $args2 = array(
        'public' => true,
        'label'  => 'Ressources'
    );
    register_post_type( 'source', $args2 );
}

add_action( 'init', 'cbzh_custom_init' );