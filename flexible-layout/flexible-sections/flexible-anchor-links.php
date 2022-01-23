<?php 
    $anchor_links = get_sub_field('anchor_links');
    if(!empty($anchor_links)):
        echo '<div class="mega-pagetabs-sec">
                <div class="container">
                    <ul class="mega-tabs d-flex five-tabs">';
                                foreach($anchor_links as $row):
                                    $default_icon = $row['default_icon'];
                                    $hover_icon = $row['hover_icon'];
                                    $button_label = $row['button_label'];
                                    $button_link = $row['button_link'];
                                    if(!empty($button_link)):
                                        echo '<li><a href="'.$button_link.'" class="bgcl-btn" title="">';
                                            echo (!empty($default_icon) ? '<img src="'.$default_icon['url'].'" alt="'.$default_icon['alt'].'" class="default-icon" />' : '');
                                            echo (!empty($hover_icon) ? '<img src="'.$hover_icon['url'].'" alt="'.$hover_icon['alt'].'" class="hover-icon" />' : '');
                                        echo '<h6>'.$button_label.'</h6>
                                        </a></li>';
                                    endif;
                                endforeach;
                    echo '</ul>
                </div>
            </div>';
    endif;	
?>