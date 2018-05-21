<div class="block-post">
  <p class="title1 animated fadeInUp" data-animated="fadeInUp"><?php the_title(); ?></p>


<div class="post">
  <div class="image-post"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>
  <div class="post-content">
    <div><span style="font-family: Verdana, Geneva, sans-serif; font-size: 14px;">
      <b><u>Используемые материалы для производства:</u></b></span><br>
      <b>Ламинированная ДСП:</b> <?php echo (get_post_meta($post->ID, 'punkt1', true)); ?>
      <br><b>Двери-купе:</b> <?php echo (get_post_meta($post->ID, 'punkt2', true)); ?>
      <br><b>Система раздвижения:</b> <?php echo (get_post_meta($post->ID, 'punkt3', true)); ?>
    </div>
    <div class="price">
      Стоимость от&nbsp;<b><span style="font-size: 18px;"><?php echo (get_post_meta($post->ID, 'price', true)); ?></span></b>
    </div>
    </div>
  </div>
</div>

  <!--  -->
<!-- <table cellspacing="0" id="maket">
   <tbody><tr>
     <td id="leftcol">
      <a class="highslide" href="https://paulina36.ru/uploads/posts/2017-10/P2090282.JPG" target="_blank"><img src="https://paulina36.ru/uploads/posts/2017-10/P2090282.JPG" width="350" height="250" class="fr-fic fr-padded fr-rounded fr-fir" onmouseout="this.src='https://paulina36.ru/uploads/posts/2017-10/P2090282.JPG'; this.width=350;this.height=250;"></a>
</td>
    <td id="spacer"></td>
    
    <td id="rightcol2">
  <span style="font-family: Verdana, Geneva, sans-serif; font-size: 14px;"><b><u>Используемые материалы для производства:</u></b></span>
<br><b>Ламинированная ДСП:</b> Egger Дуб шато
<br><b>Двери-купе:</b> Зеркало Серебро с бронирующей пленкой
<br><b>Система раздвижения:</b> RIAL PRO KR100 бронза матовая
<br><br>
         Стоимость от&nbsp;<b><span style="font-size: 18px;">17.000 руб.</span></b>
       <br><br>
        <a class="button b-color" href="https://paulina36.ru/kupe/42-shkaf-kupe.html">Подробнее</a>
       
       </td>
   </tr>
  </tbody></table> -->