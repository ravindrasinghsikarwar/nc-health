<?php
/**
 * Template Name: Contact US
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
   
   <section class="contact-sec">
       <div class="contact-wrap">
           <div class="contact-left">
               <div class="contact-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/contact-graphic.jpg);"></div>
           </div>
           <div class="contact-right">
               <div class="contact-content">
                   <h2>CONTACT US</h2>
                   <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica manre.</p>
                   <div class="contact-form">
                       <?php echo do_shortcode( '[contact-form-7 id="61" title="Contact us"]' ); ?>
                   </div>
                   <p>
                       <a href="#" title="">1 Lorne Avenue, Killara, NSW 2107</a>
                       <a href="tel:0280649533" title="">02 8064 9533</a>
                   </p>
               </div>
           </div>
       </div>
   </section>
    

</div>


<?php get_footer(); ?>
