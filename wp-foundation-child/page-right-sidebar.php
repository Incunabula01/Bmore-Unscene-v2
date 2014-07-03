<?php
/*
Template Name: Right Sidebar Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix">
            
			
				<div id="main" class="eight columns clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h1><?php the_title(); ?></h1>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<div class="home-main twelve columns">
						
								<?php
								 $postslist = get_posts('category=#art,photography,illustration,events,literature'); /*-- Adjusts number of posts on front page */
								 foreach ($postslist as $post) :
								    setup_postdata($post);
								 ?>
									<div class="post-image twelve columns">
										<a href="<?php the_permalink();?>">  
											<?php /*--Article Thumbnails--*/
   												if (is_mobile()) {      
   													the_post_thumbnail('bones-thumb-640');
   												} else {
   													the_post_thumbnail('wpf-featured');
   												}
											?>
										</a>
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
					    	<p>Sorry, but these are not the posts you are looking for</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->

			<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>