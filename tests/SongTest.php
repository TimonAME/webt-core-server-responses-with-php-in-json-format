<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use \src\Song;

class SongTest extends TestCase
{
    public function testJsonSerialize(): void
    {
        $song = new Song(1, "Sample Song", "sample-artist", 1, 200);
        $expected = [
            'id' => 1,
            'name' => "Sample Song",
            'artist' => "sample-artist",
            'trackNumber' => 1,
            'durationInSeconds' => 200
        ];
        $this->assertEquals($expected, $song->jsonSerialize());
    }
}