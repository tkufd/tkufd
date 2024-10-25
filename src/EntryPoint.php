<?php

require_once __DIR__ . '/AutoLoader.php';

use Tkufd\Web\Start;

// function execute( ?string $entry_point ) {
function execute( $entry_point ) {
	$web_start = new Start();
	$web_start->execute( $entry_point );
}
