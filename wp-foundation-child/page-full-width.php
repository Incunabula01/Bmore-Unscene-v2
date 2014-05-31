<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<div id="main" class="twelve columns clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h1><?php the_title(); ?></h1>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<div class="home-main twelve columns">
						
								<?php
								 $postslist = get_posts('category=event'); /*-- Adjusts number of posts on front page */
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
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but we seemed to have lost the post somewhere...</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>