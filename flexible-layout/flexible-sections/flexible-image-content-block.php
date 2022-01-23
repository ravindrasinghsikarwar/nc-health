<?php 
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    echo '<div class="imgbanner-info">
            <div class="container">
                '.(!empty($image) ? '<div class="bg-set" style="background-image: url('.$image.')"></div>' : '').'  
                '.(!empty($content) ? '<div class="imgbanner-info-inner">'.$content.'</div>' : '').' 
            </div>
        </div>';    
?>