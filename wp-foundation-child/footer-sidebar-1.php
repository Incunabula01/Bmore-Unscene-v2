				<div id="footer1" class="sidebar four columns" role="complementary">

					<div class="panel">
				
						<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>

							<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>

						<?php else : ?>

							<!-- This content shows up if there are no widgets defined in the backend. -->
							
							<div class="alert-box">Please activate some Widgets.</div>

						<?php endif; ?>

					</div>

				</div>