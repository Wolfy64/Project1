<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Perth
 */
?>
		</div>
	</div><!-- #content -->

    <a class="go-top"><i class="fa fa-angle-up"></i></a>


	<footer id="colophon" class="site-footer clearfix" role="contentinfo">

		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	    <div class="footer-area">
		    <div class="footer-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<?php get_sidebar('footer'); ?>
		</div>
		<?php endif; ?>

		<div class="site-info container">
			<p>Site internet fictif pour la creation d'un projet étudiant</p>

		</div><!-- .site-info -->
	</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
