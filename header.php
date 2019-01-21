<html>


<head>
	<meta charset=<?php bloginfo('charset'); ?> >
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>

	
	
</head>

<body <?php body_class(); ?>>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 noborder">
				<marquee class="marquee"> Texto que se desplaza </marquee>
				<img src=<?php bloginfo('template_directory'); ?>/assets/images/banner.png class="img-fluid">
				<img src=<?php bloginfo('template_directory'); ?>/assets/images/logo.png class="img-fluid logo">
			</div>
		</div>
	
		

		<div class="row">
			<div class="col-md-12 noborder">
				<nav class="navbar navbar-expand-md navbar-light menu noborder" role="navigation">
				  <div class="container-fluid noborder">
				    <!-- Brand and toggle get grouped for better mobile display -->
					<button class="toggler navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<a class="navbar-brand menuBrand" href="#">Menu</a>
				        <?php
				        wp_nav_menu( array(
				            'theme_location'    => 'primary',
				            'depth'             => 2,
				            'container'         => 'div',
				            'container_class'   => 'collapse navbar-collapse',
				            'container_id'      => 'bs-example-navbar-collapse-1',
				            'menu_class'        => 'nav navbar-nav ml-auto pull-md-right',
				            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				            'walker'            => new WP_Bootstrap_Navwalker()
						) );
				        ?>
				    </div>
				</nav>
			</div>
		</div>
	</div>
		<br /><br />

		
