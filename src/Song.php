<?php

namespace src;

class Song implements \JsonSerializable
{
    #User Story 2 - Song with Variables
    private int $id;
    private string $name;
    private string $artist;
    private int $trackNumber;
    private int $durationInSeconds;

    /**
     * @param int $id
     * @param string $name
     * @param string $artist
     * @param int $trackNumber
     * @param int $durationInSeconds
     */
    public function __construct(int $id, string $name, string $artist, int $trackNumber, int $durationInSeconds)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->durationInSeconds = $durationInSeconds;
    }


    public function jsonSerialize(): mixed
    {
        // TODO: Implement jsonSerialize() method.
        return [
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'trackNumber' => $this->trackNumber,
            'durationInSeconds' => $this->durationInSeconds
        ];
    }
}