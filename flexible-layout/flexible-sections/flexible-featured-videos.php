<?php 
    $main_title = get_sub_field('main_title');
    $more_video_link = get_sub_field('more_video_link');
    $video_slider = get_sub_field('video_slider');
?>
    <section class="diy-videos-sec">
        <div class="container">
            <div class="diy-videos-inner">
                <div class="d-flex justify-content-between">
                    <?php 
                        echo (!empty($main_title) ? '<h5>'.$main_title.'</h5>' : '');
                        echo (!empty($more_video_link) ? '<a href="'.$more_video_link['url'].'" class="link-tag" target="'.(!empty($more_video_link['target']) ? $more_video_link['target'] : '_self').'" title="'.$more_video_link['title'].'">'.$more_video_link['title'].'</a>' : '');
                    ?>
                </div>
                <?php
                    if(!empty($video_slider)):
                        echo '<ul class="diyvideos">';
                            foreach($video_slider as $row):
                                $video_thumbnail = $row['video_thumbnail'];
                                $youtube_video_link = $row['youtube_video_link'];
                                $caption = $row['caption'];
                                    echo '<li>	
                                        <a href="'.$youtube_video_link.'" title="'.$caption.'" class="bg-set diy-video-overlay popup-youtube" style="background-image: url('.$video_thumbnail.')"></a>					
                                        <p>'.$caption.'</p>
                                    </li>';
                            endforeach;
                        echo '</ul>';
                    endif;
                ?>                
            </div>
        </div>
    </section>