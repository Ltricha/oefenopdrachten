<?php

    
function dbConnect() {

    $config = require( __DIR__ . '/src/config.php' );

    try {
        $dbc = new PDO( 'mysql:host=' . $config['host'] . '; dbname=' . $config['database'], $config['username'], $config['password'] );
       // echo "Connected to $config['database'] at $config['host'] successfully.";


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
            array_push($soundtracks, $soundtrack);
        }

        print_r($soundtracks);

    } catch( PDOException $e) {

    }



}



getSoundtracks();


?>

