<?php

declare(strict_types=1);

require_once 'Song.php';

$song = new Song("It won't be long", 100);

print $song->name;