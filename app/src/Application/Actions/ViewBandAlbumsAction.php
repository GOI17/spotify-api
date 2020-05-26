<?php

declare(strict_types=1);

namespace App\Application\Actions;

use App\Domain\Album\AlbumRepository;
use Slim\Http\Request;
use Slim\Http\Response;

class ViewBandAlbumsAction
{
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $name = $request->getQueryParams()['q'];

        $albumRepository = new AlbumRepository();
        $albums = $albumRepository->findByBandName($name);

        return $response->withJson([$albums]);
    }
}
