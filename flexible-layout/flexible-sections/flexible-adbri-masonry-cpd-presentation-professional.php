<?php 
    $main_title = get_sub_field('main_title');
    $content = get_sub_field('content');
    $two_column_box = get_sub_field('two_column_box');
    $show_hide_horizontal_line = get_sub_field('show_hide_horizontal_line'); 
?>
<!--new section for Professional nc cpd -->
<section  class="nc-cpd">
	<div class="container">
		<div class="text-center">
            <?php
                echo (!empty($main_title) ? '<h5>'.$main_title.'</h5>' : '');
                echo (!empty($content) ? $content : '');
            ?>
		</div>
        <?php
            if(!empty($two_column_box)):
                echo '<div class="row">';
                    foreach($two_column_box as $row):
                        $heading = $row['heading'];
                        $contents = $row['contents'];
                            echo '<div class="col_6">
                                        <div class="accor-deskopen">
                                            '.(!empty($heading) ? '<a href="javascript:void(0);" title="'.$heading.'">'.$heading.'</a>' : '').'
                                            '.(!empty($contents) ? '<div class="adbri-cpd-info">'.$contents.'</div>' : '').'                                            
                                        </div>
                                    </div>';
                    endforeach;
                echo '</div>';
            endif;
        ?>
	</div>
</section>
<?php echo (!empty($show_hide_horizontal_line) && $show_hide_horizontal_line=="1" ? '<div class="container"><hr/></div>' : ''); ?>