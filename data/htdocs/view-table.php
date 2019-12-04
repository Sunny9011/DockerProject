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
        //выводим результат
        foreach ($result as $row) {
            echo " id: ".$row['id'] . "<br />";
            echo " firstName: ".$row['firstName'] . "<br />";
            echo " lastName: ".$row['lastName'] . "<br />";
            echo " email: ".$row['email'] . "<br />";
            echo " reg_date: ".$row['reg_date'] . "<br />" ."<br />";
        }
    } else {
        echo "Нет записей для вывода";
    }

} catch(PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}

$connection = null;