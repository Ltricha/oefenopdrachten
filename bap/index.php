<?php


    $host = 'localhost';
    $dbname= 'sqlrefresh';
    $username = 'root';
    $password = '';
    


    try {
        $dbc = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "Connected to $dbname at $host successfully.";

        $sql = "CREATE TABLE music (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(100),
            musicUrl VARCHAR(100),
            reg_date TIMESTAMP

        );";

        
        $dbc->exec($sql);

        //$stmt = $dbc->query();


    } catch (PDOException $pe) {

        die("Could not connect to the database $dbname :" . $pe->getMessage());

    }


    $dbc = null;

?>

