<?php 
session_start();
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $title = $_POST['title'];
    $text = $_POST['text'];
    $category = $_POST['category'];
    $imglink= $_POST['imglink'];
    $vidlink = $_POST['vidlink'];
    
    $title = stripslashes($title);
    $title = htmlspecialchars($title);
    $text = stripslashes($text);
    $text = htmlspecialchars($text);
    $category = stripslashes($category);
    $category = htmlspecialchars($category);
    $imglink = stripslashes($imglink);
    $imglink = htmlspecialchars($imglink);
    $vidlink = stripslashes($vidlink);
    $vidlink = htmlspecialchars($vidlink);


    require_once('db_connect.php');
    $db = new DB_CONNECT();
    mysql_query("INSERT INTO `news` (`category`,`text`,`title`,`imglink`,`vidlink`) VALUES ('$category','$text','$title','$imglink','$vidlink')") or die(mysql_error()); 

 ?>