<?php
/**
 * Main entry point.
 */

error_reporting( -1 );
ini_set( 'display_startup_errors', 1 );
ini_set( 'display_errors', 1 );

require_once __DIR__ . '/src/EntryPoint.php';

execute( 'index' );
