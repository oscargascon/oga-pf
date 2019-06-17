<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Casper
 */
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
	    <a class="subscribe icon-feed" href="<?php bloginfo('rss2_url'); ?>"><span class="tooltip"><?php _e('Subscribe!', 'casper'); ?></span></a>
		<div class="site-info inner">
		    <p class="enhanced-footer">Esta es una prueba final del CPIFP Los Enlaces</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</main><!-- /#content -->

<?php wp_footer(); ?>
</body>
</html>
