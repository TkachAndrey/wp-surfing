<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header class="header">
		<div class="container">
			<nav class="header-wrapper">
				<div class="header__logo">
					<a href="#!" class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.svg" alt="">
					</a>
				</div>
				<ul class="navigation">
					<li class="navigation__item"><a class="navigation__link" href="#!">Stories</a></li>
					<li class="navigation__item"><a class="navigation__link" href="#!">Events</a></li>
					<li class="navigation__item"><a class="navigation__link" href="#!">Places</a></li>
					<li class="navigation__item"><a class="navigation__link" href="#!">Boards</a></li>
				</ul>
			</nav>
		</div>
	</header>