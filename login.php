<?php
    session_start();
    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } 
    if (isset($_POST['pass'])) { $pass=$_POST['pass']; if ($pass =='') { unset($pass);} }
    if (empty($email) or empty($pass)) 
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);

    $email = trim($email);
    $pass = trim($pass);

    require_once('db_connect.php');
    $db = new DB_CONNECT();
 
    $result = mysql_query("SELECT * FROM `users` WHERE `e-mail`='$email'") or die(mysql_error()); 
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("AsasasaИзвините, введённый вами email или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$pass) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['e-mail']=$myrow['e-mail']; 
    $_SESSION['id']=$myrow['id'];
    $nick = $_SESSION['e-mail'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    header("Location: index.php");
    }
 else {
    //если пароли не сошлись

    exit ("Извините, введённый вами email или пароль неверный.");
    }
    }
    ?>