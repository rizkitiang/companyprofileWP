<?php

/**
 * Title: Footer
 * Slug: webstein-rizki/footer
 * Categories: webstein-rizki
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|x-large"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"footer","className":"site-footer","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull site-footer has-footer-background-color has-background has-link-color footer-border">
	<!-- wp:columns {"className":"footer-top",align":"content","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns footer-top">
		<!-- wp:column -->
		<div class="wp-block-column footer-info">
			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:image {"width":183,"height":42,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
				<figure class="wp-block-image"><img src="https://webstein-test.rizkitrio.my.id/wp-content/themes/companyprofile/assets/images/logo.png" alt="" class="wp-image-2093"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
				<p class="has-white-color has-text-color has-small-font-size">
					<?php esc_html_e('Got a problem at home or at work, need an emergency plumber in Perth? Give us a call, we ll fix it no probs.', 'webstein-rizki'); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"flex"}} -->
			<div class="wp-block-group">
				<!-- wp:image -->
				<figure class="wp-block-image"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/facebook.png" alt="" class="wp-image-2093"/></a></figure>
				<!-- /wp:image -->
				<!-- wp:image  -->
				<figure class="wp-block-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/google.png" alt="" class="wp-image-2093"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->
		<!-- wp:columns {"className":"footer-link-group"} -->
		<div class="wp-block-columns footer-link-group">
			<!-- wp:column {"text-color":"white"} -->
			<div class="wp-block-column has-white-color has-text-color">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
				<p style="font-style:normal;font-weight:600">
					<?php esc_html_e('Services', 'webstein-rizki'); ?>
				</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"textColor":"base","layout":{"type":"constrained"},"fontSize":"small",} -->
				<div class="wp-block-group has-small-font-size footer-link">
					<!-- wp:paragraph -->
					<p><a href="#"><?php esc_html_e('Plumbing', 'webstein-rizki'); ?></a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p><a href="#"><?php esc_html_e('Hot Water', 'webstein-rizki'); ?></a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p><a href="#"><?php esc_html_e('Drainage', 'webstein-rizki'); ?></a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p><a href="#"><?php esc_html_e('Blocked Drains', 'webstein-rizki'); ?></a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p><a href="#"><?php esc_html_e('Gas Plumber', 'webstein-rizki'); ?></a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p><a href="#"><?php esc_html_e('Electrical', 'webstein-rizki'); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"textColor":"white","className":"second-link"} -->
			<div class="wp-block-column has-white-color has-text-color second-link">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
				<p style="font-style:normal;font-weight:600">
					<?php esc_html_e('Contact', 'webstein-rizki'); ?>
				</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"textColor":"main-accent","fontSize":"small"} -->
				<div class="wp-block-group has-small-font-size footer-link">
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e('(08) 9315 5545', 'webstein-rizki'); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="mailto:info@noprobs.com.au"><?php esc_html_e('info@noprobs.com.au', 'webstein-rizki'); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e('3/52 Roberts St, Osborne Park WA 6017', 'webstein-rizki'); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e('Mon - Fri: 7am - 5pm ', 'webstein-rizki'); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#" style="visibility: hidden">mmm</a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:paragraph -->
					<p><a href="#"><?php esc_html_e('Privacy Policy', 'webstein-rizki'); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group -->
	<div class="wp-block-group footer-copywrite">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|white16"}}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"var:preset|color|white16","fontSize":"small"} -->
			<p class="has-small-font-size white16">
				© No Probs Plumbing and Electrical | Plumbing License: PL9107 | Gas License: GF18521 | Electrical License: EC13127
			</p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"align":"left","id":2093,"width":183,"height":42,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
			<figure class="wp-block-image alignright"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-up.png" alt="" class="wp-image-2093"/></a></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->