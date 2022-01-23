<?php 
    $outdoor_planning_guide = get_sub_field('outdoor_planning_guide');
    $image_reseller = get_sub_field('image_reseller');
    $anchor_link = get_sub_field('anchor_link');
?>
    <section class="outdoor-plannnig-half">
        <div class="container">
            <div class="row">
                <div class="col_6">
                    <?php 
                        if(!empty($outdoor_planning_guide)): 
                            $image = $outdoor_planning_guide['image'];
                            $title = $outdoor_planning_guide['title'];
                            $content = $outdoor_planning_guide['content'];
                            $upload_pdf = $outdoor_planning_guide['upload_pdf'];
                    ?>
                            <div class="outdoor-pdf-form d-flex">                                
                                <?php echo (!empty($image) ? '<figure><img src="'.$image['url'].'" alt="'.$image['alt'].'" /></figure>' : '');?>
                                <div class="outdoorhalf-form">
                                    <?php
                                        echo (!empty($title) ? '<h5>'.$title.'</h5>' : '');
                                        echo (!empty($content) ? $content : '');
                                        echo (!empty($upload_pdf) ? '<a href="'.$upload_pdf.'" style="display:none;" class="pdfDownload"  download>download</a>' : '');
                                    ?>
                                </div>
                            </div>
                    <?php endif; ?>
                </div>
                <div class="col_6">
                    <?php echo (!empty($image_reseller) && !empty($anchor_link) ? '<div class="outdoor-image-space"><a href="'.$anchor_link.'" target="_self"><img src="'.$image_reseller['url'].'" alt="'.$image_reseller['alt'].'" /></a></div>' : ''); ?>
                </div>
            </div>
        </div>
    </section>