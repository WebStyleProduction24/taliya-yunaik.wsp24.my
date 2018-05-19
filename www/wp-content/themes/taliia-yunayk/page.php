<?php get_header(); ?>

<main>
        <?php
            if (have_posts()): while (have_posts()): the_post();
                the_content();
            endwhile; endif;
        ?>
</main>

Test

<?php get_footer(); ?>