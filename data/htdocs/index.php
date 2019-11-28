<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

//Creat connection
try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Creat table
    $sql = "CREATE TABLE MyList (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   firstName VARCHAR(30) NOT NULL,
   lastName VARCHAR(30) NOT NULL,
   Phone VARCHAR(30) NOT NULL,
   email VARCHAR(50),
   reg_date TIMESTAMP
   )";

    $connection->exec($sql);
    echo "Таблица MyList создана успешно";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

// Close connection
$connection = null;