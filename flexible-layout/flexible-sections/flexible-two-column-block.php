<?php 
    $show_hide_full_width_section_one = get_sub_field('show_hide_full_width_section_one');
    $heading_one = get_sub_field('heading_one');
    $content_one = get_sub_field('content_one');
    $two_column_block = get_sub_field('two_column_block');
    $show_hide_full_width_section_two = get_sub_field('show_hide_full_width_section_two');
    $heading_two = get_sub_field('heading_two');
    $content_two = get_sub_field('content_two');
?>
<section class="generic-structer">
	<div class="container">
		<div class="row">
            <?php
                if($show_hide_full_width_section_one == "1"):
                    if(!empty($heading_one) || !empty($content_one)):
                        echo '<div class="col_12">';
                            echo (!empty($heading_one) ? '<h4>'.$heading_one.'</h4>' : '');
                            echo (!empty($content_one) ? $content_one : '');
                        echo '</div>';
                    endif;
                endif;
                if(!empty($two_column_block)):
                    foreach($two_column_block as $row):
                        $image = $row['image'];
                        $title = $row['title'];
                        $content = $row['content'];
                        echo '<div class="col_6">
                                    '.(!empty($image) ? '<figure class="bg-set" style="background-image: url('.$image.')"></figure>' : '').' 
                                    '.(!empty($title) ? '<h4>'.$title.'</h4>' : '').'                                    
                                    '.$content.'
                                </div>';
                    endforeach;
                endif;
                if($show_hide_full_width_section_two == "1"):
                    if(!empty($heading_two) || !empty($content_one)):
                        echo '<div class="col_12">';
                            echo (!empty($heading_two) ? '<h4>'.$heading_two.'</h4>' : '');
                            echo (!empty($content_two) ? $content_two : '');
                        echo '</div>';
                    endif;
                endif;
            ?>
		</div>
	</div>
</section>
