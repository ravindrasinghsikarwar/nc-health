<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
			
		//get_template_part( 'page-templates/page/page', 'header' ); 
			
	?>
	<?php
	// ID of the current item in the WordPress Loop
	$id = get_the_ID();
	
	// check if the flexible content field has rows of data
	if ( have_rows( 'flexible_layouts', $id ) ) :

		// loop through the selected ACF layouts and display the matching partial
		while ( have_rows( 'flexible_layouts', $id ) ) : the_row();

			get_template_part( 'flexible-layouts/' . get_row_layout() );

		endwhile;

	endif;
	?>
</div><!-- #main .wrapper -->
<?php get_footer(); ?>
