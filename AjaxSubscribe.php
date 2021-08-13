<?php

class AjaxSubscribe extends SaveSubToDB {

	const SUBSCRIBE_NONCE_ACTION = 'subscribe-action';

	public function ajax_hooks() {
		add_action( 'wp_ajax_subscribe', [ $this, 'subscribe' ] );
		add_action( 'wp_ajax_nopriv_subscribe', [ $this, 'subscribe' ] );
	}

	public function subscribe() {

		check_ajax_referer( self::SUBSCRIBE_NONCE_ACTION );

		$email = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );

		if ( ! is_email( $email ) ) {
			wp_send_json_error(
				sprintf(
					esc_html__( 'The %s is invalid email', 'subscribe' ),
					esc_html( $email )
				)
			);
		}

		if ( 2 === SaveSubToDB::save_subscriber( $email ) ) {
			wp_send_json_error(
				sprintf(
					esc_html__( 'The %s email is already exists', 'subscribe' ),
					esc_html( $email )
				)
			);
		}

		wp_send_json_success( esc_html__( 'You were successfully subscribed', 'subscribe' ) );
	}

}

$ajax_subscribe = new AjaxSubscribe();
$ajax_subscribe->ajax_hooks();
