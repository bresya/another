<?php 

session_start();
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } 
    if (isset($_POST['surname'])) { $surname = $_POST['surname']; if ($surname == '') { unset($surname);} } 
    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } 
    if (isset($_POST['pass'])) { $pass=$_POST['pass']; if ($pass =='') { unset($pass);} }
    if (empty($email) or empty($pass)) 
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);

    $email = trim($email);
    $pass = trim($pass);
    $name = trim($name);
    $surname= trim($surname);

    require_once('db_connect.php');
    $db = new DB_CONNECT();

 	mysql_query("UPDATE `users` SET `name` = '$name', `surname` = '$surname', `password` = '$pass' WHERE `e-mail`='$email'") or die(mysql_error()); 

 	header("Location: congrats.php");
?>