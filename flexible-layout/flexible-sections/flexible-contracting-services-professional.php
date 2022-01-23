<?php 
    $heading = get_sub_field('heading');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $contracting_services = get_sub_field('contracting_services');
    $show_hide_horizontal_line = get_sub_field('show_hide_horizontal_line');      
?>
<section class="contracting-services">
	<div class="container">
        <?php echo (!empty($heading) ? '<h2>'.$heading.'</h2>' : ''); ?>
		<div class="row">
			<div class="col_6">
                <?php 
                    echo (!empty($title) ? '<h4>'.$title.'</h4>' : ''); 
                    echo (!empty($subtitle) ? '<h5>'.$subtitle.'</h5>' : '');
                    echo (!empty($content) ? $content : '');
                ?>
			</div>
			<div class="col_6">
                <?php echo (!empty($image) ? '<figure class="bg-set" style="background-image: url('.$image.')"></figure>' : '');  ?>
			</div>
		</div>
		<!-- same as homeowner -->
        <?php  if(!empty($contracting_services)): ?>
                <div class="mega-pagetabs-sec">
                        <!-- if five li are added then add this class 'five-tabs' -->
                        <ul class="mega-tabs d-flex four-tabs"> 
                            <?php 
                                foreach($contracting_services as $row): 
                                    $default_icon = $row['default_icon'];
                                    $hover_icon = $row['hover_icon'];
                                    $label = $row['label'];
                                    if(!empty($label)):
                            ?>
                                    <li>
                                        <a href="javascript:void(0);" class="bgcl-btn" title="<?php echo $label; ?>">
                                            <?php 
                                                echo (!empty($default_icon) ? '<img src="'.$default_icon['url'].'" alt="'.$default_icon['alt'].'" class="default-icon">' : '');
                                                echo (!empty($hover_icon) ? '<img src="'.$hover_icon['url'].'" alt="'.$hover_icon['alt'].'" class="hover-icon">' : ''); 
                                                echo (!empty($label) ? '<h6>'.$label.'</h6>' : '');
                                            ?>
                                        </a>
                                    </li>
                            <?php endif; endforeach;?>
                        </ul>
                </div>
        <?php endif;?>
	</div>
</section>
<?php echo (!empty($show_hide_horizontal_line) && $show_hide_horizontal_line=="1" ? '<div class="container"><hr/></div>' : ''); ?>