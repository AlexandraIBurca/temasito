<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Leaflet css -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
		crossorigin=""/>
		<!-- Leaflet Js -->
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
		integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
		crossorigin=""></script>  
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=PT+Serif:ital@1&family=Source+Serif+4:wght@500&display=swap" rel="stylesheet">

		<?php wp_head(); ?>
	</head>
	
	<?php 
		if( is_front_page() ):
			$newtheme_classes = array( 'newtheme-class', 'my-class' );
		else:
			$newtheme_classes = array( 'no-newtheme-class' );
		endif;	
	?>
	
	<body <?php body_class( $newtheme_classes ); ?>>

	<nav class="navbar navbar-expand-sm navbar-light bg-light" role="navigation">
	
		<div class="container" style="width: 100%;">
			<?php 
				if( function_exists('the_custom_logo') ) {
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
				}
			?>
		<a class="navbar-brand" href="<?= home_url(); ?>">
		<h1>Sushi house</h1>
		<!--<img src="http://127.0.0.1/wordpress/wp-content/uploads/2022/01/sushi.jpg" class="logo" alt="Logo" >
	-->	</a>
		<button 
			class="navbar-toggler" 
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#bs-example-navbar-collapse-1"
			aria-controls="bs-example-navbar-collapse-1"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
			<?php 
				wp_nav_menu(array(
						'theme_location'    => 'primary',
						'depth'             =>  1,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse   justify-content-center',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback-cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker()
				) );
			?>
		</div>
		
	</nav>


