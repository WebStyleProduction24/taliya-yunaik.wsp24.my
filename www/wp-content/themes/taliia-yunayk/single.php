<?php 
/*
Template Name: My Single Template
Template Post Type: post
*/
?>

<?php get_header(); ?>

<main>
        <?php
            while( have_posts() ) : the_post();
                get_template_part( 'single', 'no' );
            endwhile;
        ?>
        ?>
</main>

Test

<?php get_footer(); ?>