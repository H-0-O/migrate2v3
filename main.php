<?php

require __DIR__ . '/vendor/autoload.php';



$app = new Migrate2v3\App();
//$app->prepare(__DIR__.'/v1/fulio_discount_new.php');
$app->prepare(__DIR__ . '/v1/simple.php');
$app->analyze();
$app->parse();
