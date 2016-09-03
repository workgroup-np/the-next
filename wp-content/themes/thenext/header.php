<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thenext
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
<?php wp_head(); ?>
</head>
<?php global $next_options;?>
<body <?php body_class(); ?>>

<?php if ( isset( $next_options['preloader'] )  && $next_options['preloader'] == 1 ) : ?>
		 <!-- page loader -->
	<div id="loader-container">
	  <div class="clear-loading loading-effect-3">
	      <div><span></span></div>
	  </div>
	</div>
<?php endif ; ?>
<header id="section-header" class="navbar-fixed-top transition page-header page-header-semi-transparent">
	<section class="container">
		<div class="navbar-header">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if($next_options['logo']['url']!=""):?>
	                <img src="<?php echo esc_url($next_options['logo']['url']);?>" data-at2x="<?php echo esc_url($next_options['retina']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo">
	            <?php else:?>
	                <?php bloginfo( 'name' ); ?>
	            <?php endif;?>
			</a>
			<button id="openMenuMobile" class="menu-icon icon-left" data-toggle="collapse" data-target=".navHeaderCollapse">
			      <span class="icon icon-arrows-hamburger1 transition"></span>
			</button>
		</div>
			<!-- Collect the nav links for toggling -->
	    <nav class="collapse navbar-collapse navHeaderCollapse">
			<?php
	            wp_nav_menu( array(
	            'theme_location'    => 'primary',
	            'container'         => '',
	            'container_class'   => '',
	            'container_id'      => 'bs-example-navbar-collapse-1',
	            'menu_class'        => 'nav navbar-nav navbar-right transition',
	            'fallback_cb'       => 'next_bootstrap_navwalker::fallback',
	            'walker'            => new next_bootstrap_navwalker())
	            );
	        ?>      
			<!-- end of mega menu -->		
	    </nav><!-- /.navbar-collapse -->
    </section>
</header>
<?php get_search_form();?>
<!-- BODY SECTION -->
<section id="section-body">
<?php get_template_part('partials/header'); ?>
