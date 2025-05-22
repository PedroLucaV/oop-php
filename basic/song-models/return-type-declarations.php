<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('Carry On', 1000);
$song2 = new Song('Nobody sleeps here', 102);

$playlist->addSong($song1);
$playlist->addSong($song2);

if($playlist->getLength() < 10){
    print 'Short Playlist!' . PHP_EOL;
}else{
    print 'Long Playlist!' . PHP_EOL;
}