<?php
    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } //заносим введенный пользователем логин в переменную $email, если он пустой, то уничтожаем переменную
    if (isset($_POST['pass'])) { $pass=$_POST['pass']; if ($pass =='') { unset($pass);} }
    if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
    if (isset($_POST['surname'])) { $surname=$_POST['surname']; if ($surname =='') { unset($surname);} }
    //заносим введенный пользователем пароль в переменную $pass, если он пустой, то уничтожаем переменную
    if (empty($email) or empty($pass) or empty($name) or empty($surname)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);
 //удаляем лишние пробелы
    $email = trim($email);
    $pass = trim($pass);
    $name = trim($name);
    $surname = trim($surname);

 // подключаемся к базе
    require_once('db_connect.php');
    $db = new DB_CONNECT();// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysql_query("SELECT `id` FROM `users` WHERE `e-mail`='$email'");
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) echo "Already exists";
 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO `users` (`name`, `surname`, `e-mail`, `password`) VALUES('$name','$surname','$email','$pass')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>