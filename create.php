<?php

require("config.php");

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
    } else {
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}

$sql = "INSERT INTO php-pdo-crud-proeftoets (Id
                            ,Name 
                            ,Networth
                            ,Age
                            ,MyCompany) 
        VALUES              (NULL
                            ,:Name
                            ,:Networth
                            ,:Age
                            ,:MyCompany);";
$statement = $pdo->prepare($sql);

$statement->bindValue(":Name", $_POST['Name'], PDO::PARAM_STR);
$statement->bindValue(":Networth", $_POST['Networth'], PDO::PARAM_STR);
$statement->bindValue(":Age", $_POST['Age'], PDO::PARAM_STR);
$statement->bindValue(":MyCompany", $_POST['MyCompany'], PDO::PARAM_STR);

$statement->execute();

header("location: read.php");