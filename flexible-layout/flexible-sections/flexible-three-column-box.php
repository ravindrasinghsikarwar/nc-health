<?php 
    $three_column_box = get_sub_field('three_column_box');
    if(!empty($three_column_box)):
        echo '<section class="product-range imageheight-small">
                <div class="container">
                    <div class="row">';
                            foreach($three_column_box as $row):
                                $image = $row['image'];
                                $label_with_link = $row['label_with_link'];
                                    echo '<div class="col_4">
                                            <div class="prod-range-box">
                                                <figure class="bg-set" style="background-image: url('.$image.')"></figure>
                                                '.(!empty($label_with_link) ? '' : '').'
                                                <a href="'.$label_with_link['url'].'" class="button" target="'.(!empty($label_with_link['target']) ? $label_with_link['target'] : '_self').'" title="'.$label_with_link['title'].'">'.$label_with_link['title'].'</a>
                                            </div>
                                        </div>';
                            endforeach;
                    echo '</div>
                </div>
        </section>';
    endif;
?>