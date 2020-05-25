<?php

namespace GatherPress_Tailwind;

/**
 * Enqueue scripts and styles
 */
add_action(
	'wp_enqueue_scripts',
	function() {

		$min_ext = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

		// JS
		wp_enqueue_script(
			'gatherpress_tailwind_js',
			gatherpress_tailwind_URL . "/dist/main{$min_ext}.js",
			[],
			gatherpress_tailwind_VERSION,
			true
		);

		// CSS
		wp_enqueue_style(
			'gatherpress_tailwind_css',
			gatherpress_tailwind_URL . "/dist/main{$min_ext}.css",
			[],
			gatherpress_tailwind_VERSION,
			''
		);

	}
);
