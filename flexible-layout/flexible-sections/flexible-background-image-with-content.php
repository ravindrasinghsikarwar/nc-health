<?php 
    $background_image = get_sub_field('background_image');
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $button = get_sub_field('button');
	
?>
<section class="planning-inspiration-banner bg-set" style="background-image: url('<?php echo $background_image; ?>')">
	<div class="container">
        <?php 
            echo (!empty($title) ? '<h3>'.$title.'</h3>' : '');
            echo (!empty($content) ? $content : ''); 
            echo (!empty($button) ? '<a href="'.$button['url'].'" class="button" target="'.(!empty($button['target']) ? $button['target'] : '_self').'" title="'.$button['title'].'">'.$button['title'].'</a>' : '');
        ?>
	</div>
</section>
