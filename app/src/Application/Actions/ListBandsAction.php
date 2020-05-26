<?php

declare(strict_types=1);

namespace App\Application\Actions;

use Psr\Http\Message\ResponseInterface;

final class ListBandsAction extends BandAction
{

    public function action(): ResponseInterface
    {
        $bands = $this->bandRepository->findAll();

        $this->logger->info("Bands Page action Dispatched.");

        return $this->respondWithData($bands);
    }
}
