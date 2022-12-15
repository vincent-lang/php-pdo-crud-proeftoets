<?php

//* echo $_POST["firstname"] . " " . $_POST["infix"] . " " . $_POST["lastname"];

//* verbinding maken met de mysql database
require("config.php");

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Er is een verbinding gemaakt met de mysqldatabase";
    } else {
        // echo "Interne servererror, neem contact op met de databasebeheerder";
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}

//* we gaan een sql-query maken voor het wegschrijven van de formulier gegevens in de tabel persoon
//* schrijf de sql-insertquery
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
//* maak de sql-query gereed om te worden afgevuurd op de mysql-database
$statement = $pdo->prepare($sql);

//* de bindvalue method bind de $_POST waarde aan de placeholder 
$statement->bindValue(":Name", $_POST['Name'], PDO::PARAM_STR);
$statement->bindValue(":Networth", $_POST['Networth'], PDO::PARAM_STR);
$statement->bindValue(":Age", $_POST['Age'], PDO::PARAM_STR);
$statement->bindValue(":MyCompany", $_POST['MyCompany'], PDO::PARAM_STR);

//* voer de sql-query uit op de database
$statement->execute();

//* link door naar read.php voor een overzicht van de gegevens in tabel persoon
header("location: read.php");