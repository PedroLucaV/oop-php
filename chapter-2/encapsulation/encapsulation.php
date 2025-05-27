<?php

require_once 'Playlist.php';
require_once 'Song.php';

$beatlesSongs = new Playlist();

$song = new Song('Yesterday', 100);
$fakeSong = 'This is not a song';

$beatlesSongs->addSong($song);
// $beatlesSongs->addSong($fakeSong); can't add cuz is'nt a song!

var_dump($beatlesSongs->getSongs());

