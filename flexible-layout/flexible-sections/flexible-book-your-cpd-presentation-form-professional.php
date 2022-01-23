<?php 
    $main_title = get_sub_field('main_title');
    $content = get_sub_field('content');
    $cpd_presentation_form = get_sub_field('cpd_presentation_form');
    $show_hide_horizontal_line = get_sub_field('show_hide_horizontal_line');  
?>
<!-- new section booked cpd form -->
<section class="booked-cpd">
	<div class="container">
		<div class="text-center">
            <?php 
                echo (!empty($main_title) ? '<h5>'.$main_title.'</h5>' : '');
                echo (!empty($content) ? $content : ''); 
            ?>
		</div>
        <?php
            if(!empty($cpd_presentation_form)):
                $form_title = $cpd_presentation_form['form_title'];
                $form_content = $cpd_presentation_form['form_content'];
                echo '<div class="booked-cpd-form">
                        '.(!empty($form_title) ? '<h5>'.$form_title.'</h5>	' : '').'
                        '.(!empty($form_content) ? '<div class="cpd-form-inner">'.$form_content.'</div>' : '').'
                    </div>';
            endif;
        ?>
	</div>
</section>
<?php echo (!empty($show_hide_horizontal_line) && $show_hide_horizontal_line=="1" ? '<div class="container"><hr/></div>' : ''); ?>