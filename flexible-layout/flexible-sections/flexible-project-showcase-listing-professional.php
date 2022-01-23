<?php 
    $main_title = get_sub_field('main_title');
    $project_showcase = get_sub_field('project_showcase');
    $read_more_label = get_sub_field('read_more_label');
    $view_more_label_link = get_sub_field('view_more_label_link');
    $show_hide_horizontal_line = get_sub_field('show_hide_horizontal_line'); 
?>
<!-- new section for professional -->
<section class="project-showcase">
	<div class="container">
        <?php echo (!empty($main_title) ? '<h5>'.$main_title.'</h5>' : ''); ?>		
		<div class="row">
            <?php 
                if(!empty($project_showcase)):
                    foreach($project_showcase as $row):
                        $projectShowcaseID = $row;
						$featureImgURL = get_the_post_thumbnail_url($projectShowcaseID);
						$excerpt = get_the_excerpt($projectShowcaseID);
                        $title = get_the_title($projectShowcaseID);
                        
                            echo '<div class="col_4">
                                    <div class="proshowcase-block">
                                        <figure class="bg-set" style="background-image: url('.$featureImgURL.')"></figure>
                                        '.(!empty($title) ? '<h6>'.$title.'</h6>' : '').'
                                        '.(!empty($excerpt) ? '<p>'.$excerpt.'</p>' : '').'
                                        '.(!empty($excerpt) ? '<a href="'.get_permalink($projectShowcaseID).'" class="link-tag" title="'.(!empty($read_more_label) ? $read_more_label : 'Read More').'">'.(!empty($read_more_label) ? $read_more_label : 'Read More').'</a>' : '').'
                                    </div>
                                </div>';
                    endforeach;
                endif;
            echo (!empty($view_more_label_link) ? '<div class="col_12"><a href="'.$view_more_label_link['url'].'" target="'.(!empty($view_more_label_link['target']) ? $view_more_label_link['target'] : '_self').'" class="bgcl-btn" title="'.$view_more_label_link['title'].'">'.$view_more_label_link['title'].'</a></div>' : ''); 
            ?>
		</div>
	</div>
</section>
<?php echo (!empty($show_hide_horizontal_line) && $show_hide_horizontal_line=="1" ? '<div class="container"><hr/></div>' : ''); ?>