<?php

$servername = "database";
$username = "root";
$password = "root";
$dbname = "myDBPDO";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_USE_BUFFERED_QUERY);

    $result = $connection->query('SHOW TABLES LIKE "MyList"');

    if (!empty($result)) {
        echo "Table already created";
    } else {
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
    //Insert data
    $query = 'INSERT INTO MyList (firstName, lastName, email) VALUES ';
    $query_parts = array();
    for ($i = 0; $i < 1000; $i++) {
        $query_parts[] = "('" . $column1[] = 'Bill' . rand(1, 1000) . "', '" . $column2[] = 'Aleksandrovich' .
                    rand(1, 1000) . "', '" . $column3[] = 'Bill' . rand(1, 1000) . '@gmail.com' . "')";
    }
    $query .= implode(',', $query_parts);

    $connection->exec($query);

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;