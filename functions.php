<?php
	add_action( 'wp_enqueue_scripts', 'ttone_child_enqueue_styles');
	function ttone_child_enqueue_styles() {
		//load the parent theme styles
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

		//enqueue the knowledge base styles
		if( HT_KB_MAIN_PLUGIN_FILE ){
			wp_enqueue_style( 'hkb-style', plugins_url( 'css/hkb-style.css', HT_KB_MAIN_PLUGIN_FILE ), array(), HT_KB_VERSION_NUMBER );	
		}
		
	}
	