<?php 
    $heading = get_sub_field('heading');
    $image = get_sub_field('image');
    $form_content = get_sub_field('form_content');
?>
<section class="outdoor-plan-form">
    <div class="container">
        <div class="outplan-inner">
            <div class="row">
                <div class="col_6">
                    <?php
                        echo (!empty($heading) ? '<h4>'.$heading.'</h4>' : '');
                        echo (!empty($image) ? '<figure><img src="'.$image['url'].'" alt="'.$image['alt'].'"/></figure>' : '');
                    ?>
                </div>
                <div class="col_6">
                    <?php echo (!empty($form_content)  ? $form_content : ''); ?>
            	</div>
        	</div>
        </div>
    </div>	
</section>