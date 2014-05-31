<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<div id="main" class="nine columns" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header class="page-header">
						
							<?php
   								if (is_mobile()) {
   									the_post_thumbnail('wpf-featured');
   								} else {
   									the_post_thumbnail('wpf-home-featured');
   								}
							?>
							
							<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
							
							<p class="meta">
								<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
									<?php the_time('F jS, Y'); ?>
								</time> 
									<?php _e("by"); ?>
									<?php the_author_posts_link(); ?>
							</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content nine columns">
							<?php the_content(); ?>
							
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ' ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
						
						<?php comments_template('bones_comments'); ?>

					</article> <!-- end article -->
										
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Oops...</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but these aren't the posts your looking for.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>