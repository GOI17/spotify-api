<?php

declare(strict_types=1);

namespace App\Application\Actions;

use Psr\Http\Message\ResponseInterface;

final class ListAlbumsAction extends AlbumAction
{
    public function action(): ResponseInterface
    {
        $albums = $this->albumRepository->findAll();

        $this->logger->info("Albums Page action Dispatched.");

        return $this->respondWithData($albums);
    }
}
