<?php
function freelancerportfolio_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'freelancerportfolio_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'freelancerportfolio_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'freelancerportfolio_custom_header_setup' );

if ( ! function_exists( 'freelancerportfolio_header_style' ) ) :

function freelancerportfolio_header_style() {
	$header_text_color = get_header_textcolor();


	$topheader_logowidth = get_theme_mod('topheader_logowidth','100');
	$topheader_logoheight = get_theme_mod('topheader_logoheight','70');

  	$service_disable_section = esc_attr(get_theme_mod('service_disable_section','YES'));
  	$blog_disable_section = esc_attr(get_theme_mod('blog_disable_section','YES'));


	?>
	<style type="text/css">


		<?php 
		
		?>

		.custom-logo {
			width: <?php echo apply_filters('freelancerportfolio_topheader', $topheader_logowidth); ?>px;
			height: <?php echo apply_filters('freelancerportfolio_topheader', $topheader_logoheight); ?>px;
		}

		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;

		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		


		
	
	
		.main-header .navbar .navbar-menu ul li a {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown>a::after {
			color: <?php echo esc_attr(get_theme_mod('header_menusarrowcolor')); ?>;
		}

		.main-header .navbar .navbar-nav > li:hover a, .main-header .navbar .navbar-nav > li.focus a, .main-header .navbar .navbar-nav > li.active a, .main-header .navbar .navbar-nav > li a.active {
			color: <?php echo esc_attr(get_theme_mod('header_menushovercolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
			border-left-color: <?php echo esc_attr(get_theme_mod('header_submenusbordercolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu li:hover a {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbghovercolor')); ?> !important;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu li:hover a {
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?> !important;
		}
	

		header .contactus a.phn {
		    background: linear-gradient(0deg,<?php echo esc_attr(get_theme_mod('header_btnbgcol1')); ?> 0%,<?php echo esc_attr(get_theme_mod('header_btnbgcol2')); ?> 100%);
		}

		header .contactus a.phn {
			color: <?php echo esc_attr(get_theme_mod('header_buttontext')); ?>;
		}

		header .contactus a.phn:hover {
			color: <?php echo esc_attr(get_theme_mod('header_buttontexthover')); ?>;
		}

		@media (max-width: 991px) {
			.main-header {
				background: <?php echo esc_attr(get_theme_mod('header_mobileviewbg')); ?>;
			}
		}

		.main-header .navbar .navbar-toggler {
			color: <?php echo esc_attr(get_theme_mod('header_mobileviewtoggle')); ?>;
			border-color: <?php echo esc_attr(get_theme_mod('header_mobileviewtoggle')); ?>;
		}

		.main-header .navbar .navbar-toggler:hover, .main-header .navbar .navbar-toggler:focus {
			color: <?php echo esc_attr(get_theme_mod('header_mobileviewtogglehover')); ?>;
		}

		.main-header .navbar .navbar-menu ul li {
			background-image: radial-gradient( circle farthest-corner at 10% 20%,<?php echo esc_attr(get_theme_mod('header_mobileviewmenubg')); ?> 0%,<?php echo esc_attr(get_theme_mod('header_mobileviewmenubg')); ?> 100.3% ) !important;
		}





		#service-section h3.section-title {
			color: <?php echo esc_attr(get_theme_mod('service_headingcolor')); ?>;
		}


		#service-section .single-service h3 {
			color: <?php echo esc_attr(get_theme_mod('service_boxtitlecolorcolor')); ?>;
		}

		#service-section .single-service p, #service-section .single-service .description {
			color: <?php echo esc_attr(get_theme_mod('service_boxdescriptioncolorcolor')); ?>;
		}

		#service-section .serbtn a {
			background: <?php echo esc_attr(get_theme_mod('service_buttonbgcolor')); ?>;
		}

		#service-section .serbtn a {
			color: <?php echo esc_attr(get_theme_mod('service_buttontextcolor')); ?>;
		}

		#service-section .serbtn a:hover {
			background: <?php echo esc_attr(get_theme_mod('service_buttonbghovercolor')); ?>;
		}

		#service-section .part-2 {
			background: <?php echo esc_attr(get_theme_mod('service_boxbgcolor')); ?>;
		}


		#service-section {
			padding-top: <?php echo esc_attr(get_theme_mod('freelancer_portfolio_service_top_padding')); ?>em !important;
		}

		#service-section {
			padding-bottom: <?php echo esc_attr(get_theme_mod('freelancer_portfolio_service_bottom_padding')); ?>em !important;
		}




		#blog-section h3.section-title {
			color: <?php echo esc_attr(get_theme_mod('blog_headingcolor')); ?>;
		}


		.blogbx .blog-content h6.post-title, .blogbx .blog-content h6.post-title a, .blogbx .blog-content .heding {
			color: <?php echo esc_attr(get_theme_mod('blog_titlecolor')); ?>;
		}

		.blogbx .blog-content p {
			color: <?php echo esc_attr(get_theme_mod('blog_descriptioncolor')); ?>;
		}

		.blogbx .blog-content a.btn_blog {
			color: <?php echo esc_attr(get_theme_mod('blog_buttontextcolor')); ?>;
		}

		.blogbx .blog-content a.btn_blog {
		    background: linear-gradient(0deg,<?php echo esc_attr(get_theme_mod('blog_buttonbgcolor')); ?> 0%,<?php echo esc_attr(get_theme_mod('blog_buttonbgcolor')); ?> 100%);
		}

		.blogbx .admin-cat-box a,.blogbx .admin-cat-box i,.blog-area .blogbx li.date {
			color: <?php echo esc_attr(get_theme_mod('blog_authorandcategorycolor')); ?>;
		}

		.blogbx .admin-cat-box,.blog-area .blogbx .blog-item {
			background: <?php echo esc_attr(get_theme_mod('blog_authorandcategorybgcolor')); ?>;
		}

		#blog-section {
			padding-top: <?php echo esc_attr(get_theme_mod('freelancer_portfolio_blog_top_padding')); ?>em !important;
		}

		#blog-section {
			padding-bottom: <?php echo esc_attr(get_theme_mod('freelancer_portfolio_blog_bottom_padding')); ?>em !important;
		}




		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.copy-right {
			background: <?php echo esc_attr(get_theme_mod('footer_copyrightbgcolor')); ?>;
		}

		.footer-area {
			background: <?php echo esc_attr(get_theme_mod('footer_bgcolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area li:before, .page-template-home-template .footer-area li:before, .page .footer-area li:before, .single .footer-area li:before {
			color: <?php echo esc_attr(get_theme_mod('footer_iconcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		.scroll-top {
			color: <?php echo esc_attr(get_theme_mod('footer_scrolltotopiconcolor')); ?>;
		}

		.scroll-top {
			background: <?php echo esc_attr(get_theme_mod('footer_scrolltotopbgcolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>



	<?php
        if ($service_disable_section == 1):
	?>
		#service-section {
			display: none;
		}
	<?php
		else :
	?>
		#service-section {
			display: block;
		}
	<?php endif; ?>

	<?php
        if ($blog_disable_section == 1):
	?>
		#blog-section {
			display: none;
		}
	<?php
		else :
	?>
		#blog-section {
			display: block;
		}
	<?php endif; ?>



	</style>
	<?php
}
endif;
