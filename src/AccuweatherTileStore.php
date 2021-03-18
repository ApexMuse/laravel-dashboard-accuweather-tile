<?php

namespace ApexMuse\LaravelDashboardAccuweatherTile;

use Spatie\Dashboard\Models\Tile;

class AccuweatherTileStore
{
    private Tile $tile;

    public static function make(): AccuweatherTileStore
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName("accuweather");
    }

    public function setData(array $data): self
    {
        $this->tile->putData('key', $data);

        return $this;
    }

    public function getData(): array
    {
        return$this->tile->getData('key') ?? [];
    }
}
