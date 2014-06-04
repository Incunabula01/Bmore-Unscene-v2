				<div id="footer2" class="sidebar four columns" role="complementary">

					<div class="panel">
				
						<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>

							<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>

						<?php else : ?>

							<!-- This content shows up if there are no widgets defined in the backend. -->
							
							<div class="alert-box">Please activate some Widgets.</div>

						<?php endif; ?>

					</div>

				</div>