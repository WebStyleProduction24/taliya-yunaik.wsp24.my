<div id="sidebar" data-animated="fadeInRight" class="animated fadeInRight">
	<div class="block">
		<div class="b-cnt">

			<li><a href="#" onclick="window.open('https://s01.paulina36.ru/', 'example', 'width=450,height=680')" class="navcat">Скидочный купон</a></li>
			<li><a href="#calculation" class="navcat">Расчёт стоимости шкафа-купе</a></li>
			<li><a href="#designer" class="navcat">Пригласить замерщика</a></li>
			<li><a href="#call" class="navcat">Заказать обратный звонок</a></li>
		</div>
	</div>
	<div class="block">
		<div class="b-cnt">
			<h4>Фотогалерея</h4>
			<?php 
			$args = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'child_of'     => 6,
				'title_li'     => __('')
			); 

			wp_list_pages( $args );
			?>
		</div>
	</div>
	<?php
	if ( function_exists('dynamic_sidebar') )
		dynamic_sidebar('right-sidebar');
	?>

</div>