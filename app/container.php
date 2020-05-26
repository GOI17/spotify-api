<?php

declare(strict_types=1);

use App\Application\Actions\ListAlbumsAction;
use App\Application\Actions\ListBandsAction;
use App\Application\Actions\ViewBandAlbumsAction;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Processor\UidProcessor;

$container = $app->getContainer();

$container['logger'] = function ($container) {
    $settings = $container->get('settings');
    $logger = new Logger($settings['logger']['name']);
    $logger->pushProcessor(new UidProcessor());
    $logger->pushHandler(new StreamHandler(
        $settings['logger']['file'],
        $settings['logger']['level']
    ));

    return $logger;
};

$container['ListBandsAction'] = function ($container) {
    return new ListBandsAction($container->get('logger'));
};

$container['ListAlbumsAction'] = function ($container) {
    return new ListAlbumsAction($container->get('logger'));
};

$container['ViewBandAlbumsAction'] = function ($container) {
    return new ViewBandAlbumsAction($container->get('logger'));
};
