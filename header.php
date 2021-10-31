<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo get_bloginfo('name'); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		
        <script>window._templateDirectory = '<?php echo get_template_directory_uri(); ?>';</script>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon"-->
        <?php wp_head(); ?>
	</head>
	<body class="homepage">

	<!-- Header -->
        
		<div id="header">
            <div id="topbar"></div>
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
                    	<img id="logoImg" src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png" alt="" width: 260px;>
                        <span id="logoMobile"><?php echo get_bloginfo('name');?></span>
					</div>
				
				<!-- Nav -->
					<!--nav id="nav">
						<ul>
							<li class="active"><a href="index.html">Nosotros</a></li>
							<li><a href="servicios.html">Diagn&oacute;sticos</a></li>
							<li><a href="profesionales.html">Profesionales</a></li>
							<li><a href="contactos.html">Cont&aacute;ctenos</a></li>
						</ul>
					</nav-->
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'principal',
                            'container' => 'nav',
                            'container_id' => 'nav',
                            'items_wrap' => '<ul>%3$s</ul>',
                        ));
                    ?>

			</div>
		</div>
	<!-- Header -->
    <img id="logoImgMobile" src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png" alt="" width: 260px;>

    <!-- Banner -->
		<div id="banner">	
		</div>
	<!-- /Banner -->