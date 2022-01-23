<?php 
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $button = get_sub_field('button');
    $image = get_sub_field('image');
?>
<!-- new section for professional -->
<section class="pro-request-quote">
	<div class="container">
		<div class="row">
			<div class="col_6">
				<div class="prorequest-quote-info">
                    <?php
                        echo (!empty($title) ? '<h6>'.$title.'</h6>' : '');
                        echo (!empty($content) ? $content : '');
                        echo (!empty($button) ? '<a href="'.$button['url'].'" target="'.(!empty($button['target']) ? $button['target'] : '_self').'" class="button" title="'.$button['title'].'">'.$button['title'].'</a>' : '');
                    ?>
				</div>
			</div>
			<div class="col_6">
                <?php echo (!empty($image) ? '<figure class="bg-set" style="background-image: url('.$image.')"></figure>' : ''); ?>				
			</div>
		</div>
	</div>
</section>