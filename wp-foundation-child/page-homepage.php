<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="main" class="twelve columns" role="main">
					
					<article role="article">
					
						<?php

						$orbit_slider = of_get_option('orbit_slider');
						if ($orbit_slider){

						?>
						
						<header>
						
							<div id="featured">

								<?php
									global $post;
									$tmp_post = $post;
									$args = array( 'numberposts' => 6 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ) :	setup_postdata($post); 
										$post_thumbnail_id = get_post_thumbnail_id($post_id);
										$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpf-home-featured' );
								?>
								
								<div style="background-size:cover; background-image: url(<?php echo $featured_src[0]; ?>);">
										<span class="caption-container">
											<h3><?php the_title(); ?></h3>
												<p><?php echo excerpt(30); ?></p>
											<p><a href="<?php the_permalink(); ?>" class="button">Read more »</a></p>
										</span>
								</div>
								
								<?php endforeach; ?>
								<?php $post = $tmp_post; ?>

							</div>
							
						</header>

						<script type="text/javascript">
						   $(window).load(function() {
						       		$('#featured').orbit({ 
						       		fluid: '16x6'
						       });
						   });
						</script>

						<?php } ?>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<section class="row post_content">
						
							<div class="home-main twelve columns">
						
								<?php
								 $postslist = get_posts('numberposts=6'); /*-- Adjusts number of posts on front page */
								 foreach ($postslist as $post) :
								    setup_postdata($post);
								 ?>
									<div class="post-image six columns">
										<a href="<?php the_permalink();?>">  
											<?php /*--Article Thumbnails--*/
   												if (is_mobile()) {      
   													the_post_thumbnail('bones-thumb-640');
   												} else {
   													the_post_thumbnail('wpf-featured');
   												}
											?>
										</a>
										<div class="post">
											<h2>
												<?php the_title(); ?>
											</h2>
												<?php echo content(45) ?>
											<p><a href="<?php the_permalink(); ?>" class="button right">Read more »</a></p>
										</div>
									</div>
								<?php endforeach ?>
								
							</div>
								
							
													
						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
    
			</div> <!-- end #content -->

<?php get_footer(); ?>