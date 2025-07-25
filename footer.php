<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	
	</section>
	
	<footer class="footer">
		<div class="footer-columns">
			<div class="narrow logo">
				<a href="/"><img src="<?php bloginfo( 'template_url' ) ?>/img/logo-white.svg" class="logo-footer" /></a>
				<div class="footer-address">
					<?php print apply_filters( 'the_content', get_field( 'footer-address', 'option' ) ); ?>
				</div>
			</div>
			<div class="wide footer-menus">
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-one" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-one', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-two" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-two', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-three" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-three', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-four" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-four', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-five" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-five', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
			</div>
		</div>
		<div class="footer-columns">
			<div class="app-icons mobile-only">
				<a href="<?php the_field( 'app-ios', 'option' ) ?>"><img src="<?php bloginfo('template_url') ?>/img/app-ios.svg" /></a>
				<a href="<?php the_field( 'app-google', 'option' ) ?>"><img src="<?php bloginfo('template_url') ?>/img/app-google.svg" /></a>
			</div>
			<div class="narrow ncua">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/icon-equal-housing.png" /> &nbsp;
				<img src="<?php bloginfo( 'template_url' ) ?>/img/icon-ncua.png" />
			</div>
			<div class="wide two">
				<div class="app-icons no-mobile">
					<a href="<?php the_field( 'app-ios', 'option' ) ?>"><img src="<?php bloginfo('template_url') ?>/img/app-ios.svg" /></a>
					<a href="<?php the_field( 'app-google', 'option' ) ?>"><img src="<?php bloginfo('template_url') ?>/img/app-google.svg" /></a>
				</div>
				<div class="social-icons">
					<?php  
					theme_social_icon( 'twitter' );
					theme_social_icon( 'facebook' );
					theme_social_icon( 'instagram' );
					theme_social_icon( 'linkedin' );
					theme_social_icon( 'youtube' );
					?>
				</div>
				<!--
				<div class="footer-aux">
					<?php // wp_nav_menu( array( 'theme_location' => 'footer-aux', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				-->
			</div>
		</div>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>

<?php print get_field( 'footer_code', 'option' ); ?>

</body>
</html>