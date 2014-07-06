<?php
	if ( is_archive() ) :
		get_header( 'page' );
	else :
		get_header();
	endif;
?>
			
			<div id="content" class="clearfix">
			
				<div class="wrapper">
					<div id="main" class="nine columns clearfix" role="main">
							</br>
							<?php if (is_category()) { ?>
								<h2 class="archive_title h2">
									<span><?php _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
								</h2>
							<?php } elseif (is_tag()) { ?> 
								<h2 class="archive_title h2">
									<span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
								</h2>
							<?php } elseif (is_author()) { ?>
								<h2 class="archive_title h2">
									<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php get_the_author_meta('display_name'); ?>
								</h2>
							<?php } elseif (is_day()) { ?>
								<h2 class="archive_title h2">
									<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
								</h2>
							<?php } elseif (is_month()) { ?>
							    <h2 class="archive_title h2">
							    	<span><?php _e("Monthly Archives:", "bonestheme"); ?>:</span> <?php the_time('F Y'); ?>
							    </h2>
							<?php } elseif (is_year()) { ?>
							    <h2 class="archive_title h2">
							    	<span><?php _e("Yearly Archives:", "bonestheme"); ?>:</span> <?php the_time('Y'); ?>
							    </h2>
							<?php } ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
								
								<header>
									<br>
									<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									
									<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
								
								</header> <!-- end article header -->
							
								<section class="post_content">
								
									<?php the_post_thumbnail( 'wpf-gallery' ); ?>
								
									<?php the_excerpt(); ?>
							
								</section> <!-- end article section -->
								
								<footer>
									
								</footer> <!-- end article footer -->
							
							</article> <!-- end article -->
							
							<?php endwhile; ?>	

						
						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
							
							<?php page_navi(); // use the page navi function ?>

						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
									<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
								</ul>
							</nav>
						<?php } ?>
									
						
						<?php else : ?>
							<br>
							<article id="post-not-found">
							    <header>
							    	<h2><?php _e("No Posts Yet", "bonestheme"); ?></h2>
							    </header>
							    <section class="post_content">
							    	<p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
							    </section>
							    <footer>
							    </footer>
							</article>

						<?php endif; ?>
				
					</div> <!-- end #main -->
    
					<?php get_sidebar('footer-sidebar-1'); // sidebar 1 ?>
    			</div>

			</div> <!-- end #content -->

<?php get_footer(); ?>