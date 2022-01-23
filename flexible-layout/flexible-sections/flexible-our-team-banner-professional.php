<?php 
    $background_image = get_sub_field('background_image');
    $button = get_sub_field('button');
    $label = get_sub_field('label');    
?>
<section class="ourteam-banner">
	<div class="container">
		<div class="bg-set" style="background-image: url('<?php echo $background_image; ?>')">
            <?php echo ((!empty($button) || !empty($label)) ? '<h6>'.(!empty($label) ? '<strong>'.$label.'</strong>' : '').''.(!empty($button) ? '<a href="'.$button['url'].'" target="'.(!empty($button['target']) ? $button['target'] : '_self').'" title="'.$button['title'].'">'.$button['title'].'</a>' : '').'</h6>' : ''); ?>
		</div>
	</div>
</section>