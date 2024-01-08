<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use \src\Song;

class SongTest extends TestCase
{
    protected $song;
    protected function setUp(): void
    {
        // This is the fixture setup
        $this->song = new Song(1, "Sample Song", "sample-artist", 1, 200);
    }
    protected function tearDown(): void
    {
        // Clean up the fixture
        $this->song = null;
    }
    public function testJsonSerialize(): void
    {
        $expected = [
            'id' => 1,
            'name' => "Sample Song",
            'artist' => "sample-artist",
            'trackNumber' => 1,
            'durationInSeconds' => 200
        ];
        $this->assertEquals($expected, $this->song->jsonSerialize());
    }
}