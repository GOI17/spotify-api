<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App(['settings' => require __DIR__ . '/../app/settings.php']);

require __DIR__ . '/container.php';
require __DIR__ . '/middleware.php';
require __DIR__ . '/routes.php';

return $app;
