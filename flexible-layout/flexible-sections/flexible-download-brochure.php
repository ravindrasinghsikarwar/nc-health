<?php 
    $brochure_image = get_sub_field('brochure_image');
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $button_label = get_sub_field('button_label');
    $upload_pdf = get_sub_field('upload_pdf');
        echo '<section class="download-brochure">
                <div class="container">
                    <div class="download-brochure-inner">
                        <div class="row">
                            <div class="col_6">
                                <figure>'.(!empty($brochure_image) ? '<img src="'.$brochure_image.'" alt="'.$title.'" />' : '').'</figure>
                            </div>	
                            <div class="col_6">
                                '.(!empty($title) ? '<h5>'.$title.'</h5>' : '').'
                                '.(!empty($content) ? $content : '').'
                                '.(!empty($upload_pdf) ? '<a href="'.$upload_pdf.'" class="bgcl-btn" title="'.$button_label.'" download>'.$button_label.'</a>' : '').'
                            </div>	
                        </div>
                    </div>
                </div>
            </section>';
?>
