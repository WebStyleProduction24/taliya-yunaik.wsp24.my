<?php get_header(); ?>
<div id="path">
	    <div class="cnt oh">
		    <div class="path-title">﻿</div>
			
		</div>
	</div>
<main>
	<div class="post">
      <div class="sidebar-content"> 
        <?php
            if (have_posts()): while( have_posts()) : the_post();
                get_template_part( 'single', 'post' );
            endwhile; endif;
        ?>
			</div>
      <div id="sidebar"><?php dynamic_sidebar('smartslider_area_1'); ?></div>
    </div>
</main>

<?php get_footer(); ?>