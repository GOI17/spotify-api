<?php

declare(strict_types=1);

namespace App\Domain\Band;

class BandRepository
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

    public function findByName(string $name)
    {
        $result = null;
        foreach ($this->bands as $band) {
            if (strtolower($band->getName()) === strtolower($name)) $result = $band;
        }

        if ($result === null) {
            throw new BandNotFoundException();
        }

        return $result;
    }
}
