<?php
/**
 * side bar template
 *
 * @package Freelancer Portfolio
 */
?>
<?php if ( ! is_active_sidebar( 'freelancer-portfolio-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('freelancer-portfolio-woocommerce-sidebar'); ?>
	</div>
</div>