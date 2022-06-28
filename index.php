<?php
use coding\app\system\AppSystem;
use Dotenv\Dotenv;
require_once __DIR__. '/vendor/autoload.php';

// // *For Access to Connection file env
// $dotenv =Dotenv::createImmutable(__DIR__);
// $dotenv->load();

$system= new AppSystem;
$system->start();


?>