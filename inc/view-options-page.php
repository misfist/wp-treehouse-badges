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

						<h3 class="hndle"><span><?php esc_attr_e( 'Your Username', 'wptreehouse-badges' ); ?></span>
						</h3>

						<div class="inside">
							
							<form name="wptreehouse_username_form" method="post" action="">

								<input type="hidden" name="wptreehouse_form_submitted" value="Y" />

								<label for="wptreehouse_username">Username</label>
								<input name="wptreehouse_username" id="wptreehouse-username" type="text" value="<?php echo $wptreehouse_username; ?>" class="regular-text" placeholder="Enter your username" /><br>

								<?php if( !isset( $wptreehouse_username ) || $wptreehouse_username == '' ) { 
									$button_text = 'Save';
								} else {
									$button_text = 'Update';
								} ?>
								
								<?php submit_button( $button_text, $type = 'primary', $name = 'wptreehouse-username-submit', $wrap = FALSE, $other_attributes = NULL ); ?>
							
							</form>

						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

					<?php if( isset( $wptreehouse_username ) || $wptreehouse_username != '' ) { ?>

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h3 class="hndle"><span><?php esc_attr_e( 'Most Recent Badges', 'wptreehouse-badges' ); ?></span>
						</h3>

						<div class="inside">

							<ul class="wptreehouse-badges-list">

								<?php 
								if( !empty( $wptreehouse_profile ) ) { ?>

									<?php foreach ($wptreehouse_profile->badges as $badge) { ?>

									<li>
										<ul>

											<li>
												<img class="wptreehouse-gravatar" width="120px" src="<?php echo $badge->icon_url; ?>">
											</li>
											<li class="wptreehouse-badge-name">
												<?php if( $badge->url != $wptreehouse_profile->{'profile_url'} ) { ?>
												<a href="<?php echo $badge->url; ?>" target="_blank">
												<?php } ?>
													<?php echo $badge->{'name'}; ?>
												<?php if( $badge->url != $wptreehouse_profile->{'profile_url'} ) { ?>
												</a>
												<?php } ?>
											</li>
											<li class="wptreehouse-project-name">
												<a href="<?php echo $badge->{'courses'}[0]->{'url'}; ?>" target="_blank"><?php echo $badge->{'courses'}[0]->{'title'}; ?></a>
											</li>

										</ul>
									</li>

									<?php } ?>

								<?php } else { ?>

									<p class="error">Profile information isn't available. Please check that you've entered your user name correctly.</p>

								<?php } ?>

							</ul>

						</div>

					</div>
					<!-- .postbox -->

					<?php if( $display_json_feed ) { ?>

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h3 class="hndle"><span><?php esc_attr_e( 'JSON Feed', 'wptreehouse-badges' ); ?></span>
						</h3>

						<div class="inside">

							<pre>
								<?php print_r($wptreehouse_profile); ?>
							</pre>

					</div>
					<!-- .postbox -->

					<?php } ?>

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

						<?php if( !empty( $wptreehouse_profile ) ) { ?>

						<h3 class="hndle"><span><?php echo $wptreehouse_profile->{'name'} ?></span></h3>

						<?php } ?>

						<div class="inside">

						<?php if( !empty( $wptreehouse_profile ) ) { ?>

							<p>
								<a href="<?php echo $wptreehouse_profile->{'profile_url'} ?>" target="_blank">
									<img width="100%" class="wptreehouse-gravatar" src="<?php echo $wptreehouse_profile->{'gravatar_url'}; ?>" alt="<?php echo $wptreehouse_profile->{'name'} ?> Avatar">
								</a>
							</p>

							<ul class="wptreehouse-badges-and-points">							

								<li><?php _e( 'Badges:', 'wptreehouse-badges'); ?> <strong><?php echo count( $wptreehouse_profile->{'badges'} ); ?></strong></li>
								<li><?php _e( 'Points:', 'wptreehouse-badges'); ?> <strong><?php echo $wptreehouse_profile->{'points'}->{'total'}; ?></strong></li>

							</ul>

						<?php } else { ?>

							<p class="error">Profile information isn't available. Please check that you've entered your user name correctly.</p>

						<?php } ?>

						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

					<?php } ?>

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
