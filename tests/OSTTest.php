<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use \src\OST;

/*
Fixtures: A fixture is a fixed state of a set of objects used as a baseline for running

setUp: This method is called before each test method is run. You can use this method 
to set up any objects or resources that are used by your tests.

testGetID and testJsonSerialize: These are your test methods. PHPUnit will run these 
methods as tests.

tearDown: This method is called after each test method is run. You can use this method 
to clean up any objects or resources that were set up in the setUp method.
*/

class OSTTest extends TestCase
{
    protected $ost;

    protected function setUp(): void
    {
        // This is the fixture setup
        $this->ost = new OST(1, "Sample OST", "Sample Video Game", 2000, []);
    }

    protected function tearDown(): void
    {
        // Clean up the fixture
        $this->ost = null;
    }
    public function testGetID(): void
    {
        $this->assertEquals(1, $this->ost->getId()); // Assertion 1: Check if the ID is equal to 1
        $this->assertIsInt($this->ost->getId()); // Assertion 2: Check if the ID is an integer
    }
    public function testJsonSerialize(): void
    {
        $expected = [
            'id' => 1,
            'name' => "Sample OST",
            'videoGame' => "Sample Video Game",
            'releaseYear' => 2000,
            'trackList' => []
        ];
        $this->assertEquals($expected, $this->ost->jsonSerialize()); // Assertion 1: Check if the serialized output is as expected
        $this->assertArrayHasKey('id', $this->ost->jsonSerialize()); // Assertion 2: Check if the 'id' key exists in the serialized output
    }
}