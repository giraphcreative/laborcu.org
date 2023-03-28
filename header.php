<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CMYSX890BF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CMYSX890BF');
</script>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'sitename' ) ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>
<div class="container">
<header>

	<div class="wrap">
	
		<div class="logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php bloginfo( "template_url" ) ?>/img/logo-color.svg" alt="<?php bloginfo( 'name' ); ?>">
			</a>
		</div>

		<div class="aux">
			<div class="social-icons">
				<?php  
				theme_social_icon( 'twitter' );
				theme_social_icon( 'facebook' );
				theme_social_icon( 'instagram' );
				theme_social_icon( 'linkedin' );
				theme_social_icon( 'youtube' );
				?>
			</div>

			<div class="search">
				<?php get_search_form() ?>
			</div>

			<div class="routing">Routing #: 254074426</div>

			<div class="online-banking<?php if ( is_front_page() ) { print ' open'; } ?>">
				<a href="#" class="online-banking-button">Online Banking</a>
				<div class="online-banking-form">
					<?php print get_field( 'online_banking_form', 'option' ); ?>
				</div>
			</div>
		</div>

	</div>

	<nav>
		<button class="menu-toggle">Show/hide Menu</button>
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu' ) ); ?>
	</nav>
	
</header>

<section class="content">
	<a name="content"></a>
