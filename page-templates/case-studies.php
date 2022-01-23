<?php
/**
 * Template Name: Case Studies
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
   
   <section class="inner-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/case-studies-banner.jpg);"></section>
   
   <section class="case-studies-sec">
       <div class="container">
           <div class="case-studies-wrap">
               <div class="case-studies-heading">
                   <h2>case studies</h2>
               </div>
               <div class="case-studies-list-wrap">
                   <div class="case-studies-list">
                       <div class="case-studies-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/case-studies-one.jpg);"></div>
                       <div class="case-studies-content">
                           <h3>ENTITY NAME</h3>
                           <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                       </div>
                   </div>
                   <div class="case-studies-list">
                       <div class="case-studies-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/case-studies-two.jpg);"></div>
                       <div class="case-studies-content">
                           <h3>ENTITY NAME</h3>
                           <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                       </div>
                   </div>
                   <div class="case-studies-list">
                       <div class="case-studies-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/case-studies-three.jpg);"></div>
                       <div class="case-studies-content">
                           <h3>ENTITY NAME</h3>
                           <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   
   <section class="who-we-work-sec">
       <div class="container">
           <div class="who-we-work-wrap">
               <div class="who-we-work-heading">
                   <h2>WHO WE WORK WITH</h2>
               </div>
               <div class="who-we-work-slider">
                   <div>
                       <div class="company-logo">
                           <a href="#" title="">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-logo.png" alt="">
                           </a>
                       </div>
                   </div>
                   <div>
                       <div class="company-logo">
                           <a href="#" title="">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-logo.png" alt="">
                           </a>
                       </div>
                   </div>
                   <div>
                       <div class="company-logo">
                           <a href="#" title="">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-logo.png" alt="">
                           </a>
                       </div>
                   </div>
                   <div>
                       <div class="company-logo">
                           <a href="#" title="">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-logo.png" alt="">
                           </a>
                       </div>
                   </div>
                   <div>
                       <div class="company-logo">
                           <a href="#" title="">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-logo.png" alt="">
                           </a>
                       </div>
                   </div>
                   <div>
                       <div class="company-logo">
                           <a href="#" title="">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-logo.png" alt="">
                           </a>
                       </div>
                   </div>
                   <div>
                       <div class="company-logo">
                           <a href="#" title="">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-logo.png" alt="">
                           </a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
    

</div>


<?php get_footer(); ?>
