<?php 
    $main_title = get_sub_field('main_title');
    $content = get_sub_field('content');
    $youtube_video_listing = get_sub_field('youtube_video_listing');
    $show_hide_horizontal_line = get_sub_field('show_hide_horizontal_line');      
?>
<!-- New section for professional -->
<!-- new section for profectional -->
<section class="info-twovideo">
	<div class="container">
        <?php 
            echo (!empty($main_title) ? '<h5>'.$main_title.'</h5>' : ''); 
            echo (!empty($content) ? $content : ''); 
            if(!empty($youtube_video_listing)):
                echo '<div class="row">';
                    foreach($youtube_video_listing as $row):
                        $background_image = $row['background_image'];
                        $youtube_link = $row['youtube_link'];
                        $caption = $row['caption'];
                        $sub_caption = $row['sub_caption'];
                            echo '<div class="col_6">
                                        <div class="video-overlay">                                            
                                            '.((!empty($background_image) && !empty($youtube_link)) ? '<a href="'.$youtube_link.'" title="'.$caption.'" class="bg-set popup-youtube" style="background-image: url('.$background_image.')"></a>' : '').'
                                            '.(!empty($caption) ? '<h6>'.$caption.'</h6>' : '').'
                                            '.(!empty($sub_caption) ? '<p>'.$sub_caption.'</p>' : '').'   
                                        </div>
                                    </div>';
                    endforeach;
                echo '</div>';
            endif;
        ?>		
	</div>
</section>
<?php echo (!empty($show_hide_horizontal_line) && $show_hide_horizontal_line=="1" ? '<div class="container"><hr/></div>' : ''); ?>