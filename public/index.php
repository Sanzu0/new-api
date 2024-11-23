<?php

use Illuminate\Http\Request;

// Record the start time for profiling (optional)
define('LARAVEL_START', microtime(true));

// Check if the application is in maintenance mode
$maintenanceFile = __DIR__.'/../storage/framework/maintenance.php';
if (file_exists($maintenanceFile)) {
    require $maintenanceFile; // If the app is in maintenance mode, this file will handle it
}

// Include the Composer autoloader to load the app's dependencies
require __DIR__.'/../vendor/autoload.php';

// Bootstrap the Laravel application and handle the incoming request
// This initializes the app and sends a response back to the client
(require_once __DIR__.'/../bootstrap/app.php')
    ->handle(Request::capture());
