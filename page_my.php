<?php
/**
 * Template Name: Обо мне

 */ ?>
<?php get_header(); ?>
<div class="my_div backround">
	<div class="zagolovok">Обо мне</div>
	<div class="julia">
		<div class="row">
			<div class='jul'><img class='my_juli' src="<?php echo get_template_directory_uri(); ?>/img/julia.jpg"></div>
			<div class='my_content'><?php the_post(); the_content(); ?></div>
		</div>
	</div>
	
</div>
<?php get_footer(); ?>	