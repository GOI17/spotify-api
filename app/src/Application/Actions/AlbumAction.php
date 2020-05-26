<?php

declare(strict_types=1);

namespace App\Application\Actions;

use App\Application\Actions\Action;
use App\Domain\Album\AlbumRepository;
use Psr\Log\LoggerInterface;

abstract class AlbumAction extends Action
{
    protected $albumRepository;

    public function __construct(LoggerInterface $logger)
    {
        parent::__construct($logger);
        $this->albumRepository = new AlbumRepository();
    }
}
