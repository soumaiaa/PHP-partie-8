<?php



if(isset($_POST["login"]) && !empty($_POST["login"]) && isset($_POST["password"]) && !empty($_POST["password"])){
    setcookie("login", $_POST["login"],time() + (86400 * 30),"/");
    setcookie("password",$_POST["password"],time() + (86400 * 30),"/");
   
}


header("Location: ./index.php");      
?>