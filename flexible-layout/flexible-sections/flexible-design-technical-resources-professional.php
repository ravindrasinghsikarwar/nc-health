<?php 
    $main_title = get_sub_field('main_title');
    $design_technical_resources = get_sub_field('design_technical_resources');
?>
<!-- new section for professional -->
<section class="destech-resources">
	<div class="container">
        <?php
            echo (!empty($main_title) ? '<h5>'.$main_title.'</h5>' : '');
            if(!empty($design_technical_resources)):
                echo '<div class="row">';
                    foreach($design_technical_resources as $row):
                        $image = $row['image'];
                        $label = $row['label'];
                        $link = $row['link'];
                            echo '<div class="col_6">
                                    <a href="'.(!empty($link) ? $link : 'javascript:void(0);').'" class="destech-block" title="'.(!empty($label) ? $label : '').'">
                                        <div class="bg-set" style="background-image: url('.$image.')"></div>
                                        '.(!empty($label) ? '<p>'.$label.'</p>' : '').'                                        
                                    </a>
                                </div>';
                    endforeach;
                echo '</div>';
            endif;
        ?>
	</div>
</section>