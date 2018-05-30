
<?php
/*
  Template name: post
  Template Post Type: page, post

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
<p class="title1 animated fadeInUp" data-animated="fadeInUp"><?php the_title(); ?></p>
      <div class="image-post"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>

      <div class="post-content">
       <div>
        <div><span style="font-family: Verdana, Geneva, sans-serif; font-size: 14px;">
          <b><u> <?php echo (get_post_meta($post->ID, 'title', true)); ?>:</u></b></span>
          <br>
          <b> <?php echo (get_post_meta($post->ID, 'punkt1-bold', true)); ?>:</b> <?php echo (get_post_meta($post->ID, 'punkt1', true)); ?>
          <br><b> <?php echo (get_post_meta($post->ID, 'punkt2-bold', true)); ?>:</b> <?php echo (get_post_meta($post->ID, 'punkt2', true)); ?>
          <br><b> <?php echo (get_post_meta($post->ID, 'punkt3-bold', true)); ?>:</b> <?php echo (get_post_meta($post->ID, 'punkt3', true)); ?>
        </div>
        <div class="price">
          Стоимость от&nbsp;<b><span style="font-size: 18px;"><?php echo (get_post_meta($post->ID, 'price', true)); ?></span></b>
        </div>
        <div>
          <?php echo do_shortcode( '[modal open="368" id="button_id" class="button_class"]Подробнее[/modal]' ); ?>
       </div>
     </div>
   </div>
   <div class="page-content">
       <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
        <?php the_content(); 
      endwhile; endif; ?>
    </div>

 </div>
 <?php get_sidebar(); ?>
</div>
</main>

<?php get_footer(); ?>