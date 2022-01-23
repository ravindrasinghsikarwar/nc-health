<?php
// ID of the current item in the WordPress Loop
if(is_home()):
    $pID = get_option( 'page_for_posts' );
else:
    $pID = get_the_ID();
endif;
// check if the flexible content field has rows of data
if ( have_rows( 'flexible_layout', $pID ) ) :
    // loop through the selected ACF layouts and display the matching partial
    while ( have_rows( 'flexible_layout', $pID ) ) : the_row();
        get_template_part( 'flexible-layout/flexible-sections/' . get_row_layout() );
    endwhile;
elseif ( get_the_content() ) :
    // no layouts found
    if(have_posts()):
        while (have_posts()) : the_post();/* Start loop */ 
            the_content(); 
        endwhile; /* End loop */
    endif;
endif;
?>