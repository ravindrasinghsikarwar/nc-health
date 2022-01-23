<?php
/**
 * Template Name: Sectors
 *
 * Description: Revolution loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Revolution
 * @since Revolution 1.0
 */

get_header(); ?>

<div id="main" class="wrapper">

    <?php 
		/*======================================================
		 *       PAGE HEADER OR BANNER SECTION 
		 *====================================================== */
			
			get_template_part( 'page-templates/page/page', 'header' ); 
	?>
   
   <section class="sectors-sec">
       <div class="sectors-block">
           <div class="sectors-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/private-user-banner.jpg);"></div>
           <div class="sectors-bottom">
               <div class="sectors-left">
                   <div class="sectors-icon-list">
                       <ul>
                           <li>
                               <div class="sectors-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telehealth-icon.png" alt="">
                               </div>
                               <h6>TELEHEALTH</h6>
                           </li>
                           <li>
                               <div class="sectors-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-care-icon.png" alt="">
                               </div>
                               <h6>Home Care Service </h6>
                           </li>
                           <li>
                               <div class="sectors-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family-access-icon.png" alt="">
                               </div>
                               <h6>FAMILY ACCESS</h6>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="sectors-right">
                   <div class="sectors-content">
                       <h2>PRIVATE USER</h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac semper lacus. Vestibulum nec semper odio. Sed at diam urna. Fusce ac rhoncus orci, ut tristique eros. Donec molestie urna id elit bibendum pellentesque. Donec tempor urna sit amet tellus faucibus aliquet. Praesent sit amet augue interdum, consectetur leo a, rhoncus turpis. </p>
                   </div>
               </div>
           </div>
       </div>
       <div class="sectors-block">
           <div class="sectors-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/commercial-user-banner.jpg);"></div>
           <div class="sectors-bottom">
               <div class="sectors-left">
                   <div class="sectors-icon-list">
                       <ul>
                           <li>
                               <div class="sectors-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/strata-manager-icon.png" alt="">
                               </div>
                               <h6>STRATA MANAGER</h6>
                           </li>
                           <li>
                               <div class="sectors-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hospital-icon.png" alt="">
                               </div>
                               <h6>HOSPITAL</h6>
                           </li>
                           <li>
                               <div class="sectors-icon">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pharmacy-icon.png" alt="">
                               </div>
                               <h6>PHARMACY</h6>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="sectors-right">
                   <div class="sectors-content">
                       <h2>COMMERCIAL USER</h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac semper lacus. Vestibulum nec semper odio. Sed at diam urna. Fusce ac rhoncus orci, ut tristique eros. Donec molestie urna id elit bibendum pellentesque. Donec tempor urna sit amet tellus faucibus aliquet. Praesent sit amet augue interdum, consectetur leo a, rhoncus turpis. </p>
                   </div>
               </div>
           </div>
       </div>
   </section>
    

</div>


<?php get_footer(); ?>
