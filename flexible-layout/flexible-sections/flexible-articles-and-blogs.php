<?php 
    $main_title = get_sub_field('main_title');
    $top_articles = get_sub_field('articles_blogs');
    $read_more_label = get_sub_field('read_more_label');          
            if(!empty($top_articles)):
                $top_articles = object_to_array($top_articles); // convert object into array
            else:
                $args = array( 'numberposts' => '3');
                $recent_posts = wp_get_recent_posts( $args );
                $top_articles = $recent_posts;
            endif; 
            if(!empty($top_articles)):  
        ?>                 
                    <section class="articles-boxs">
                        <div class="container">
                            <?php echo (!empty($main_title) ? '<h5>'.$main_title.'</h5>' : '');?>                
                            <div class="row">
                                <?php
                                    foreach($top_articles as $recent): 
                                        $blogPostID = $recent['ID'];
                                        $blogPostTitle = $recent['post_title'];
                                        $blogPostContent = $recent['post_excerpt'];
                                        $blogPostUrl = esc_url(get_permalink($blogPostID));
                                        $blogPostImage = get_the_post_thumbnail_url($blogPostID);
                                ?>
                                <div class="col_4">
                                    <div class="artbox">
                                        <figure  class="bg-set" style="background-image: url('<?php echo (!empty($blogPostImage) ? $blogPostImage : ''); ?>')"></figure>
                                        <h6><?php echo $blogPostTitle; ?></h6>
                                        <p><?php echo $blogPostContent; ?></p>
                                        <a href="<?php echo (!empty($blogPostUrl) ? $blogPostUrl : '');?>" class="button" title="<?php echo (!empty($read_more_label) ? $read_more_label : 'READ MORE');?>"><?php echo (!empty($read_more_label) ? $read_more_label : 'READ MORE');?></a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>	
<?php
            wp_reset_postdata();
            endif;