<?php 
    $show_hide_two_column_data = get_sub_field('show_hide_two_column_data');
    $two_column_data = get_sub_field('two_column_data');
    $before_after_transformations = get_sub_field('before_after_transformations');
?>
<div class="before-after-list diy-center">
	<div class="container">
        <?php 
            if($show_hide_two_column_data == "1" && !empty($two_column_data)): 
                $image = $two_column_data['image'];
                $content = $two_column_data['content'];
                    echo '<div class="d-flex">'; 
                            echo (!empty($image) ? '<div class="diy-img"><img src="'.$image['url'].'" alt="'.$image['alt'].'" /></div>' : '');
                            echo (!empty($content) ? '<div class="diy-cnt">'.$content.'</div>' : '');
                        
                    echo '</div>';
            endif;
            if(!empty($before_after_transformations)):
                echo '<div class="row">';
                    foreach($before_after_transformations as $val):
                        $before_after_transformations_id_here = $val['before_after_transformations_id_here'];
                        $caption = $val['caption'];
                        echo '<div class="col_6">
                                <div class="before-after-block">
                                    '.(!empty($before_after_transformations_id_here) ? do_shortcode('[bafg id="'.$before_after_transformations_id_here.'"]') : '').'
                                    '.(!empty($caption) ? '<p>'.$caption.'</p>' : '').'                                        
                                </div>
                            </div>';
                    endforeach;
                echo '</div>';
            endif;
        ?>
	</div>
</div>
