<?php
/*
 * GitHub:
 * Repository forked then cloned
 * Branch created, Timon and Momo
 * Switch branches with git checkout
 * Changes made, git add, git commit, git push
 * Merge into main branch with git checkout main, git merge Timon/Momo
 * Then git checkout Timon/Momo, git merge main
 */

 /*
 * PHPUnit:
 * Composer activated with:      composer init
 * PHPUnit installed with:       composer require --dev phpunit/phpunit ^10
 * 
 * TO RUN TESTS:
 * vendor/bin/phpunit tests
 * When run all files in tests folder end with Test.php are run
 * The tests inside the files have to start with "test"
 */

// autoload with composer
require 'vendor/autoload.php';

use src\Seeders\Seeder;

/*
require_once 'src/OST.php';
require_once 'src/Song.php';
require_once 'src/Seeders/Seeder.php';
*/

//für richtiges JSON Format
header('Content-Type: application/json');

$seeder = new Seeder();
$osts = $seeder->seed();

//holt die Id aus der URL
$requestedOstId = $_GET['id'] ?? null; //wenn id nicht gesetzt(isset) dann null, kurze schreibweise für if else

//wenn Id gesetzt dann wird sie mit den IDs aus dem osts array verglichen
if ($requestedOstId !== null) {
    $foundOst = null;
    foreach ($osts as $ost) {
        if ($ost->getId() == $requestedOstId) {
            $foundOst = $ost;
            break;
        }
    }
    //wenn id gefunden wurde dann wird sie ausgegeben, wenn nicht dann wird ein Fehler ausgegeben
    if ($foundOst) {
        echo json_encode($foundOst);
    } else {
        echo json_encode(['error' => 'OST not found']);
    }
} elseif ($requestedOstId === null) {
    echo json_encode($osts);
} else {
    echo json_encode(['error' => 'OST ID is missing']);
}