		<div class="twelve columns">
			<footer id="site-footer" role="contentinfo">
						<div class="row">
							<div class="wrapper">
								<div class="mobile-footer">
									<a href="#top"><i class="icon-caret-up icon-3x"><h5>Return to top</h5></i></a>
									<ul class="mobile-social-media-icons">
											<li>
												<a href="#"><i class="icon-facebook-sign icon-4x"></i></a>
											</li>
											<li>
												<a href="#"><i class="icon-twitter icon-4x"></i></a>
											</li>
											<li>
												<a href="#"><i class="icon-instagram icon-4x"></i></a>
											</li>
										</ul>
										<br/>
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar-1') ) : ?><?php endif; ?>
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar-2') ) : ?><?php endif; ?>
								</div>		
								<nav class="twelve columns clearfix hide-for-small">
									<div class="four columns">
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar-1') ) : ?><?php endif; ?>
									</div>
									<div class="four columns">
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar-2') ) : ?><?php endif; ?>
									</div>
									<div class="four columns">
										<div class="footer-menu">
											<h4 class="widgettitle"> Follow Us</h4>
											<ul class="social-media-icons">
												<li>
													<a href="#"><i class="icon-facebook-sign icon-3x"></i></a>
												</li>
												<li>
													<a href="#"><i class="icon-twitter icon-3x"></i></a>
												</li>
												<li>
													<a href="#"><i class="icon-instagram icon-3x"></i></a>
												</li>
											</ul>
											<p class="attribution">
												Designed by Joe Widener using
												<a href="http://320press.com">320press</a>
											</p>
										</div>
									</div>
								</nav>
							</div>
						</div>
					
			</footer> <!-- end footer -->
		</div>
		
	</div> <!-- end #container -->
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script text-javascript>
				var $container = $('#gallery-1');
				$container.imagesLoaded( function() {
   			 		$container.masonry({ 
   			 			columnWidth: '.gallery-item',
   			 			isFitWidth: true
   			 		 });
   			 	});
		</script>
		<script text-javascript>
			var s = skrollr.init();
		</script>

	</body>

</html>