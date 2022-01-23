<?php 
    $background_color = get_sub_field('background_color');
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $button = get_sub_field('button');
?>
<section class="imgleft-rightcnt" style="background-color: <?php echo (!empty($background_color) ? $background_color : ''); ?>;">
	<div class="container">
		<!-- add class 'row-reverse' for revers the image and content section -->
		<div class="row <?php echo ((!empty($image_position) && $image_position=="right") ? 'row-reverse' : '');?>">
			<div class="col_6">
                <?php echo (!empty($image) ? '<figure class="bg-set" style="background-image: url('.$image.')"></figure>' : ''); ?>				
			</div>
			<div class="col_6">
                <?php 
                    echo (!empty($title) ? '<h5>'.$title.'</h5>' : '');
                    echo (!empty($content) ? $content : '');
                    echo (!empty($button) ? '<a href="'.$button['url'].'" class="button" target="'.(!empty($button['target']) ? $button['target'] : '_self').'" title="'.$button['title'].'">'.$button['title'].'</a>' : '');
                ?>				
			</div>
		</div>
	</div>
</section>