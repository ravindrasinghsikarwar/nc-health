<?php 
    $contact_form = get_sub_field('contact_form');
    $content = get_sub_field('content');
    echo '<section class="contact-from">
            <div class="container">
                '.(!empty($content) ? '<strong>'.$content.'</strong>' : '').'
                '.(!empty($contact_form) ? '<div class="contact-from-inner">'.$contact_form.'</div>' : '').'
            </div>
        </section>';
?>