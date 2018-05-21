<?php get_header(); ?>

<main>
	<div class="post">
      <div class="sidebar-content"> 
        <?php
            if (have_posts()): while( have_posts()) : the_post();
                get_template_part( 'single', 'post' );
            endwhile; endif;
        ?>
			</div>
      <div id="sidebar">Тест</div>
    </div>
</main>

<?php get_footer(); ?>