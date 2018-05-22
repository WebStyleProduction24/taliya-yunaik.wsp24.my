
<?php
/*
  Template name: page
*/
 get_header(); ?>
<div id="path">
	    <div class="cnt oh">
		    <div class="path-title">﻿</div>
			
		</div>
	</div>
<main class="ind-page">
	<div class="post">
      <div class="sidebar-content"> 

        <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
          <p class="title1 animated fadeInUp" data-animated="fadeInUp"><?php the_title(); ?></p>
        <?php the_content(); 
       endwhile; endif; ?>
			</div>
      <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>