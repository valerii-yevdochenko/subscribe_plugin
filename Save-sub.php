<?php

class SaveSubToDB {

	static function save_subscriber( $email ) {

		global $wpdb;

		return $wpdb->replace(
			Database::get_table_name(),
			[
				'email' => sanitize_email( $email ),
			],
			[
				'email' => '%s',
			]
		);
	}
}