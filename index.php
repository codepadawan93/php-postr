<?php
require_once('Autoload.php');

$postr = new Postr();
$content = $postr->get( "https://www.google.ro" );
$headers = $postr
  ->getField("response")
  ->getField('headers');
echo "<pre>";
print_r($headers);
