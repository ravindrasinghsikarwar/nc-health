<?php
/**
 * Template Name: Home Page
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


    <section class="banner-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.jpg);">
        <div class="banner_video">
            <video id="hero-video" class="slider-video" poster="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.jpg" autoplay="" loop="" muted="" playsinline="">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/SampleVideo.mp4">
            </video>
        </div>
        <div class="container">
            <div class="banner-wrap">
                <div class="banner-text">
                    <h1><span>DRIVEN BY</span> INNOVATION.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="your-health-sec">
        <div class="container">
            <div class="your-health-wrap">
                <div class="your-health-left">
                    <div class="your-health-counter">
                        <ul>
                            <li>
                                <h5><span class="counter">200</span>+</h5>
                                <p>Interesting stat here</p>
                            </li>
                            <li>
                                <h5><span class="counter">70</span></h5>
                                <p>Interesting stat here</p>
                            </li>
                            <li>
                                <h5><span class="counter">78</span>%</h5>
                                <p>Interesting stat here</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="your-health-right">
                    <div class="your-health-content">
                        <h2>YOUR <br>HEALTH <br>VISUALISED.</h2>
                        <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? Tum sum poptil hors nonstrum mum inverce ercerusque notiu quid re cae, confirtis. </p>
                        <a href="#" title="">VIEW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-sec">
        <div class="video-wrap">
            <div class="video-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/video-bg.jpg);">
                <a href="https://www.youtube.com/watch?v=yAoLSRbwxL8" title="" class="video-icon"></a>
            </div>
        </div>
    </section>

    <section class="key-features-sec">
        <div class="container">
            <div class="key-features-wrap">
                <div class="key-features-heading">
                    <h2>key features</h2>
                </div>
                <div class="key-features-list">
                    <ul>
                        <li>
                            <div class="key-features-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-icon.png" alt="">
                            </div>
                            <div class="key-features-content">
                                <h6>USER-FRIENDLINESS</h6>
                                <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                            </div>
                        </li>
                        <li>
                            <div class="key-features-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/security-icon.png" alt="">
                            </div>
                            <div class="key-features-content">
                                <h6>SECURITY</h6>
                                <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                            </div>
                        </li>
                        <li>
                            <div class="key-features-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/safety-icon.png" alt="">
                            </div>
                            <div class="key-features-content">
                                <h6>SAFETY</h6>
                                <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-sec">
        <div class="cta-wrap">
            <div class="cta-left">
                <div class="cta-content">
                    <h2>INSERT HEADING</h2>
                    <p>Bus Cat ac oca vasdam remus et; nos actorum ius conteri sidestium intius? ilium diur. Avehem ina quo et, norimoresi con dita vica mant? </p>
                </div>
            </div>
            <div class="cta-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta-img.png" alt="">
            </div>
        </div>
    </section>


</div>


<?php get_footer(); ?>
