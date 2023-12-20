<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use src\Song;

class SongTest extends TestCase
{
    public function testGetTitle(): void
    {
        $song = new Song("Sample Song", "sample-artist");
        $this->assertEquals("Sample Song", $song->getTitle());
    }

    /*
    public function testGetArtist()
    {
        $song = new Song("Sample Song", "sample-artist");
        $this->assertSame("sample-artist", $song->getArtist());
    }

    public function testConstructor()
    {
        $song = new Song("Sample Song", "sample-artist");
        $this->assertInstanceOf(Song::class, $song);
    }
    */
}