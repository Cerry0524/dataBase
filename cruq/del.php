<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');

$del="delete from students where `id`='{$_GET['id']}'";//命名變數

$pdo->exec($del);//執行變數

header("location:crud.php");//返回crud.php頁面

?>