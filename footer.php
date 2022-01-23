<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Revolution
 * @since Revolution 1.0
 */
?>
	
	<footer id="colophon" role="contentinfo" class="footer-main">
        <div class="footer-wrap">
            <div class="footer-content">
                <p><?php if( get_field('copyright_text', 'option') ): ?><?php the_field('copyright_text', 'option'); ?> &#124;<?php endif;?> <?php if( get_field('privacy_menu_text', 'option') ): ?><a href="<?php the_field('privacy_policy_url', 'option'); ?>" title="<?php the_field('privacy_menu_text', 'option'); ?>" target="_blank"><?php the_field('privacy_menu_text', 'option'); ?></a> &#124;<?php endif; ?> <?php if( get_field('disclaimer_menu_text', 'option') ): ?><a href="<?php the_field('disclaimer_url', 'option'); ?>" title="<?php the_field('disclaimer_menu_text', 'option'); ?>" target="_blank"><?php the_field('disclaimer_menu_text', 'option'); ?></a><?php endif; ?> <?php if( get_field('website_by_text', 'option') ): ?>&#124; <span>Brand & Website by <a href="<?php the_field('website_by_link', 'option'); ?>" target="_blank"><?php the_field('website_by_text', 'option'); endif; ?></span></p>
                <?php if( get_field('contact_menu_text', 'option') ): ?><a href="<?php the_field('contact_url', 'option'); ?>" title="<?php the_field('contact_menu_text', 'option'); ?>" target="_blank"><?php the_field('contact_menu_text', 'option'); ?></a><?php endif; ?>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php if(options('scroll_to_top_link') == '1'):?>
	<div id="top" onclick="toTop();"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>