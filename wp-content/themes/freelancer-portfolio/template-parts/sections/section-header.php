<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		// header
		$topheader_contactbtntext = esc_attr(get_theme_mod('topheader_contactbtntext','Contact us'));
		$topheader_contactbtnlink = esc_attr(get_theme_mod('topheader_contactbtnlink','#'));

		$stickyheader = esc_attr(freelancerportfolio_sticky_menu());
	?>

<div class="main">
    <header class="main-header site-header <?php echo esc_attr(freelancerportfolio_sticky_menu()); ?>">
		<div class="container">
			<div class="header-section">
				<div class="headfer-content row">

					<div class="col-lg-3 col-md-3 col-sm-10 pd-0">
						<div class="site-logo">
							<?php
							if(has_custom_logo())
								{	
									the_custom_logo();
								}
								else { 
								?>
								<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
									
									<?php 
										echo esc_html(bloginfo('name'));
									?>
								</a>	
							<?php 						
								}
							?>
						</div>

						<div class="box-info">
							<?php
								$freelancerportfolio_site_desc = get_bloginfo( 'description');
								if ($freelancerportfolio_site_desc) : ?>
									<p class="site-description"><?php echo esc_html($freelancerportfolio_site_desc); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-1 pd-0">
						<div class="menus">
							<nav class="navbar navbar-expand-lg navbaroffcanvase">
							<div class="navbar-menubar">
			                    <!-- Small Divice Menu-->
			                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','freelancer-portfolio'); ?>"> 
			                        <i class="fa fa-bars"></i>
			                    </button>
			                    <div class="collapse navbar-collapse navbar-menu">
				                    <button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','freelancer-portfolio'); ?>"> 
				                        <i class="fa fa-times"></i>
				                    </button> 
									<?php 
										wp_nav_menu( 
											array(  
												'theme_location' => 'primary_menu',
												'container'  => '',
												'container_id'    => '',
												'menu_class' => 'navbar-nav main-nav',
												'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
												'walker' => new WP_Bootstrap_Navwalker()
												 ) 
											);
									?>
									<div class="hbtn1">
										<div class="contactus">
											<a class="phn" href="<?php echo apply_filters('freelancerportfolio_header', $topheader_contactbtnlink); ?>"><?php echo apply_filters('freelancerportfolio_header', $topheader_contactbtntext); ?>
											</a>
										</div>
									</div>
			                    </div>

			                </div>

							</nav>
                        </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-1 pd-0">
						<div class="hbtn">
							<div class="contactus">
								<?php if ($topheader_contactbtntext) { ?>
									<a class="phn" href="<?php echo apply_filters('freelancerportfolio_header', $topheader_contactbtnlink); ?>"><?php echo apply_filters('freelancerportfolio_header', $topheader_contactbtntext); ?>
									</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </header>
	<div class="clearfix"></div>
</div>

