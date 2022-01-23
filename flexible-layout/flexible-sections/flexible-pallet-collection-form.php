<?php 
    $content = get_sub_field('content');
    $pallet_collection_form = get_sub_field('pallet_collection_form');
    echo '<section class="pallet-contact-form">
            <div class="container">
                '.(!empty($content) ? $content : '').'
                '.(!empty($pallet_collection_form) ? '<div class="pallet-collect-form">'.$pallet_collection_form.'</div>' : '').'
            </div>
        </section>';
?>
