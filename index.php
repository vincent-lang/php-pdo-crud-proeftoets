<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/anon.png" type="image/x-icon">
    <title>PDO CRUD</title>
</head>

<body>
    <!-- if you dont know how, look up "php pdo" -->
    <h3>
        PRO CRUD
    </h3>
    <form action="read.php" method="post">
            <label for="firstname">firstname:</label><br>
            <input type="text" id="firstname" name="firstname"><br>
            <br>
            <label for="infix">infix:</label><br>
            <input type="text" id="infix" name="infix"><br>
            <br>
            <label for="lastname">lastname:</label><br>
            <input type="text" id="lastname" name="lastname"><br>
            <br>
            <input type="submit" value="submit">
        </form>
</body>

</html>