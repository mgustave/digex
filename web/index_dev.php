<?php

//umask(0000);  //This will let the permissions be 0777
ini_set('display_errors', 1); 
error_reporting(E_ALL);

require_once __DIR__.'/../vendor/autoload.php';

$env = 'dev'; //pass the current environment to app.php
$app = require __DIR__.'/../app/app.php';
$app->run();
