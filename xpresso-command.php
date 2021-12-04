<?php

namespace WP_CLI\Xpresso;

use WP_CLI;

if ( ! class_exists( '\WP_CLI' ) ) {
	return;
}

$wpcli_xpresso_autoloader = __DIR__ . '/vendor/autoload.php';

if ( file_exists( $wpcli_xpresso_autoloader ) ) {
	require_once $wpcli_xpresso_autoloader;
}

WP_CLI::add_command( 'xpresso', XpressoCommand::class );
