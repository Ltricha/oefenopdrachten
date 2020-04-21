<?php
require "index.php";

$dbc = dbConnect();

//$title = $_POST['title'];

//$artist = $_POST['artist'];

//$album = $_POST['album'];

//$duration = $_POST['duration'];

 print_r($_POST);



 function addSoundtrack() {

    $sql = 'INSERT INTO afspeellijst (titel, artiest, album, duur, afbeelding) VALUES'

 }