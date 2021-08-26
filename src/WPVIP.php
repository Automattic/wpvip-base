<?php

namespace Automattic\WPVIP;

class WPVIP {
	public static function init() {
		Logging\Error_Logging::init( new Logging\GCP_Stderr_Logger() );

		require_once __DIR__ . '/advanced-post-cache/advanced-post-cache.php';
		require_once __DIR__ . '/stats.php';
	}
}
