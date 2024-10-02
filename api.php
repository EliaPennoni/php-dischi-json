<?php
$musicString = file_get_contents('db/music.json');


$music = json_decode($musicString, true);

header('Content-Type: application/json');

echo json_encode($music);
?>