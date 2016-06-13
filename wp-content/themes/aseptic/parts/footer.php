<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">

	<div id="footer-widgets" class="full-container">
		<?php dynamic_sidebar( 'sidebar-footer' ) ?>
	</div><!-- #footer-widgets -->

	<?php $site_info_text = apply_filters('vantage_site_info', siteorigin_setting('general_site_info_text') ); if( !empty($site_info_text) ) : ?>
		<div id="site-info">
			<?php echo wp_kses_post($site_info_text) ?>
		</div><!-- #site-info -->
	<?php endif; ?>


	<?php echo apply_filters( 'vantage_footer_attribution', '<span id="theme-attribution">' . sprintf( __('123/456 Aseptic Pak road Aseptic 11168 Thailand  +66123456789', 'vantage')) . '</span>' ) ?>
	<?php echo apply_filters( 'vantage_footer_attribution', '<span id="theme-attribution2">' . sprintf( __('Copyright &copy; Aseptic Pak', 'vantage')) . '</span> <div style="clear:both;"></div>' ) ?> 


</footer><!-- #colophon .site-footer -->