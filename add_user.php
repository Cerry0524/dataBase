<?php
$dsn="mysql:host=location;charset=utf8;dbname=coffee";
$pdo=new PDO($dsn,'root','');

$sql="INSERT INTO `members`(`name`, `acc`, `password`, `email`, `tel`) 
                    VALUES ('{$_POST['name']}','{$_POST['acc']}','{$_POST['password']}','{$_POST['email']}','{$_POST['tel']}')";
$pdo->exec($sql);

// echo $sql;
header("location:index.php");

?>