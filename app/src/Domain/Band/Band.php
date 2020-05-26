<?php

declare(strict_types=1);

namespace App\Domain\Band;

use JsonSerializable;

class Band implements JsonSerializable
{
    private $id;
    private $name;
    private $genre;

    public function __construct(int $id, string $name, string $genre)
    {
        $this->id = $id;
        $this->name = $name;
        $this->genre = $genre;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'genre' => $this->genre
        ];
    }
}
