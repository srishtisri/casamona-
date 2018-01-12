<?php
/**
 * Template: Single Listing
 */
global $listing; ?>

<div class="wpsight-listing wpsight-listing-<?php echo $listing->ID; ?> entry-content" itemscope itemtype="http://schema.org/Product">

	<meta itemprop="name" content="<?php echo esc_attr( $listing->post_title ); ?>" />

	<?php if ( $listing->post_status == 'expired' ) : ?>

		<div class="wpsight-alert wpsight-alert-expired">
			<?php _e( 'This listing has expired.', 'wpcasa' ); ?>
		</div>

	<?php endif; ?>
	
	<?php if ( $listing->post_status != 'expired' || wpsight_user_can_edit_listing( $listing->ID ) ) : ?>
	
		<div class="single-list" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			
			<?php do_action( 'wpsight_listing_single_before', $listing->ID ); ?>
			<div class="container">
			<div class="col-md-8 pull-left">
				<?php wpsight_get_template( 'listing-single-title.php' ); ?>
			
				<?php wpsight_get_template( 'listing-single-image.php' ); ?>
				
				<?php wpsight_get_template( 'listing-single-description.php' ); ?>
			</div>
			<div class="col-md-4 pull-left">
				<div class="pull-left list-dis">
				<?php wpsight_get_template( 'listing-single-info.php' ); ?>
				<?php wpsight_get_template( 'listing-single-details.php' ); ?>
				</div>
				<div class="pull-left list-dis">
				<div class="wpsight-listing-info clearfix cont">How can we help you?</div>
				<div class="pull-left contact"><?php echo do_shortcode('[contact-form-7 id="5" title="How can we help you?"]'); ?></div>
				</div>
				<?php //wpsight_get_template( 'listing-single-features.php' ); ?>
				<?php //wpsight_get_template( 'listing-single-agent.php' ); ?>
			</div>
			</div>
			<?php wpsight_get_template( 'listing-single-location.php' ); ?>
			<?php do_action( 'wpsight_listing_single_after', $listing->ID ); ?>

		</div>
		
	<?php endif; ?>

</div><!-- .wpsight-listing-<?php echo $listing->ID; ?> -->