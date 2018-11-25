<!doctype html>
<html>
<head>
<?php wp_head(); ?>
	</head>
<body>

<div class='header'>
	
	<div class='logo'>
		<a href='https://julia-semenova.ru'><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
		<div class="menuicon"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-button.png"></div>
		<div class="menuicon-white"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-button-white.png"></div>
	</div>
    <div class="menu">
		
		<?php wp_nav_menu("menu=menu3"); ?>

	</div>
</div>