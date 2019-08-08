<?php  
	$type = get_post_meta( get_the_ID(), 'board_type', true );
	$price = get_post_meta( get_the_ID(), 'price', true );
?>



<div class="shop-slider__item slide">
	<div class="slide__plate">
		<img src=" <?php echo get_the_post_thumbnail_url(get_the_ID(),  'board-slider' ); ?> " alt="" class="slide__plate_board">
	</div>
	<div class="slide__desc">
		<h3 class="slide__desc_title">
			<span class="slide__desc_categ"><?= $type ?></span>
			<?php the_title(); ?>
		</h3>
		<div class="slide__desc_buy">
			<div class="slide__desc_price">$ 
				
				<?= $price ?>
					
				</div>
			<a href="#!" class="slide__desc_link">Buy</a>
		</div>
	</div>
</div>