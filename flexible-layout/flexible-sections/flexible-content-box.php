<?php 
    $content_box = get_sub_field('content_box');
    if(!empty($content_box)):
        echo '<div class="leftimg-info">
                <div class="container">';
                        foreach($content_box as $row):
                            $title = $row['title'];
                            $content = $row['content'];
                                echo (!empty($title) ? '<h5>'.$title.'</h5>' : '');
                                echo (!empty($content) ? $content : '');
                        endforeach;
                echo '</div>
        </div>';        
    endif;
?>