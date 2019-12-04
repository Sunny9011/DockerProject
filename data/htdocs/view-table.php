<?php

$servername = "database";
$username = "root";
$password = "root";
$dbname = "myDBPDO";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);

    $data = $connection->prepare('SELECT * FROM MyList');
    $data->execute();

    $result = $data->fetchAll();

    if (count($result)) {
        //display data
        foreach ($result as $row) {
            echo " id: ".$row['id'] . "<br />";
            echo " firstName: ".$row['firstName'] . "<br />";
            echo " lastName: ".$row['lastName'] . "<br />";
            echo " email: ".$row['email'] . "<br />";
            echo " reg_date: ".$row['reg_date'] . "<br />" ."<br />";
        }
    } else {
        echo "Empty data";
    }

} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

$connection = null;