<?php

declare(strict_types=1);

$settings = [];

$settings['displayErrorDetails'] = true;
$settings['determineRouteBeforeAppMiddleware'] = true;
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';
$settings['logger'] = [
    'name' => 'spotify-api',
    'file' => $settings['temp'] . '/logs/app.log',
    'level' => \Monolog\Logger::ERROR
];

return $settings;
