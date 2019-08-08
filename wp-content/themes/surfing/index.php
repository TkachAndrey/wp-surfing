<?php
	get_header();
?>

 
 	<section class="slider">
		<div class="container">
			<div class="slider__wrapper">

				<!-- vertical description -->
				<div class="slider__desc">First Surfing Magazine</div>

				<!-- slider block -->
				<div class="slider__block owl-carousel" id="headerSlider">

					<div class="slider__item">
						<div class="slider__item_desc">
							<h2 class="slider__item_heading">
								<span class="slider__item_slogan">Your</span>
								 Beautiful Escape
							</h2>
							<div class="slider__item_text">
								<p>One of the greatest things about the sport of surfing is that you need only three things: your body, a surfboard, and a wave.</p>
							</div>
						</div>
						<div class="slider__item_img slider__item_img-bg1" style="background-image:  url(<?php echo get_template_directory_uri(); ?>/img/images/img-header.jpg);">
						</div>
					</div>
						
					<div class="slider__item">
						<div class="slider__item_desc">
							<h2 class="slider__item_heading">
								<span class="slider__item_slogan">Biggest</span>
								 Wave Conditions
							</h2>
							<div class="slider__item_text">
								<p>Surf travel and some surf camps offer surfers access to remote, tropical locations, where tradewinds ensure offshore conditions.</p>
							</div>
						</div>
						<div class="slider__item_img slider__item_img-bg2" style="background-image:  url(<?php echo get_template_directory_uri(); ?>/img/images/img-header2.jpg);">
						</div>
					</div>
						
					<div class="slider__item">
						<div class="slider__item_desc">
							<h2 class="slider__item_heading">
								<span class="slider__item_slogan">Sunny</span>
								 Smiling Weather
							</h2>
							<div class="slider__item_text">
								<p>Waves are generally recognized by the surfaces over which they break.</p>
							</div>
						</div>
						<div class="slider__item_img slider__item_img-bg3" style="background-image:  url(<?php echo get_template_directory_uri(); ?>/img/images/img-header3.jpg);">
						</div>
					</div>
						
					<div class="slider__item">
						<div class="slider__item_desc">
							<h2 class="slider__item_heading">
								<span class="slider__item_slogan">Our</span>
								 Best Slogan
							</h2>
							<div class="slider__item_text">
								<p>For hundreds of years, surfing was a central part of ancient Polynesian culture.</p>
							</div>
						</div>
						<div class="slider__item_img slider__item_img-bg4" style="background-image:  url(<?php echo get_template_directory_uri(); ?>/img/images/img-header4.jpg);">
						</div>
					</div>

					<div class="slider__item">
						<div class="slider__item_desc">
							<h2 class="slider__item_heading">
								<span class="slider__item_slogan">This</span>
								 Perfect Day
							</h2>
							<div class="slider__item_text">
								<p>Surfing is a surface water sport in which the wave rider, rides on the forward or face of a moving wave, which usually carries the surfer towards the shore. </p>
							</div>
						</div>
						<div class="slider__item_img slider__item_img-bg5" style="background-image:  url(<?php echo get_template_directory_uri(); ?>/img/images/img-header5.jpg);">
						</div>
					</div>
				</div>
	
				<!-- slide-controls buttons -->
				<div class="slider__controls">
					<a href="#!" class="slider__controls_left" id="headerSliderLeft">
						<img src="<?php echo get_template_directory_uri(); ?>/img/controls/header-slider-left.svg" alt="">
					</a>
					  <div class="slider__controls_number">
						<span class="slider__controls_number-active"></span>
						<span class="slider__controls_number-from">/</span>
						<span class="slider__controls_number-total"></span>
					</div>
					<a href="#!" class="slider__controls_right"  id="headerSliderRight">
						<img src="<?php echo get_template_directory_uri(); ?>/img/controls/header-slider-right.svg" alt="">
					</a>
				</div>

				<!-- social icons -->
				<div class="slider__social social">
					 <a href="#!" class="social__item">
					 	<img src="<?php echo get_template_directory_uri(); ?>/img/socials/social-tumblr.svg" alt="">
					 </a>
					 <a href="#!" class="social__item">
					 	<img src="<?php echo get_template_directory_uri(); ?>/img/socials/social-twitter.svg" alt="">
					 </a>
					 <a href="#!" class="social__item">
					 	<img src="<?php echo get_template_directory_uri(); ?>/img/socials/social-vimeo.svg" alt="">
					 </a>
				</div>
			</div>
		</div>
	</section>

	<section class="quote">
		<div class="container">
			<blockquote class="quote__content">
				<p class="quote__text">Surfing is the most blissful experience you can have on this planet, a taste of heaven.</p>
				<p class="quote__author">John McCarthy</p>
			</blockquote>
		</div>
	</section>

	<section class="club-desc">
		<div class="container">
		 	<div class="club-desc__wrapper">
		 	 	<div class="club-desc__img">
		 	 		<img src="<?php echo get_template_directory_uri(); ?>/img/images/img-2.jpg" alt="">
		 	 	</div>
		 	 	<div class="club-desc__video">
		 	 		<img src="<?php echo get_template_directory_uri(); ?>/img/images/img-3.jpg" alt="">
					<a href="#!" class="club-desc__video_control">
						<img src="<?php echo get_template_directory_uri(); ?>/img/controls/control-play.svg" alt="" class="club-desc__video_img">
					</a>
		 	 	</div>
	 	 		<div class="club-desc__text">By better understanding the various aspects of surfing, you will improve faster and have more fun in the water.</div>
	 	 		<div class="club-desc__link">
	 	 			<a href="#!" class="read-more-link">Read More</a>
	 	 		</div>
		 	</div>
		</div>
	</section>



	<section class="shop">
		<div class="container">

			<h2 class="shop__title title">
				<span class="shop__title_subtitle">Shop</span>Surfboards
			</h2>

			<div class="shop-slider__wrapper">
				<div class="shop-slider owl-carousel" id="shopSlider">

 					<?php
						global $post;
						$args = array( 
							'post_type' => 'boards',
							'publish' => true
						);
						$slider_boards = get_posts( $args );
						foreach ($slider_boards as $post) {
							include( get_template_directory() . '/content_boardSlider.php');
						}
						wp_reset_postdata();
					?>
					
				</div>
			</div>

			<div class="shop-slider__arrow shop-slider__arrow_left" id="shopSliderLeft">
				<img src="<?php echo get_template_directory_uri(); ?>/img/controls/boards-left.svg" alt="">
			</div>

			<div class="shop-slider__arrow shop-slider__arrow_right" id="shopSliderRight">
				<img src="<?php echo get_template_directory_uri(); ?>/img/controls/boards-right.svg" alt="">
			</div>

			<div class="shop-slider__link">
	 			<a href="#!" class="read-more-link">Show All</a>
	 		</div>
		</div>
	</section>

	<section class="article">
		<div class="container">
			<article class="article-wrapper article-even">
				<div class="article__desc">
					<h2 class="article__title" data-number="01">Surf Training</h2>
					<div class="article__text">
						<p>By better understanding the various aspects of surfing, By better understanding the various aspects of surfing, you will improve faster and have more fun in the water.</p>
					</div>
					<div class="article__link">
			 	 		<a href="#!" class="read-more-link">Read More</a>
			 	 	</div>
				</div>
				<div class="article__preview">
					<img src="<?php echo get_template_directory_uri(); ?>/img/images/img-4.jpg" alt="">
					<div class="article__preview_desc">Surf&nbsp;Camps</div>
				</div>
			</article>
		</div>
	</section>

	<section class="article article02">
		<div class="container">
			<article class="article-wrapper article-odd">
				<div class="article__desc">
					<h2 class="article__title" data-number="02">Point Break</h2>
					<div class="article__text">
						<p>By better understanding the various aspects of surfing, By better understanding the various aspects of surfing, you will improve faster and have more fun in the water.</p>
					</div>
					<div class="article__link">
			 	 		<a href="#!" class="read-more-link">Read More</a>
			 	 	</div>
				</div>
				<div class="article__preview">
					<img src="<?php echo get_template_directory_uri(); ?>/img/images/img-5.jpg" alt="">
					<div class="article__preview_desc">Surf&nbsp;Camps</div>
				</div>
			</article>
		</div>
	</section>

	<section class="subscribe">
		<div class="container">
			<div class="subscribe__wrapper">
				<h2 class="subscribe__title title">Join the Club</h2>
				<div class="subscribe__desc desc-text">By better understanding the various aspects of surfing, you will improve faster and have more fun in the water.</div>
				<form action="" class="subscribe__form">
					<input type="email" class="subscribe__form_email" placeholder="Your E-mail">
					<input type="submit" class="subscribe__form_btn" value="">
				</form>
			</div>
		</div>
	</section>

	<section class="camp">
		<div class="camp__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/images/img-6.jpg)"></div>
		<div class="container flex-end">
			<div class="camp__desc">
				<div class="camp__label">Our Camp</div>
				<div class="camp__address">
					CA 91932, USA <br>
					Imperial Beach <br>
					560 Silver Strand Blvd
				</div>
				<a href="#!" class="camp__link read-more-link">Get in Touch</a>
			</div>
		</div>
	</section>

<?php
	get_footer();
