<?php 
    $anchor_links = get_sub_field('anchor_links');
    $logo_with_links = get_sub_field('logo_with_links');
    $heading = get_sub_field('heading');
    $show_hide_social_icons = get_sub_field('show_hide_social_icons');
?>
<section class="exper-years">
	<div class="exper-years-inner">
		<div class="container">
			<div class="row">
				<div class="col_6">
                    <?php if(!empty($anchor_links)): ?>
                            <ul class="exper-years-btn">
                                <?php
                                    foreach($anchor_links as $row):
                                        $default_icon = $row['default_icon'];
                                        $hover_icon = $row['hover_icon'];
                                        $button_label = $row['button_label'];
                                        $button_link = $row['button_link'];
                                        if(!empty($button_link) && $button_link != "#"):
                                            $button_link=$button_link;
                                        elseif(!empty($button_link) && $button_link == "#"):
                                            $button_link = "javascript:void(0);";
                                        else:
                                            $button_link = "javascript:void(0);";
                                        endif;
                                        if(!empty($button_link)):
                                            echo '<li><a href="'.$button_link.'" class="button" title="">';
                                                echo (!empty($default_icon) ? '<img src="'.$default_icon['url'].'" alt="'.$default_icon['alt'].'" class="default-img" />' : '');
                                                echo (!empty($hover_icon) ? '<img src="'.$hover_icon['url'].'" alt="'.$hover_icon['alt'].'" class="hover-img" />' : '');
                                            echo $button_label.'
                                            </a></li>';
                                        endif;
                                    endforeach;
                                ?>
                            </ul>
                    <?php endif;?>
				</div>
				<div class="col_6">
                    <?php if(!empty($logo_with_links)): ?>
                            <ul class="exper-year-logos">
                                <?php
                                    foreach($logo_with_links as $val):
                                        $logo = $val['logo'];
                                        $links = $val['links']; 
                                        if(!empty($links) && $links != "#"):
                                            $links=$links;
                                        elseif(!empty($links) && $links == "#"):
                                            $links = "javascript:void(0);";
                                        else:
                                            $links = "javascript:void(0);";
                                        endif;
                                            if(!empty($links)):
                                                echo '<li>
                                                        <a href="'.$links.'" title="">
                                                            <img src="'.$logo['url'].'" alt="'.$logo['alt'].'">
                                                        </a>
                                                    </li>';
                                            endif;   
                                    endforeach;
                                ?>
                            </ul>
                    <?php endif;?>
				</div>
			</div>
		</div>
	</div>
    <?php
        $show_hide_social_icons = get_sub_field('show_hide_social_icons');
        if($show_hide_social_icons == "1"):
            $heading = get_sub_field('heading');
            $social_share = amthemeoption('social_share_professional');
    ?>
                <div class="exper-years-social text-center">
                    <div class="container">                        
                        <?php
                            echo (!empty($heading) ? '<h5>'.$heading.'</h5>' : '');
                            if(!empty($social_share)):
                                echo '<ul class="list-inline">';
                                    foreach($social_share as $row):
                                            echo (!empty($row['url']) ? '<li><a href="'.$row['url'].'" title="'.$row['social_icon_title'].'" target="_blank"><i class="'.$row['select_icon'].'"></i></a></li>' : '');
                                    endforeach;
                                echo '</ul>';
                            endif;
                        ?>
                    </div>
                </div>
    <?php endif; ?>
</section>