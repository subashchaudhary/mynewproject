function listify_custom_autolocation() {
	if ( ! ( is_front_page() || listify_is_job_manager_archive() ) ) {
		return;
	}
?>
	<script>
		jQuery(document).ready(function() {
			var locate = jQuery( '.locate-me' );
			locate.trigger( 'click' );
		});
	</script>
<?php
}
add_action( 'wp_footer', 'listify_custom_autolocation', 9999 );