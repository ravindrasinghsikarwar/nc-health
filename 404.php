<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Revolution
 * @since Revolution 1.0
 */

get_header(); ?>

<div class="page-content-section">
	<div class="container">
		<div id="content">
			<div class="main-con-sec error-main">

				<div class="logo">
		                <a href="<?php echo site_url(); ?>" title="">
		                    <?php if( get_field('header_logo', 'option') ): ?><img src="<?php the_field('header_logo', 'option'); ?>" alt=""><?php endif; ?>
		                </a>
						<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) :
							?>
								<p class="site-description">
									<?php echo $description; ?>
								</p>
						<?php endif; ?>
		            </div>

				<h1 class="title-404 fadeInUp"><?php _e( '404', 'text-domain' ); ?></h1>
				
				<div class="content-404">
					<h3><?php _e( 'Page Not Found!', 'text-domain' ); ?></h3>
					<?php 
						if(!empty(options('msg_404_page'))):
							echo '<p>'.options('msg_404_page').'</p>'; 
						endif;
					?>
					<div class="orange-link">
						<a href="<?php echo site_url(); ?>" class="cta-button">Back to Home</a>
					</div>
				</div><!-- .entry-content -->
				
			</div>
		</div><!-- #content -->
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
