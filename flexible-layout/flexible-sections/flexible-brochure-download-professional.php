<?php 
    $heading = get_sub_field('heading');
    $product_brochures = get_sub_field('product_brochures');
    $currentState = (isset($_COOKIE['statecookie']) ? $_COOKIE['statecookie'] : ""); // get current state from cookie
?>
<!--new section for Professional brochure downloads -->
<section class="pro-brochure-downloads">
	<div class="container">
        <?php 
            echo (!empty($heading) ? '<div class="text-center"> <h5>'.$heading.'</h5> </div>' : ''); 
            if(!empty($product_brochures)):
                echo '<div class="row">';
                    foreach($product_brochures as $row):
                        $select_state_broucher = $row['select_state_broucher'];
                        if(in_array($currentState,$select_state_broucher)): // check current state brochure
                            $product_brochure_image = $row['product_brochure_image'];
                            $product_brochure_title = $row['product_brochure_title'];
                            $product_brochure_file = $row['product_brochure_file'];
                                echo '<div class="col_3">
                                            <div class="probro-down-block">
                                                <div class="probro-down">
                                                    '.(!empty($product_brochure_image) ? '<figure class="bg-set" style="background-image: url('.$product_brochure_image.')"></figure>' : '').'
                                                    '.(!empty($product_brochure_title) ? '<h6>'.$product_brochure_title.'</h6>' : '').'                                                                                                    
                                                </div>
                                                '.(!empty($product_brochure_file) ? '<a href="'.$product_brochure_file.'" class="button" title="Download" target="_blank">Download</a>' : '').'                                                
                                            </div>
                                        </div>';
                        endif;
                    endforeach;
                echo '</div>';
            endif;    
        ?>	
	</div>
</section>