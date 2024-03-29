<?php
/**
 * Part Name: Default Masthead
 */
?>
<header id="masthead" class="site-header" role="banner">
	<div class="hgroup full-container">
<div class="top-menu">
			 <?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'container_class' => 'top_menu_class' ) ); ?>
		</div>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"><?php vantage_display_logo(); ?></a><br>
		

		<?php if( is_active_sidebar('sidebar-header') ) : ?>

			<div id="header-sidebar" <?php if( siteorigin_setting('logo_no_widget_overlay') ) echo 'class="no-logo-overlay"' ?>>
				<?php
				// Display the header area sidebar, and tell mobile navigation that we can use menus in here
				add_filter('siteorigin_mobilenav_is_valid', '__return_true');
				dynamic_sidebar( 'sidebar-header' );
				remove_filter('siteorigin_mobilenav_is_valid', '__return_true');
				?>
			</div>

		<?php else : ?>

			<div class="support-text">
				<?php do_action('vantage_support_text'); ?>
			</div>

		<?php endif; ?>

	</div><!-- .hgroup.full-container -->

	<?php get_template_part( 'parts/menu', apply_filters( 'vantage_menu_type', siteorigin_setting( 'layout_menu' ) ) ); ?>

</header><!-- #masthead .site-header -->