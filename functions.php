<?php 

function unific_files() {

  // load js scripts('js bundle file'), dependencies, 'version', load before </body>
  // replace version with mircrotime() to avoid css/js caching in dev phase
  wp_enqueue_script('unific-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, microtime(), true);

  // load google fonts
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

  // add font awesome icons
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  // load stylesheets
  // dependencies, 'version'
  wp_enqueue_style('unific_styles',get_stylesheet_uri(), NULL, microtime());
}
// ACTIONS
add_action('wp_enqueue_scripts', 'unific_files');

function unific_features() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'unific_features');

?>

