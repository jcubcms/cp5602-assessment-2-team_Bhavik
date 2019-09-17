<?php get_header(); ?>

<div class="col-sm-8 blog-main">
 
 <?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="blog-post">
 
 <?php the_content(); ?>
 </div><!-- /.blog-post -->
 <?php
 endwhile;
 } 
 ?>

 <nav>
 <ul class="pager">
 <li><?php next_posts_link('Previous'); ?></li>
 <li><?php previous_posts_link('Next'); ?></li>
 </ul>
 </nav>

</div><!-- /.blog-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>