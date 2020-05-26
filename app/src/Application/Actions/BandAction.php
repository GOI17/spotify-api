<?php

declare(strict_types=1);

namespace App\Application\Actions;

use App\Domain\Band\BandRepository;
use Psr\Log\LoggerInterface;

abstract class BandAction extends Action
{
    protected $bandRepository;

    public function __construct(LoggerInterface $logger)
    {
        parent::__construct($logger);
        $this->bandRepository = new BandRepository();
    }
}
