<?php 
    $heading = get_sub_field('heading');
    $image_left_side = get_sub_field('image_left_side');
    $content_right_side = get_sub_field('content_right_side');
    $full_width_content = get_sub_field('full_width_content');
    $show_hide_horizontal_line = get_sub_field('show_hide_horizontal_line'); 
?>
<!-- new section for profectional -->
<section class="help-fast-track">
	<div class="container">
		<div class="text-center">
            <?php echo (!empty($heading) ? '<h5>'.$heading.'</h5>' : ''); ?>			
		</div>
		<div class="row">
			<div class="col_6">
                <?php echo (!empty($image_left_side) ? '<figure class="bg-set" style="background-image: url('.$image_left_side.')"></figure>' : ''); ?>				
			</div>
			<div class="col_6">
				<?php echo (!empty($content_right_side)  ? $content_right_side : ''); ?>
			</div>
		</div>
	</div>
</section>

<!-- new section for profectional -->
<?php if(!empty($full_width_content)): ?>
        <section class="speak-support">
            <div class="container">
                <?php 
                    echo (!empty($full_width_content['title']) ? '<h5>'.$full_width_content['title'].'</h5>' : '');
                    echo (!empty($full_width_content['content']) ? '<div class="speaksupport-form">'.$full_width_content['content'].'</div>' : '');
                ?>   
            </div>
        </section>
<?php endif; echo (!empty($show_hide_horizontal_line) && $show_hide_horizontal_line=="1" ? '<div class="container"><hr/></div>' : ''); ?>