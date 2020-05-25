<?php
/**
 * Kickoff theme setup and build
 */

namespace GatherPress_Tailwind;

define( 'gatherpress_tailwind_VERSION', wp_get_theme()->version );
define( 'gatherpress_tailwind_DIR', __DIR__ );
define( 'gatherpress_tailwind_URL', get_template_directory_uri() );

require_once gatherpress_tailwind_DIR . '/vendor/autoload.php';

\A7\autoload( __DIR__ . '/src' );
