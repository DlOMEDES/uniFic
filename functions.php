<?php 

function unific_files() {
  wp_enqueue_style('unific_styles',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'unific_files');

?>