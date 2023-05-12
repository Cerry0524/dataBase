<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');

$insert="insert into students ( `uni_id`, `seat_num`, `name`, `birthday`, `national_id`, `address`, `parent`, `telphone`, `major`, `secondary` )
                        vaule( '{$_GET['uni_id']}', '{$_GET['seat_num']}', '{$_GET['name']}', '{$_GET['birthday']}', '{$_GET['national_id']}', '{$_GET['address']}', '{$_GET['parent']}', '{$_GET['telphone']}', '{$_GET['major']}', '{$_GET['secondary']}', '{$_GET['']}', )";//命名變數

$pdo->exec($insert);//執行變數

header("location:crud.php");//返回crud.php頁面

?>