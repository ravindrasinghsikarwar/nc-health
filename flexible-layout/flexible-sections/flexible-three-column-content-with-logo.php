<?php 
    $three_column_content_with_logo = get_sub_field('three_column_content_with_logo');
    if(!empty($three_column_content_with_logo)):
        echo '<section class="three-col-logo-info">
                <div class="container">
                    <div class="row">';
                            foreach($three_column_content_with_logo as $row):
                                $logo = $row['logo'];
                                $content = $row['content'];
                                    echo '<div class="col_4">
                                            <figure>
                                                <div class="three-col-logo">
                                                    '.(!empty($logo) ? '<img src="'.$logo['url'].'" alt="'.$logo['alt'].'">' : '').'
                                                </div>
                                                '.(!empty($content) ? '<figcaption>'.$content.'</figcaption>' : '').'                                                
                                            </figure>
                                        </div>';
                            endforeach;
                    echo '</div>
                </div>
        </section>';
    endif;
?>