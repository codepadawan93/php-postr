<?php

define("APPATH", __DIR__);

require_once('Autoload.php');

$postr = new Postr();
echo "<pre>";
$content2 = $postr->delete( "https://jsonplaceholder.typicode.com/todos/1" );
print_r(
  $postr
    ->getField('response')
    ->getField('headers')
);
$content = $postr->get( "https://jsonplaceholder.typicode.com/todos" );
print_r(
  $postr
    ->getField('response')
    ->getField('headers')
);

echo $content;
echo $content2;
