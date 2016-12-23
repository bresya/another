<?php 
session_start();
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $pass = $_POST['pass'];
    $email= $_POST['email'];
    
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);


    require_once('db_connect.php');
    $db = new DB_CONNECT();
    mysql_query("INSERT INTO `users` (`name`,`surname`,`password`,`e-mail`) VALUES ('$name','$surname','$pass','$email')") or die(mysql_error()); 

 ?>