<?php 
    $main_title = get_sub_field('main_title');
    $blocks = get_sub_field('blocks');
    $buttonMore = get_sub_field('button');    
?>
<section class="projects-ideas">
	<div class="container">
        <?php
            echo (!empty($main_title) ? '<h4>'.$main_title.'</h4>' : '');
            if(!empty($blocks)):
                echo '<div class="row">';
                    foreach($blocks as $row):
                        $preview_image = $row['preview_image'];
                        $button = $row['button'];
                        echo '<div class="col_3">
                                <div class="prod-range-box">
                                    <figure class="bg-set" style="background-image: url('.$preview_image.')"></figure>
                                    '.(!empty($button) ? '<a href="'.$button['url'].'" class="button" title="'.$button['title'].'" target="'.(!empty($button['target']) ? $button['target'] : '_self').'">'.$button['title'].'</a>' : '').'                                    
                                </div>
                            </div>';
                    endforeach;
                    echo (!empty($buttonMore) ? '<div class="col_12 text-center"><a href="'.$buttonMore['url'].'" class="link-tag" title="'.$buttonMore['title'].'" target="'.(!empty($buttonMore['target']) ? $buttonMore['target'] : '_self').'">'.$buttonMore['title'].'</a></div>' : '');
                echo '</div>';
            endif;
        ?>
	</div>
</section>