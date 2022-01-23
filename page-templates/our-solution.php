<?php
/**
 * Template Name: Our Solutions
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
   
   <section class="our-solution-sec">
       <div class="container">
           <div class="our-solution-wrap">
               <div class="our-solution-content">
                   <h2>our solution</h2>
                   <ul>
                       <li>
                           <div class="our-solution-icon">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fall-detection-icon.png" alt="">
                           </div>
                           <div class="our-solution-text">
                               <h5>Fall <br>Detection</h5>
                           </div>
                       </li>
                       <li>
                           <div class="our-solution-icon">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vital-signs-icon.png" alt="">
                           </div>
                           <div class="our-solution-text">
                               <h5>Vital Signs <br>Monitoring</h5>
                           </div>
                       </li>
                       <li>
                           <div class="our-solution-icon">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/software-icon.png" alt="">
                           </div>
                           <div class="our-solution-text">
                               <h5>Software <br>Platform</h5>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </section>
   
   <section class="zigzag-sec">
       <div class="container">
           <div class="zigzag-wrap">
               <div class="zigzag-block">
                   <div class="zigzag-left">
                       <div class="zigzag-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/fall-detection-img.jpg);"></div>
                   </div>
                   <div class="zigzag-right">
                       <div class="zigzag-content">
                           <h3>FALL DETECTION</h3>
                           <p>Radar based non-contact long term fall detection, floor plan, installed in the celling (invisible), status of each room (vacant/occupied/fall detected), present detection (security/emergency), notification, high accuracy, low radiation, range; residential/hospital/nursing home.</p>
                       </div>
                   </div>
               </div>
               <div class="zigzag-block">
                   <div class="zigzag-left">
                       <div class="zigzag-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/vital-signs-img.jpg);"></div>
                   </div>
                   <div class="zigzag-right">
                       <div class="zigzag-content">
                           <h3>Vital Signs Monitoring</h3>
                           <p>Radar based non-contact long term respiration/heart rate monitoring, real time data display, monitoring environment (anywhere, no movement, range), benefit (find disease risk, long term record), notification, high accuracy, low radiation; residential/hospital/nursing home/…, contact device to detect ECG, Blood pressure, Blood glucose, Blood oxygen, Blood fat, Body fat, Weight, Body temperature etc, data to be recorded and evaluated.</p>
                       </div>
                   </div>
               </div>
               <div class="zigzag-block">
                   <div class="zigzag-left">
                       <div class="zigzag-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/software-img.jpg);"></div>
                   </div>
                   <div class="zigzag-right">
                       <div class="zigzag-content">
                           <h3>Software <br>Platform</h3>
                           <p>Look after yourself/your family/the community, advanced AI algorithm, cloud based computing, big data analysis, brief intro of Solution, link to Solution <br>Private User: Android/IOS/Website; Business User: Website</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
    

</div>


<?php get_footer(); ?>
