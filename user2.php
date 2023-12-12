<?php
// if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['age']) != '') {
//     echo 'Lastname : '.$_POST['lastname'].'<br/>';
//     echo 'Firstname : '.$_POST['firstname'].'<br/>';
//     echo 'Age : '.$_POST['age'].'<br/>';   
// } 
// var_dump($_POST);
if(isset($_POST["lastname"]) && !empty($_POST["lastname"]) && isset($_POST["Firstname"]) && !empty($_POST["Firstname"])&& isset($_POST["age"]) && !empty($_POST["age"])){
//    var_dump($_POST);
}{ 
   session_start();
   $_SESSION["lastname"]=$_POST["lastname"];
   $_SESSION["Firstname"]=$_POST["Firstname"];
   $_SESSION["age"]=$_POST["age"];
//    var_dump($_SESSION);
}
header("Location: ./index.php");
?>