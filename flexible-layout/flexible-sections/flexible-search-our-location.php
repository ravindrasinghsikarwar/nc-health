<?php 
    $main_title = get_sub_field('main_title');
    $our_locations = get_sub_field('our_locations');
    if(my_wp_is_mobile()):
        $stateClass = 'd-none';
    else:
        $stateClass = '';
    endif;
?>
<section class="search-our-location">
	<div class="container">
        <?php
            echo (!empty($main_title) ? '<h4>'.$main_title.'</h4>' : '');
            $locationMapData = array();
                if(!empty($our_locations)):
                    echo '<ul class="our-location-list">';
                        foreach($our_locations as $loc):
                            $state = $loc['state'];
                            $locations = $loc['locations'];
                    ?>
                                <li class="mainState">
                                    <h3><?php echo $state;?></h3>
                                    <?php 
                                        if(!empty($locations)): // location condition start 
                                            echo '<ul class="ourLocation '.$stateClass.'">';
                                                    foreach($locations as $row): // location loop start 
                                                        $location_name = $row['location_name']; 
                                                        $locationSlug = strtolower(str_replace(' ','',preg_replace('/[^A-Za-z0-9 ]/', '', $location_name)));
                                                        echo '<li><a href="javascript:void(0);" data-location="'.$locationSlug.'" title="'.$location_name.'">'.$location_name.'</a></li>'; // display location name here.                                                                                               
                                                    endforeach; // location loop end
                                                    foreach($locations as $row): // location loop for location details tabbing start 
                                                        $location_name = $row['location_name'];                                                         
                                                        $heading = $row['heading'];
                                                        $address = $row['address'];                                                        
                                                        $phone_label = $row['phone_label'];
                                                        $phone_number = $row['phone_number'];
                                                        $fax_label = $row['fax_label'];
                                                        $fax_number = $row['fax_number'];
                                                        $content = $row['content'];
                                                        $locationSlug = strtolower(str_replace(' ','',preg_replace('/[^A-Za-z0-9 ]/', '', $location_name)));                                                          
                                                        $address['slug'] = $locationSlug; // add slug in address associative array
                                                        $locationMapData[] = $address;
                                                        ?>
                                                                <div class="locbrief <?php echo $locationSlug; ?>" data-location="<?php echo $locationSlug; ?>" style="display:none;">
                                                                    <div class="d-flex">
                                                                        <div class="locbrief-left">
                                                                            <?php
                                                                                echo (!empty($heading) ? '<h5>'.$heading.'</h5>' : '');
                                                                                if(!empty($address) || !empty($phone_number) || !empty($fax_number)):
                                                                                    echo '<address>
                                                                                        '.(!empty($address) ? $address['address'] : '').'<br>
                                                                                        '.(!empty($phone_number) ? $phone_label.' <a href="tel:'.str_replace(' ','',preg_replace('/[^A-Za-z0-9 ]/', '', $phone_number)).'" title="Call Us">'.$phone_number.'</a>' : '').'<br>
                                                                                        '.(!empty($fax_number) ? $fax_label.' '.$fax_number : '').'
                                                                                        '.(!empty($content) ? $content : '').'
                                                                                    </address>';
                                                                                endif;                                                                            
                                                                            ?>
                                                                        </div>
                                                                        <div class="locbrief-right">
                                                                            <div class="locbrief-map" data-mapid="<?php echo $locationSlug; ?>"></div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <?php
                                                    endforeach; // location loop for location details tabbing  end
                                            echo '</ul>';
                                        endif; // location condition end ?>
                                </li>
                    <?php
                        endforeach;
                    echo '</ul>';
                endif;
        ?>
	</div>
</section>
<?php
$google_map_api_key = amthemeoption('google_map_api_key');
if(!empty($google_map_api_key)):
?>
<script async defer src="//maps.googleapis.com/maps/api/js?key=<?php echo $google_map_api_key; ?>&callback=initResellerMap&region=AU&libraries=&v=weekly"></script>
<?php endif;?>
<script>
<?php
    $json=json_encode( $locationMapData );
    echo "var json={$json};";
?>
function initResellerMap() {
    for( var n in json ){
        var obj=json[n];
        var myLatLng = { lat: parseFloat(obj.lat), lng: parseFloat(obj.lng) };
        var map = new google.maps.Map(document.querySelector('div.locbrief-map[ data-mapid="'+obj.slug+'" ]'), {
                    zoom: 12,
                    center: myLatLng,
                    scrollwheel     : false,
                    mapTypeControl: false,
                    scaleControl: true,
                    zoomControl: true,														
                    });
            new google.maps.Marker({
            position: myLatLng,
            map,
            title: obj.address,
        });
        map.setMapTypeId('roadmap');
    }
}
</script>