<?php

declare(strict_types=1);

namespace App\Domain\Album;

use JsonSerializable;

class Album implements JsonSerializable
{
    private $id;
    private $name;
    private $released;
    private $tracks;
    private $cover;
    private $duration;
    private $band_id;

    public function __construct(
        int $id,
        string $name,
        string $released,
        int $tracks,
        array $cover,
        string $duration,
        int $band_id
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->released = $released;
        $this->tracks = $tracks;
        $this->cover = $cover;
        $this->duration = $duration;
        $this->band_id = $band_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getReleased()
    {
        return $this->released;
    }

    public function getTracks()
    {
        return $this->tracks;
    }

    public function getCover()
    {
        return $this->cover;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getBandId()
    {
        return $this->band_id;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'released' => $this->released,
            'tracks' => $this->tracks,
            'cover' => $this->cover,
            'duration' => $this->duration,
            'band_id' => $this->band_id
        ];
    }
}
