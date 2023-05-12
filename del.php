<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');

$del="delete from students where `id`='{$_GET['id']}'";

$pdo->exec($del);

header("location:crud.php");

?>