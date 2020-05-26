<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Band;

use App\Domain\Band\Band;

class InMemmoryBandRepository
{
    private $bands;

    public function __construct(array $bands = null)
    {
        $this->bands = $bands ?? [
            1 => new Band(1, 'Soda Stereo', 'Rock'),
            2 => new Band(2, 'Los enanitos Verdes', 'Rock'),
            3 => new Band(3, 'Caifanes', 'Rock'),
            4 => new Band(4, 'Hombres G', 'Rock')
        ];
    }

    public function findAll(): array
    {
        return array_values($this->bands);
    }
}
