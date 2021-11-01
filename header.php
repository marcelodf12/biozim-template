<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo get_bloginfo('name'); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		
        <script>window._templateDirectory = '<?php echo get_template_directory_uri(); ?>';</script>
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
    <img id="logoImgMobile" src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png" alt="" width: 200px;>

    <!-- Banner -->
		<div id="banner">	
		</div>
	<!-- /Banner -->