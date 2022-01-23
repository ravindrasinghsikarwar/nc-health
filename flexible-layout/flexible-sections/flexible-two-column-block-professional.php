<?php 
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $show_hide_horizontal_line = get_sub_field('show_hide_horizontal_line');      
?>
<!-- New section for professional -->
<section class="imgleft-cnt">
	<div class="container">
		<div class="row align-items-center">
			<div class="col_6">
                <?php echo (!empty($image) ? '<figure class="bg-set" style="background-image: url('.$image.')"></figure>' : ''); ?>				
			</div>
			<div class="col_6">
                <?php
                    echo (!empty($title) ? '<h5>'.$title.'</h5>' : '');
                    echo (!empty($content) ? $content : '');
                ?>
			</div>
		</div>
	</div>
</section>
<?php echo (!empty($show_hide_horizontal_line) && $show_hide_horizontal_line=="1" ? '<div class="container"><hr/></div>' : ''); ?>