<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h2><?php esc_attr_e( 'The Official Treehouse Badges Plugin', 'wptreehouse-badges' ); ?></h2>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h3 class="hndle"><span><?php esc_attr_e( 'Let\'s Get Started', 'wptreehouse-badges' ); ?></span>
						</h3>

						<div class="inside">
							
							<form method="post" action="">
								<label for="wptreehouse-username">Username</label>
								<input name="wptreehouse-username" id="wptreehouse-username" type="text" value="" class="regular-text" placeholder="Enter your username" /><br>
								
								<?php submit_button( 'Save', $type = 'primary', $name = 'wptreehouse-username-submit', $wrap = FALSE, $other_attributes = NULL ); ?>
							</form>

						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h3 class="hndle"><span><?php esc_attr_e( 'Most Recent Badges', 'wptreehouse-badges' ); ?></span>
						</h3>

						<div class="inside">
							
							<p>Below are your 20 most recent badges.</p>

							<ul class="wptreehouse-badges-list">

							<?php for($i = 0; $i < 20; $i++) { ?>

								<li>
									<ul>
										<li>
											<img class="wptreehouse-gravatar" width="120px" src="<?php echo $plugin_url . '/images/wp-badge.png'; ?>">								
										</li>										
										<li class="wptreehouse-badge-name">
											<a href="#"><?php _e( 'Badge Name', 'wptreehouse-badges' ); ?></a>
										</li>
										<li class="wptreehouse-project-name">
											<a href="#"><?php _e( 'Project Name', 'wptreehouse-badges' ); ?></a>
										</li>
									</ul>									
								</li>	

							<?php } ?>

							</ul>

						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->


				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h3 class="hndle"><span><?php esc_attr_e(
									'User Profile', 'wptreehouse-badges'
								); ?></span></h3>

						<div class="inside">

							<p><img width="100%" class="wptreehouse-gravatar" src="<?php echo $plugin_url . '/images/mike-the-frog.png'; ?>" alt="Mike the Frog Gravatar"></p>

								<ul class="wptreehouse-badges-and-points">							

									<li><?php _e( 'Badges:', 'wptreehouse-badges'); ?> <strong>200</strong></li>
									<li><?php _e( 'Points:', 'wptreehouse-badges'); ?> <strong>10000</strong></li>

								</ul>

						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
