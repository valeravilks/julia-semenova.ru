<?php
/**
 * Template Name: Контакты

 */ ?>
<?php get_header(); ?>	
<div class="backround">
	<div class="zagolovok">Контакты</div>
	<div class='contakt'>
		<div class='text_contact'>
			<p><b>Хотите записаться на фотосессию?</b></p>
			<div class='bell'></div>
			<div class='rad'>
				<img src="<?php echo get_template_directory_uri(); ?>/img/phone.png">
				<div class='text'>8-911-839-84-47</div>
			</div>
			<div class='rad'>
				<img src="<?php echo get_template_directory_uri(); ?>/img/convert.png">
				<div class='text'>Nula09@mail.ru</div>
			</div>
			<div class='rad'>
				<img src="<?php echo get_template_directory_uri(); ?>/img/geo.png">
				<div class='text'>г. Санкт-Петербург</div>
			</div>
		</div>
		<div class='img_contact'><img src="<?php echo get_template_directory_uri(); ?>/img/julia2.jpg"></div>
		<div class='form_contact'>
			<div class="quest"><b>Остались вопросы?</b></div>
			<div class="quest2">Отправьте мне сообщение прямо сейчас!</div>
			<div><?php the_post(); the_content(); ?></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>	