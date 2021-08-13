<?php

class SubscribeRepository {

	function save_subscriber( $email ) {

		global $wpdb;

		return $wpdb->replace(
			( new Database )->get_table_name(),
			[
				'email' => sanitize_email( $email ),
			],
			[
				'email' => '%s',
			]
		);
	}
}