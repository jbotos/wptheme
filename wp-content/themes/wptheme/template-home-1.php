<?php 
/*template name: Home - Recent Work */
get_header(); ?>
	
<?php $options = get_option('salient'); ?>

<div id="featured" data-caption-animation="<?php echo (!empty($options['slider-caption-animation']) && $options['slider-caption-animation'] == 1) ? '1' : '0'; ?>" data-bg-color="<?php if(!empty($options['slider-bg-color'])) echo $options['slider-bg-color']; ?>" data-slider-height="<?php if(!empty($options['slider-height'])) echo $options['slider-height']; ?>" data-animation-speed="<?php if(!empty($options['slider-animation-speed'])) echo $options['slider-animation-speed']; ?>" data-advance-speed="<?php if(!empty($options['slider-advance-speed'])) echo $options['slider-advance-speed']; ?>" data-autoplay="<?php echo $options['slider-autoplay'];?>"> 
	
	<?php 
	 $slides = new WP_Query( array( 'post_type' => 'home_slider', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order' ) ); 
	 if( $slides->have_posts() ) : ?>
	
		<?php while( $slides->have_posts() ) : $slides->the_post(); 
			
			$alignment = get_post_meta($post->ID, '_nectar_slide_alignment', true); 
			
			$video_embed = get_post_meta($post->ID, '_nectar_video_embed', true);
			$video_m4v = get_post_meta($post->ID, '_nectar_video_m4v', true); 
			
			?>
			
			<div class="slide orbit-slide <?php if( !empty($video_embed) || !empty($video_m4v)) { echo 'has-video'; } else { echo $alignment; } ?>">
				
				<?php $image = get_post_meta($post->ID, '_nectar_slider_image', true); ?>
				<article data-background-cover="<?php echo (!empty($options['slider-background-cover']) && $options['slider-background-cover'] == 1) ? '1' : '0'; ?>" style="background-image: url('<?php echo $image; ?>')">
					<div class="container">
						<div class="col span_12">
							<div class="post-title">
								
								<?php 
									if( !empty( $video_embed ) ) {
							             echo '<div class="video">' . stripslashes(htmlspecialchars_decode($video_embed)) . '</div>';
							        } elseif( !empty($video_m4v)) {
							        	 echo '<div class="video">'; 
							            	 nectar_video($post->ID); 
										 echo '</div>'; 
							        }
									
								?>
								
								 <?php 
								 //mobile more info button for video
								 if( !empty($video_embed) || !empty($video_m4v)) { echo '<span class="more-info"><a href="#">More Info</a></span>'; } ?>
								 
								 <?php $caption = get_post_meta($post->ID, '_nectar_slider_caption', true); ?>
								<h2 data-has-caption="<?php echo (!empty($caption)) ? '1' : '0'; ?>"><span>
				        			<?php echo $caption; ?>
								</span></h2>
								
								<?php 
									$button = get_post_meta($post->ID, '_nectar_slider_button', true);
									$button_url = get_post_meta($post->ID, '_nectar_slider_button_url', true);
									
									if(!empty($button)) { ?>
										<a href="<?php echo $button_url; ?>" class="uppercase"><?php echo $button; ?></a>
								 <?php } ?>
								 

							</div><!--/post-title-->
						</div>
					</div>
				</article>
			</div>
		<?php endwhile; ?>
		<?php else: ?>


	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>

<div class="home-wrap">

	<div class="container">
		
		<div class="row">
	
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<?php the_content(); ?>
	
			<?php endwhile; endif; ?>
				
		</div><!--/row-->
		
		
			<?php $portfolio_link = get_portfolio_page_link(get_the_ID());  
	
				$portfolio = array(
					'posts_per_page' => '6',
					'post_type' => 'portfolio'
				);
				query_posts($portfolio); ?>
				
				
				<?php if(have_posts()) { ?>
					
					<div class="carousel-heading">
						<h2 class="uppercase"><?php echo (!empty($options['carousel-title'])) ? $options['carousel-title'] :'Recent Work'; ?><a href="<?php echo $portfolio_link; ?>" class="button"> / <?php echo (!empty($options['carousel-link'])) ? $options['carousel-link'] :'View all work'; ?></a></h2>
						<a class="carousel-prev" href="#"></a>
				    	<a class="carousel-next" href="#"></a>
					</div>
		
					<div class="carousel-wrap recent-work-carousel">
				
					<span class="left-border"></span>
					<span class="right-border"></span>
					
					<ul class="row portfolio-items text-align-center carousel" data-scroll-speed="800" data-easing="easeInOutQuart">
				<?php } ?>
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
					
				<li class="col span_4">
					
					<div class="work-item">
						<?php
						//custom thumbnail
						$custom_thumbnail = get_post_meta($post->ID, '_nectar_portfolio_custom_thumbnail', true); 
						
						if( !empty($custom_thumbnail) ){
							echo '<img class="custom-thumbnail" src="'.$custom_thumbnail.'" alt="'. get_the_title() .'" />';
						}
						else {
							
							if ( has_post_thumbnail() ) {
								 echo get_the_post_thumbnail($post->ID, 'portfolio-thumb', array('title' => '')); 
							} 
							//no image added
							else {
								 echo '<img src="'.get_template_directory_uri().'/img/no-portfolio-item-small.jpg" alt="no image added yet." />';
							 } 
						 } ?>
						
						<div class="work-info-bg"></div>
						<div class="work-info">
							
							<div class="vert-center">

							<?php 
							
							$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );  
							$video_embed = get_post_meta($post->ID, '_nectar_video_embed', true);
							$video_m4v = get_post_meta($post->ID, '_nectar_video_m4v', true);
						
							//video 
						    if( !empty($video_embed) || !empty($video_m4v) ) {

							    if( !empty( $video_embed ) ) {
							    	
							    	echo '<a href="#video-popup-'.$post->ID.'" class="pp">'.__("Watch Video", NECTAR_THEME_NAME).' </a> ';
									echo '<div id="video-popup-'.$post->ID.'">';
							        echo '<div class="video-wrap">' . stripslashes(htmlspecialchars_decode($video_embed)) . '</div>';
									echo '</div>';
							    } 
							    
							    else {
									 echo '<a href="'.get_template_directory_uri(). '/includes/portfolio-functions/video.php?post-id=' .$post->ID.'&iframe=true&width=854" class="pp" >'.__("Watch Video", NECTAR_THEME_NAME).'</a> ';	 
							     }
	
					        } 
							
							//image
						    else {
						       echo '<a href="'. $featured_image[0].'" class="pp">'.__("View Larger", NECTAR_THEME_NAME).'</a> ';
						    }
	
							 echo '<a href="' . get_permalink() . '">'.__("More Details", NECTAR_THEME_NAME).'</a>'; ?>
								
								
							</div><!--/vert-center-->
							
						</div>
					</div><!--work-item-->
					
					<div class="work-meta">
						<h4 class="title"><?php the_title(); ?></h4>
						<?php $options = get_option('salient'); 
							if(!empty($options['portfolio_date']) && $options['portfolio_date'] == 1) the_time('F d, Y');
						?>
					</div>
					<div class="nectar-love-wrap">
						<?php if( function_exists('nectar_love') ) nectar_love(); ?>
					</div><!--/nectar-love-wrap-->	
					
					<div class="clear"></div>
					
				</li><!--/span_4-->
				
				<?php endwhile; endif; ?>
				
			
			<?php if(have_posts()) { ?>
			</ul><!--/carousel-->
			
			</div><!--/carousel-wrap-->
			<?php } ?>
	

	</div><!--/container-->

</div><!--/home-wrap-->
	
<?php get_footer(); ?>