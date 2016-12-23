<?php 
session_start();
require_once('db_connect.php');
$db = new DB_CONNECT();

$id = $_POST['id'];

mysql_query("DELETE FROM `users` WHERE `id`='$id'");
 ?>