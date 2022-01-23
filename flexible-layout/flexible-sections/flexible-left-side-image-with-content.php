<?php 
    $left_side_image_with_content_block = get_sub_field('left_side_image_with_content_block');
    if(!empty($left_side_image_with_content_block)):
        echo '<div class="leftimg-centerinfo">
                <div class="container">';
                    foreach($left_side_image_with_content_block as $row):
                        $image = $row['image'];
                        $title = $row['title'];
                        $content = $row['content'];
                            echo '<div class="img-centerinfo-box">
                                    <figure class="bg-set" style="background-image: url('.$image.')"></figure>
                                    <div class="imgcenterinfo">
                                        <h5>'.$title.'</h5>
                                        '.$content.'
                                    </div>
                                </div>';
                    endforeach;
                echo '</div>
        </div>';
    endif;
?>