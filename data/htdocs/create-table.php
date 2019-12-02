<?php


$servername = "database";
$username = "root";
$password = "123456";
$dbname = "myDBPDO";

try {

    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create table
    $sql = "CREATE TABLE MyList (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   firstName VARCHAR(30) NOT NULL,
   lastName VARCHAR(30) NOT NULL,
   email VARCHAR(50),
   reg_date TIMESTAMP
   )";


    $connection->exec($sql);
    echo "Table MyList created!";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;
