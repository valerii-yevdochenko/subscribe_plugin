<?php

class Shortcode {

	public function shortcode_hooks() {
		add_shortcode( 'subscribe_form', [ $this, 'form' ] );
	}

	public function form() {

		wp_enqueue_style( 'subscribe' );
		wp_enqueue_script( 'subscribe' );
		ob_start();
		include_once( SUBSCRIBE_PATH . 'form_templ.php' );

		return ob_get_clean();
	}
}

$shortcode = new Shortcode();
$shortcode->shortcode_hooks();