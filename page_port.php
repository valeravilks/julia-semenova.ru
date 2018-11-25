<link href="style.css" rel="stylesheet" type="text/css">
<?php
/**
 * Template Name: Портретная
 */ ?>
<?php get_header(); ?>
<div class='backround'>
	<div class='zagolovok'>Портретная</div>
	<div class="wrapper">
		<div class="row11">
			
			<?php	query_posts('cat=7'); // вместо "5" указываем идентификатор вашей рубрики.
				 while (have_posts()) : the_post();?>

			<!--в этой строке выводится название статьи и ссылка на неё-->
			<div class="ali">
				<a class="ssilka" href="<?php the_permalink(); ?>">
					
					<div class="thumbnail">
						<img class="fots" src="<?php echo get_the_post_thumbnail_url( '', medium); ?>">
					</div>	
					<div class="name_alb"><?php the_title(); ?></div>
				</a>	
			</div>
				<?php  // вывод текста записи
				endwhile;
				wp_reset_query();
				?>
			
		</div> <!--Ров-->
	</div> <!--Контейнер-->
</div> <!--Бекграунд-->
<?php get_footer(); ?>	