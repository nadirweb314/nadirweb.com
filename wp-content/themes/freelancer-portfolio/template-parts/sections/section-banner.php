<section id="banner-section" class="banners-area home-banners">
	<div class="container"> 
		<div class="row banner-top">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="banner-tpbx">
				<h3><?php echo esc_html(get_theme_mod('banner_heading')); ?>
			</h3>
				<h4><?php echo esc_html(get_theme_mod('banner_subheading')); ?></h4>
				<p><?php echo esc_html(get_theme_mod('banner_description')); ?></p>
				<div class="banner-contact">
					<div class="banner-phn">
						<i class="fa fa-phone"></i>
						<span><?php esc_html_e( 'Phone :' , 'freelancer-portfolio' ); ?></span> 
						<a class="phn" href="tel:<?php echo esc_html(get_theme_mod('banner_phonno')); ?>"><?php echo esc_html(get_theme_mod('banner_phonno')); ?></a>
					</div>

					<div class="banner-email">
						<i class="fa fa-envelope"></i>
						<span><?php esc_html_e( 'Email :' , 'freelancer-portfolio' ); ?></span> 
						<a class="mail" href="mailto:<?php echo esc_html(get_theme_mod('banner_email')); ?>"><?php echo esc_html(get_theme_mod('banner_email')); ?></a>
					</div>

					<div class="banner-address">
						<i class="fa fa-map-marker"></i>
						<span><?php esc_html_e( 'Address :' , 'freelancer-portfolio' ); ?></span> 
						<p><?php echo esc_html(get_theme_mod('banner_address')); ?></p>
					</div>

					<div class="banner-icons">
						<a class="fb" href="<?php echo esc_html(get_theme_mod('banner_fblink')); ?>">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
						<a class="fb" href="<?php echo esc_html(get_theme_mod('banner_instalink')); ?>">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
						<a class="fb" href="<?php echo esc_html(get_theme_mod('banner_twitterlink')); ?>">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
						<a class="fb" href="<?php echo esc_html(get_theme_mod('banner_pinterestlink')); ?>">
							<i class="fa fa-pinterest-p" aria-hidden="true"></i>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>

			</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 imgsec">
				<div class="bannerimg">
					<div class="imgcir"></div>
				<?php 
	            	$banner_image = get_theme_mod('banner_profile_image');
	            	if(!empty($banner_image)){
	              echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($banner_image).'" class="img-responsive secondry-bg-img" />';
	            	}else{
	              echo '<img alt="banner" src="'.get_template_directory_uri().'/assets/images/default.png"  />';
	            	} 
	        	?>
	        	</div>
				<div class="bannerimgtitle">
					<h5><?php echo esc_html(get_theme_mod('banner_profilename')); ?></h5>
				</div>
				<div class="imgbg">
					
				</div>
				<div class="imggreenbx">
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row banner-bottom">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h4><?php echo esc_html(get_theme_mod('banner_bottombannertextleft')); ?></h4>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<p><?php echo esc_html(get_theme_mod('banner_bannerbottomtextright')); ?>
			</p>
			</div>
		</div>
	</div>
</section>
