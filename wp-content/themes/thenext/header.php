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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( isset( $fi_print_options['preloader'] )  && $fi_print_options['preloader'] == 1 ) : ?>
		<!-- Preloader -->
		<div class="preloader">
			<?php if( isset( $fi_print_options['preloader-logo']['url'] ) && $fi_print_options['preloader-logo']['url']!='' ) : ?>
				<img src="<?php echo esc_url( $fi_print_options['preloader-logo']['url'] ); ?> "alt="logo">
			<?php endif; ?>
			<div class="spinner">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</div>
		</div>
		<!-- END Preloader -->
<?php endif ; 