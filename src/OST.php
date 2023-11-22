<?php

namespace src;

class OST implements \JsonSerializable
{
    #User Story 1 - OST with Variables
    private int $id;
    private string $name;
    private string $videoGame;
    private int $releaseYear;
    private array $trackList;

    /**
     * @param int $id
     * @param string $name
     * @param string $videoGame
     * @param int $releaseYear
     * @param array $trackList
     */
    public function __construct(int $id, string $name, string $videoGame, int $releaseYear, array $trackList)
    {
        $this->id = $id;
        $this->name = $name;
        $this->videoGame = $videoGame;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function jsonSerialize(): mixed
    {
        // TODO: Implement jsonSerialize() method.
        return [
            'id' => $this->id,
            'name' => $this->name,
            'videoGame' => $this->videoGame,
            'releaseYear' => $this->releaseYear,
            'trackList' => $this->trackList
        ];
    }
}