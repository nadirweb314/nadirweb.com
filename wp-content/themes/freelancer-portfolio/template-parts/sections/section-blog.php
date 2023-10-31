<?php  
	$freelancerportfolio_hs_blog 			= esc_attr(get_theme_mod('hs_blog','1'));
	$freelancerportfolio_blog_title 		= esc_attr(get_theme_mod('blog_title'));
	$freelancerportfolio_blog_subtitle		= esc_attr(get_theme_mod('blog_subtitle')); 
	$freelancerportfolio_blog_description	= esc_attr(get_theme_mod('blog_description'));
	$freelancerportfolio_blog_num			= esc_attr(get_theme_mod('blog_display_num','3'));
	if($freelancerportfolio_hs_blog=='1'):
?>

<section id="blog-section" class="blog-area home-blog">

	<div class="<?php if(esc_attr(get_theme_mod('freelancer_portfolio_blog_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('freelancer_portfolio_blog_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">

	<!-- <div class="container"> -->

		<div class="row justify-content-center text-center">
			<div class="header-section">
					<h3 class="section-title"><?php echo esc_html(get_theme_mod('blog_heading')); ?>
					</h3>

					<div class="clearfix"></div>
			</div>
		</div>

		<?php if(!empty($freelancerportfolio_blog_title) || !empty($freelancerportfolio_blog_subtitle) || !empty($freelancerportfolio_blog_description)): ?>
			<div class="title">
				<?php if(!empty($freelancerportfolio_blog_title)): ?>
					<h6><?php echo wp_kses_post($freelancerportfolio_blog_title); ?></h6>
				<?php endif; ?>
				
				<?php if(!empty($freelancerportfolio_blog_subtitle)): ?>
					<h2><?php echo wp_kses_post($freelancerportfolio_blog_subtitle); ?></h2>
					<span class="shap"></span>
				<?php endif; ?>
				
				<?php if(!empty($freelancerportfolio_blog_description)): ?>
					<p><?php echo wp_kses_post($freelancerportfolio_blog_description); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?> 


		<div class="row">
			<?php 	
				$freelancerportfolio_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $freelancerportfolio_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$freelancerportfolio_blog_wp_query = new WP_Query($freelancerportfolio_blogs_args);
				if($freelancerportfolio_blog_wp_query)
				{	
				while($freelancerportfolio_blog_wp_query->have_posts()):$freelancerportfolio_blog_wp_query->the_post(); ?>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="blogbx">
						<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'); ?>>	
							<!-- <div class="date-oly"></div> -->
							<li class="date"><?php echo get_the_date( 'M' ); ?>  </li>
							<li class="month"><?php echo get_the_date( 'j' ); ?> <?php echo get_the_date( 'Y' ); ?></li>
						</div>
							
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							
							<div class="blog-image">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<img class="blog-img" src="<?php echo esc_url($image[0]); ?>">
									<div class="b-img"></div>
								</a>
								<div class="admin-cat-box">
									<a href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-commenting"></i>  <?php echo esc_html(get_comments_number($post->ID)); ?>  <?php esc_html_e(' Comments	','freelancer-portfolio'); ?></a>
								</div>
							</div>
								
							
							<?php else: 
								$img = get_template_directory_uri().'/assets/images/default.png';
								?>
								
								<div class="blog-image" >
									<a href="<?php echo esc_url( get_permalink() ); ?>">
										<img class="blog-img" src="<?php echo $img; ?>">
										<div class="b-img"></div>
									</a>
									<div class="admin-cat-box">
										<a href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-commenting"></i> <?php echo esc_html(get_comments_number($post->ID)); ?> <?php esc_html_e(' Comments	','freelancer-portfolio'); ?></a>
									</div>
								</div>
									
								
							<?php endif; ?>
							<div class="clearfix"></div>
							<div class="blog-content">
								
								<?php 
									if ( is_single() ) :
										
									the_title('<h6 class="post-title">', '</h6>' );
									
									else:
									
									the_title( sprintf( '<h6 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' );
									
									endif; 
									?> 
									<p>
								 		<?php echo wp_trim_words(get_the_content(), 35);	?>
								 	</p>
									
								
								<a class="btn_blog" href="<?php echo esc_url( get_permalink() ); ?>">
									<?php esc_html_e( 'View More', 'freelancer-portfolio' ); ?>
								</a>
								<div class="clearfix"></div>
							</div>
						<div class="clearfix"></div>
					</div>
				</div>

			<?php endwhile; 
				}
				wp_reset_postdata();
			?>
		</div>

	</div>

</section>
<?php endif; ?>