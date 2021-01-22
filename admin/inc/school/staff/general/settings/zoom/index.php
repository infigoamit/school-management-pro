<?php
defined( 'ABSPATH' ) || die();

require_once WLSM_PLUGIN_DIR_PATH . 'includes/helpers/WLSM_M_Setting.php';

// Zoom settings.
$settings_zoom            = WLSM_M_Setting::get_settings_zoom( $school_id );
$settings_zoom_api_key    = $settings_zoom['api_key'];
$settings_zoom_api_secret = $settings_zoom['api_secret'];
?>
<div class="tab-pane fade" id="wlsm-school-zoom" role="tabpanel" aria-labelledby="wlsm-school-zoom-tab">

	<div class="row">
		<div class="col-md-7">
		<p><strong><?php esc_html_e( 'Note: ', 'school-management' ); ?></strong></p> 
		<p><?php esc_html_e( ' Zoom Settings are Moved to Staff User Profile', 'school-management' ); ?></p>
		<p><?php esc_html_e( '~ If you are admin Then you can add staff user( Teacher ) zoom api when you registering staff user or simply by editing.', 'school-management' ); ?></p>
		<p><?php esc_html_e( '~ Staff users also can add zoom api from profile .', 'school-management' ); ?></p>
		</div>
	</div>

</div>
