<?php
/**
 * Template Name: About Us
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


    <section class="our-mission-sec">
        <div class="container">
            <div class="our-mission-wrap">
                <div class="our-mission-content">
                    <h2>OUR MISSION</h2>
                    <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? Tum sum poptil hors nonstrum mum inverce ercerusque notiu quid re cae, confirtis. Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? Tum sum poptil hors nonstrum mum inverce ercerusque notiu quid re cae, confirtis.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="our-team-sec">
        <div class="our-team-wrap">
            <div class="our-team-left">
                <div class="our-team-content">
                    <h2>OUR TEAM</h2>
                    <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? Tum sum poptil hors nonstrum mum inverce ercerusque notiu quid re cae, confirtis. Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi</p>
                </div>
            </div>
            <div class="our-team-right">
                <div class="our-team-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/);"></div>
            </div>
        </div>
    </section>
    
    <section class="our-timeline-sec">
        <div class="container">
            <div class="our-timeline-wrap">
                <div class="our-timeline-heading">
                    <h2>our timeline</h2>
                </div>
                <div class="our-timeline-main">
                    <ul>
                        <li>
                            <h6>2011</h6>
                            <div class="our-timeline-hover">
                                <P>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </P>
                            </div>
                        </li>
                        <li>
                            <h6>2014</h6>
                            <div class="our-timeline-hover">
                                <P>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </P>
                            </div>
                        </li>
                        <li>
                            <h6>2015</h6>
                            <div class="our-timeline-hover">
                                <P>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </P>
                            </div>
                        </li>
                        <li>
                            <h6>2016</h6>
                            <div class="our-timeline-hover">
                                <P>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </P>
                            </div>
                        </li>
                        <li>
                            <h6>2018</h6>
                            <div class="our-timeline-hover">
                                <P>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </P>
                            </div>
                        </li>
                        <li>
                            <h6>2019</h6>
                            <div class="our-timeline-hover">
                                <P>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </P>
                            </div>
                        </li>
                        <li>
                            <h6>2021</h6>
                            <div class="our-timeline-hover">
                                <P>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </P>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


</div>


<?php get_footer(); ?>
