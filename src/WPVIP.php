<?php

namespace Automattic\WPVIP;

class WPVIP {
	public static function init() {
		Logging\Error_Logging::init( new Logging\GCP_Stderr_Logger() );

		require_once './advanced-post-cache/advanced-post-cache.php';
	}
}
