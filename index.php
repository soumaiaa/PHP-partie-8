<?php
session_start();
// var_dump($_SERVER['User_Agent']);
// var_dump($_SERVER['Adresse_ip']);
// var_dump($_SERVER['SERVER_NAME']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <div>
        <p>User Agent :</p>
        <p>Adresse ip :</p>
        <p>Nom du serveur :</p>
    </div> -->
    <?php
    if (isset($_SESSION["lastname"]) && !empty($_SESSION["lastname"]) && isset($_SESSION["firstname"]) && !empty($_SESSION["firstname"]) && isset($_SESSION["age"]) && !empty($_SESSION["age"])) {
        echo $_SESSION["lastname"]."<br>";
        echo $_SESSION["firstname"]."<br>";
        echo $_SESSION["age"]."<br>";
        ?>
        
    <?php
    } else {
    ?>
        <form action="./user2.php" method='post'>

            <label for="lastname">Lastname:</label><br>
            <input type="text" id="lastname" name="lastname"><br>

            <label for="firstname">Firstname:</label><br>
            <input type="text" id="firstname" name="firstname"><br>

            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age"><br>

            <input type="submit" value="Submit">
        </form>
    <?php
    }
    ?>
    <form action="./user.php" method='post'>
        <?php
        if (isset($_COOKIE["login"]) && isset($_COOKIE["password"])) {
            // var_dump ($_COOKIE["login"]);
            // var_dump($_COOKIE["password"]);
        }
      
        ?>
        <label for="login">Login:</label><br>
        <input type="text" id="login" name="login"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Submit">

    <p><?php echo $_COOKIE["login"] ?></p>
    <p><?php echo $_COOKIE["password"]?></p>
    </form>
    <!-- <div>
        <a href="./user3.php">modifier</a>
    </div> -->
</body>

</html>