<?php get_header();

echo "<h1>This this is the index file</h1>";

while(have_posts()) {
  the_post(); ?>

  <h2><a href="<?php the_permalink();?>"><?php the_title();?></h2></a>
  <?php the_content(); ?>
  <hr>
<?php }


get_footer();
?>
