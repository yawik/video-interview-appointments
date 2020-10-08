<?php

require __DIR__.'/../../../vendor/autoload.php';

use Core\Application;

chdir(dirname(__DIR__));

// Retrieve configuration
$appConfig = include 'config/config.php';
Application::init($appConfig)->run();
