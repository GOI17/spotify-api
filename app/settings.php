<?php

declare(strict_types=1);

use Monolog\Logger;

$settings = [];

$settings['displayErrorDetails'] = true;
$settings['determineRouteBeforeAppMiddleware'] = true;
$settings['root'] = dirname(__DIR__);
$settings['public'] = $settings['root'] . '/public';
$settings['logger'] = [
    'name' => 'spotify-api',
    'file' => $settings['root'] . '/logs/app.log',
    'level' => Logger::DEBUG
];

return $settings;
