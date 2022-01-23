<?php
/**
 * Template Name: News
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
   
   <section class="news-sec">
       <div class="container">
           <div class="news-wrap">
               <div class="news-heading">
                   <h2>News</h2>
               </div>
               <div class="news-list-wrap">
                   <div class="news-list">
                       <div class="news-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news-article.jpg);"></div>
                       <div class="news-content">
                           <h4>NEWS ARTICLE</h4>
                           <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                           <div class="content">
                               <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                           </div>
                           <a href="javascript:;" class="show_hide" title="">Read More</a>
                       </div>
                   </div>
                   <div class="news-list">
                       <div class="news-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news-article.jpg);"></div>
                       <div class="news-content">
                           <h4>NEWS ARTICLE</h4>
                           <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                           <div class="content">
                               <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                           </div>
                           <a href="javascript:;" class="show_hide" title="">Read More</a>
                       </div>
                   </div>
                   <div class="news-list">
                       <div class="news-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news-article.jpg);"></div>
                       <div class="news-content">
                           <h4>NEWS ARTICLE</h4>
                           <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                           <div class="content">
                               <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                           </div>
                           <a href="javascript:;" class="show_hide" title="">Read More</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
    

</div>


<?php get_footer(); ?>
