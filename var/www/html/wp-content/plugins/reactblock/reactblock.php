<?php

/**
 * Plugin Name: React Block
 * Plugin URI: https://john-rios.com/
 * Description: this is a react block
 * Author: John F
 * Author URI: https://john-rios.com
 */

 function blocks_course_reactblock_init() {
    register_block_type_from_metadata( __DIR__ );
}

add_action( "init", "blocks_course_reactblock_init" );