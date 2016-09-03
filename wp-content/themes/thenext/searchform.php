<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<!-- search overlay -->
<nav class="search-overlay text-center col-xs-12" id="search-container">
	<div class="container vc-text">
	<div id="closeSearch" class="text-center">
		<span class="icon icon-arrows-remove menu-name transition"></span>
	</div>
	<form role="search" method="get"  class="navbar-form"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="form-group">
		<input type="text" class="form-control" placeholder="<?php echo esc_attr_x( 'Enter..', 'placeholder', 'next' ); ?>"" name="s">
		</div>
		<button type="submit" class="btn-link btn-link-solid-black">
		<?php echo _x( 'search', 'submit button', 'next' ); ?>
		</button>
	</form>
	</div>
</nav>
<!-- end of search overlay -->