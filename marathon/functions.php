<?php

function marathon_register_acf_blocks() {
    
    register_block_type( __DIR__ . '/blocks/handbookview' );
}
add_action( 'init', 'marathon_register_acf_blocks' );