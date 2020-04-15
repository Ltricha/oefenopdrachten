<?php

    
function dbConnect() {

    $config = require( __DIR__ . '/config.php' );

    try {
        $dbc = new PDO( 'mysql:host=' . $config['hostname'] . ';dbname=' . $config['database'], $config['username'], $config['password'] );
        echo "Connected to $dbname at $host successfully.";


        return $dbc;


    } catch (PDOException $pe) {

        die("Could not connect to the database $dbname :" . $pe->getMessage());

    }


    $dbc = null;

}



function getSoundtracks() {

    try {

        $dbc = dbConnect();
        $sql = ('SELECT titel, artiest, album, duur, afbeelding FROM afspeellijst');
        $statement = $dbc->query($sql);
        $soundtracks = [];

        foreach($statement as $soundtrack) {
            array_push($soundtrack);
        }


    } catch( PDOException $e) {

    }



}






?>

