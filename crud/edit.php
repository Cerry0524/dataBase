<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');


$edit="update students set 
        `uni_id`='{$_POST['uni_id']}',
        `seat_num`='{$_POST['seat_num']}',
        `name`='{$_POST['name']}',
        `birthday`='{$_POST['birthday']}',
        `national_id`='{$_POST['national_id']}',
        `address`='{$_POST['address']}',
        `parent`='{$_POST['parent']}',
        `telphone`='{$_POST['telphone']}',
        `major`='{$_POST['major']}',
        `secondary`='{$_POST['secondary']}'
    where `id`='{$_POST['id']}'";

$pdo->exec($edit);//執行變數

header("location:crud.php");//返回crud.php頁面

