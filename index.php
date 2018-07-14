<?php
require_once('Autoload.php');

$postr = new Postr();
$content = $postr->get( "https://www.google.com" );
