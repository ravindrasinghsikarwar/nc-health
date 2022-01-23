<?php 
    $main_title = get_sub_field('main_title');
    $blocks = get_sub_field('blocks');    
?>
<section class="product-range">
	<div class="container">
        <?php
            echo (!empty($main_title) ? '<h4>'.$main_title.'</h4>' : '');
            if(!empty($blocks)):
                echo '<div class="row">';
                    foreach($blocks as $row):
                        $preview_image = $row['preview_image'];
                        $product_image = $row['product_image'];
                        $button = $row['button'];
                        echo '<div class="col_3">
                                <div class="prod-range-box">
                                    <figure class="bg-set" style="background-image: url('.$preview_image.')"></figure>
                                    <div class="prodimg-range">
                                        '.(!empty($product_image) ? '<img src="'.$product_image['url'].'" alt="'.$product_image['alt'].'">' : '').'                                        
                                    </div>
                                    '.(!empty($button) ? '<a href="'.$button['url'].'" class="button" title="'.$button['title'].'" target="'.(!empty($button['target']) ? $button['target'] : '_self').'">'.$button['title'].'</a>' : '').'                                    
                                </div>
                            </div>';
                    endforeach;
                echo '</div>';
            endif;
        ?>
	</div>
</section>