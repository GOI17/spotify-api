<?php

declare(strict_types=1);

namespace App\Application\Actions\Band;

use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

final class ListBandsAction
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $this->logger->info("Bands Page action Dispatched");

        return $response->withJson(["success" => true]);
    }
}
