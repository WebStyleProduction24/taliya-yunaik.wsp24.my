<?php get_header(); ?>
<div id="path">
 <div class="cnt oh">
  <div class="path-title">﻿</div>
  
</div>
</div>
<main class="ind-page">
	<div class="post">
    <div class="sidebar-mobile">
      <?php
  if ( function_exists('dynamic_sidebar') )
    dynamic_sidebar('right-sidebar');
  ?>
    </div>
    <div class="sidebar-content"> 
      <?php
      if (have_posts()): while( have_posts()) : the_post();
        get_template_part( 'single', 'post' );
      endwhile; endif;?>
      <div style="text-align: center;" class="pagination-table>
        <?php
        the_posts_pagination( array(
         'screen_reader_text' => __( '' ), ) );
         ?>
       </div>
     </div>
     <?php get_sidebar(); ?>
   </div>
 </main>

 <?php get_footer(); ?>