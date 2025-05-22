<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('Carry On', 1000);
$song2 = new Song('Nobody sleeps here', 102);

$playlist->addSong($song1);
$playlist->addSong($song2);

// print count($playlist->songs);

foreach ($playlist->songs as $song){
    print $song->name . PHP_EOL;
}

