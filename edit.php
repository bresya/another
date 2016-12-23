<?php 
session_start();
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $pass = $_POST['pass'];
    $id = $_POST['id'];
    
    $id = stripslashes($id);
    $id = htmlspecialchars($id);
    $pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);


    require_once('db_connect.php');
    $db = new DB_CONNECT();

    mysql_query("UPDATE `users` SET `name` = '$name', `surname` = '$surname', `password` = '$pass' WHERE `id`='$id'") or die(mysql_error()); 

 ?>