<?php

require_once 'Song.php';

$songTitle = ['Yesterday', 'Help!', 'Something'];

$song = new Song($songTitle[0], 100);

var_dump($song->name);