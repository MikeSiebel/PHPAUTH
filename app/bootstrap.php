<?php 
namespace App;
session_start();

require_once __DIR__ . '/core/config/config.php';
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';
require_once __DIR__ . '/core/Route.php';

//var_dump($_SERVER);
//die();

core\Route::start();


