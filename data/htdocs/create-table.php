<?php


$servername = "database";
$username = "root";
$password = "root";
$dbname = "myDBPDO";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_USE_BUFFERED_QUERY);
    // Create table
    $sql = "CREATE TABLE MyList (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   firstName VARCHAR(30) NOT NULL,
   lastName VARCHAR(30) NOT NULL,
   email VARCHAR(50),
   reg_date TIMESTAMP
   )";

    //Insert data
    $sql = "INSERT INTO MyList (firstname, lastname, email)
    VALUES ('Alex', 'VVV', 'Alex@example.com')";

    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    }
    $connection->exec($sql);
    echo "Table MyList created!";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;