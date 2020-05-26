<?php

declare(strict_types=1);

namespace App\Domain\Band;

use App\Domain\DomainException\DomainRecordNotFoundException;

class BandNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'The band you requested does not exist.';
}
