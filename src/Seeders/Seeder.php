<?php

namespace src\Seeders;

use src\OST;
use src\Song;
class Seeder
{
    public function seed(): array
    {
        $ost1 = new OST(0, 'The Legend of Zelda: Ocarina of Time', 'The Legend of Zelda: Ocarina of Time', 1998, [
            new Song(1, 'Title Theme', 'Koji Kondo', 1, 161),
            new Song(2, 'Enter Ganondorf', 'Koji Kondo', 2, 29),
            new Song(3, 'Deku Tree', 'Koji Kondo', 3, 65),
            new Song(4, 'Fairy Flying', 'Koji Kondo', 4, 12),
            new Song(5, 'House', 'Koji Kondo', 5, 29),
            new Song(6, 'Kokiri Forest', 'Koji Kondo', 6, 65),
            ]);
        $ost2 = new OST(1, 'The Legend of Zelda: Majora\'s Mask', 'The Legend of Zelda: Majora\'s Mask', 2000, [
            new Song(1, 'Title Theme', 'Koji Kondo', 1, 161),
            new Song(2, 'Enter Ganondorf', 'Koji Kondo', 2, 29),
            new Song(3, 'Deku Tree', 'Koji Kondo', 3, 65),
            new Song(4, 'Fairy Flying', 'Koji Kondo', 4, 12),
            new Song(5, 'House', 'Koji Kondo', 5, 29),
            new Song(6, 'Kokiri Forest', 'Koji Kondo', 6, 65),
            ]);
        $ost3 = new OST(5, 'The Legend of Zelda: Breath of the Wild', 'The Legend of Zelda: Breath of the Wild', 2017, [
            new Song(1, 'Title Theme', 'Koji Kondo', 1, 161),
            new Song(2, 'Enter Ganondorf', 'Koji Kondo', 2, 29),
            new Song(3, 'Deku Tree', 'Koji Kondo', 3, 65),
            new Song(4, 'Fairy Flying', 'Koji Kondo', 4, 12),
            new Song(5, 'House', 'Koji Kondo', 5, 29),
            new Song(6, 'Kokiri Forest', 'Koji Kondo', 6, 65),
            ]);
        return [$ost1, $ost2, $ost3];
    }
}