<?php 
    $main_title = get_sub_field('main_title');
    $product_categories = get_sub_field('product_categories');
?>
<!-- This class "product-range" same as homeowner but class="pro-product-block" for professional -->
<section class="product-range">
	<div class="container">
        <?php
            echo (!empty($main_title) ? '<h4>'.$main_title.'</h4>' : '');
            if(!empty($product_categories)):
                echo '<div class="row">';
                    foreach($product_categories as $row):
                        $image = $row['image'];
                        $label = $row['label'];
                        $link = $row['link'];
                            echo '<div class="col_4">
                                    <a href="'.(!empty($link) ? $link : 'javascript:void(0);').'" class="pro-product-block" title="'.(!empty($label) ? $label : '').'">
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
