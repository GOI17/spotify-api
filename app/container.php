<?php

declare(strict_types=1);

$container = $app->getContainer();

$container['logger'] = function ($container) {
    $settings = $container->get('settings');
    $logger = new Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler(
        $settings['logger']['file'],
        $settings['logger']['level']
    ));

    return $logger;
};


$container[App\Application\Actions\Band\ListBandsAction::class] = function ($container) {
    return new App\Application\Actions\Band\ListBandsAction($container->get('logger'));
};
