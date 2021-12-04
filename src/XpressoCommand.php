<?php

namespace WP_CLI\Xpresso;

use WP_CLI;
use WP_CLI_Command;

class XpressoCommand extends WP_CLI_Command {

	/**
	 * Connect to source of raw data.
	 * (example) https://www.adihara.com.localhost/storage/clients/jollypeople/data/posts.json
	 *
	 * ## EXAMPLES
	 *
	 *     # Greet the world.
	 *     $ wp hello-world
	 *     Success: Hello World!
	 *
	 * @when before_wp_load
	 *
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 */
	public function __invoke( $args, $assoc_args ) {
		// WP_CLI::success( 'Hello World!' );
		$json_str = file_get_contents('https://www.adihara.com.localhost/storage/clients/jollypeople/data/posts.json');
		var_dump($json_str);
	}
}
