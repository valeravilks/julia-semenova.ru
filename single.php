<?php
/**
 * Template Name: PageOfPosts
    <!-- <li>
           <div data-alt="img01" data-description="<h3>Assemblage</h3>" data-max-width="1800" data-max-height="2400">
                <div data-src="<?php echo get_template_directory_uri(); ?>/images/xxxlarge/3.jpg" data-min-width="1300"></div>
                <div data-src="<?php echo get_template_directory_uri(); ?>/images/xxlarge/3.jpg" data-min-width="1000"></div>
                <div data-src="<?php echo get_template_directory_uri(); ?>/images/xlarge/3.jpg" data-min-width="700"></div>
                <div data-src="<?php echo get_template_directory_uri(); ?>/images/large/3.jpg" data-min-width="300"></div>
                <div data-src="<?php echo get_template_directory_uri(); ?>/images/medium/3.jpg" data-min-width="200"></div>
                <div data-src="<?php echo get_template_directory_uri(); ?>/images/small/3.jpg" data-min-width="140"></div>
                <div data-src="<?php echo get_template_directory_uri(); ?>/images/xsmall/3.jpg"></div>
                <noscript>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/xsmall/3.jpg" alt="img01"/>
                </noscript>
            </div>
        </li> -->
 */ ?>
<?php get_header(); ?>	
<div class="backround">
	<div class="zagolovok">
	<?php wp_title(""); ?></div>
	<div class="gamma-container gamma-loading" id="gamma-container">
		<ul class="gamma-gallery">
			<?php  // Вывод всех вложженных фотографий на страницу
				$media = get_attached_media('image'); // Получаем массив из объектов всех фотографий текущей записи
				$number1 = count($media);              // Считаем количество фотографий в записи
				for($i = 1; $i <= $number1; $i++){     // Цикл в котором поочередно выводим по одной картинке
					$media2 = array_shift( $media );   // Выбираем первый объект с картинкой и удалем его из массива
					$image_url = $media2->ID;        // Выбираем именно тот ключ массива, в котором храниться url на картинку
					$url_img_medium = wp_get_attachment_image_url($image_url, medium);
					$url_img_large = wp_get_attachment_image_url($image_url, large);
					$url_img_full = wp_get_attachment_image_url($image_url, full);
					print_r('<li>');
					print_r('<div data-alt="img'); echo $i; print_r('" data-description="<h3>Assemblage</h3>" data-max-width="1800" data-max-height="2400">');
					print_r('<div data-src="');	echo $url_img_large; print_r('" data-min-width="300"></div>');
					print_r('<div data-src="');	echo $url_img_medium; print_r('"></div>');
					

					print_r('<noscript><img src="'); echo $url_img_medium; print_r('" alt="img'); echo $i; print_r('"/></noscript>');
					print_r('</div>');
					print_r('</li>');
					
					
				}
				?>
  
    </ul>
 
    <div class="gamma-overlay"></div>
 
	</div>
</div>
<?php get_footer(); ?>	

