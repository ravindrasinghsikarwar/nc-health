<?php 
    $content = get_sub_field('content');
    echo (!empty($content) ? '<section class="about-us-info"><div class="container">'.$content.'</div></section>' : '');    
?>