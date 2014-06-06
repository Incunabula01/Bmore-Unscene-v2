<?php
/*
Template Name: Archive Page
*/
?>

<?php
	if ( is_page() ) :
		get_header( 'page' );
	else :
		get_header();
	endif;
?>
			
			<div id="content" class="clearfix">
            
			
				<div id="main" class="twelve columns clearfix" role="main">

					<div class="wrapper">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
							<header>
								
								<h1><?php the_title(); ?></h1>
							
							</header> <!-- end article header -->
						
							<section class="post_content">
								<?php 
									$args = array(
    									'post_type' => 'attachment',
    									'post_status' => 'published',
									    'posts_per_page' =>25,
									    'post_parent' => 210, // Post-> ID;
									    'numberposts' => null,
										);

									$attachments = get_posts($args);

									$post_count = count ($attachments);

									if ($attachments) {
									    foreach ($attachments as $attachment) {
									    echo "<div class=\"post photo col3\">";
									        $url = get_attachment_link($attachment->ID);// extraigo la _posturl del attachmnet      
									        $img = wp_get_attachment_url($attachment->ID);
									        $title = get_the_title($attachment->post_parent);//extraigo titulo
									        echo '<a href="'.$url.'"><img title="'.$title.'" src="'.get_bloginfo('template_url').'/timthumb.php?src='.$img.'&w=350&h=500&zc=3"></a>';
									        echo "</div>";
									    }   
									}
								?>
								<?php the_content(); ?>
						
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
						    	<p>Sorry, but these are not the posts you are looking for...</p>
						    </section>
						    <footer>
						    </footer>
						</article>
						
						<?php endif; ?>
					</div>
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>