<?php

class Database {

	public function get_table_name(): string {

		global $wpdb;

		return $wpdb->prefix . 'subscribers';
	}

	public function create_table() {

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';

		global $wpdb;

		$table_name = $this->get_table_name();

		$sql = "CREATE TABLE {$table_name} (
email VARCHAR(255) UNIQUE NOT NULL,
PRIMARY KEY (email)
) {$wpdb->get_charset_collate()};";

		dbDelta( $sql );
	}
}
