<div class="block-post">
  <p class="title1 animated fadeInUp" data-animated="fadeInUp"><?php the_title(); ?></p>


<div class="post">
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
    	  <a class="button b-color" href="<?php the_permalink(); ?>">Подробнее</a>
    </div>
    </div>
    </div>
  </div>
</div>