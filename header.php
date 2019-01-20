<html>


<head>
	<meta charset=<?php bloginfo('charset'); ?> >
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>

	
	
</head>

<body <?php body_class(); ?>>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12"></div>
			<img src=<?php bloginfo('template_directory'); ?>/assets/images/banner.png class="banner">
		</div>

		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
				  <div class="container">
				    <!-- Brand and toggle get grouped for better mobile display -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<a class="navbar-brand" href="#">Menu inicial</a>
				        <?php
				        wp_nav_menu( array(
				            'theme_location'    => 'primary',
				            'depth'             => 2,
				            'container'         => 'div',
				            'container_class'   => 'collapse navbar-collapse',
				            'container_id'      => 'bs-example-navbar-collapse-1',
				            'menu_class'        => 'nav navbar-nav',
				            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				            'walker'            => new WP_Bootstrap_Navwalker()
						) );
				        ?>
				    </div>
				</nav>
			</div>
		</div>

		<br /><br />

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h1>Macarrones con tomatico</h1>
			</div>
		</div>
