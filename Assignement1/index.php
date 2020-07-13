<?php
require_once __DIR__ . '/vendor/autoload.php';

use prasad\HelloWorld\Index;

$greeting = new Index();

echo $greeting->helloWorld();

