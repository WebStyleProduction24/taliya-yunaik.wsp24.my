<?php get_header(); ?>
<div id="path">
	    <div class="cnt oh">
		    <div class="path-title">﻿</div>
			
		</div>
	</div>
<main class="ind-page">
	<div class="post">
      <div class="sidebar-content"> 
        <?php
            if (have_posts()): while( have_posts()) : the_post();
                get_template_part( 'single', 'post' );
            endwhile; endif;
        ?>
			</div>
      <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>