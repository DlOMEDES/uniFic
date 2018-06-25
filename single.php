<?php 

echo "<h1>This this is the single/post file</h1>";

while(have_posts()) {
  the_post(); ?>

  <h2><?php the_title();?></h2>
  <?php the_content(); ?>
 
<?php }

?>
