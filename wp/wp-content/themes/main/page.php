<?php
/*
Template Name: Pages
*/
?>

<?php include "header.php" ?>

<!-- MAIN -->
  <div id="main">
    
    <!-- GLOBAL NAVI -->
    <?php include "gnavi.php" ?>
	
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php remove_filter ('the_content', 'wpautop'); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>

<?php include "footer.php" ?>