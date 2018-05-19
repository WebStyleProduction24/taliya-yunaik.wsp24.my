<?php
/*
Template Name: Мой шаблон страницы
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<main class="shablon">
	<div class="content">
		<?php
		if (have_posts()): while (have_posts()): the_post();
			the_content();
		endwhile; endif;
		?>
	</div>
	<div id="sidebar" >
		<?php get_sidebar(); ?>
	</div>
</main>


<?php get_footer(); ?>