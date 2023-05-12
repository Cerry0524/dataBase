<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";//dbname是資料庫名稱不是資料表

$pdo=new PDO($dsn,'root','');//資料庫設定資料，管理者帳號，密碼

$sql="select * from students limit 1";//用php把資料送到sql執行
//限制取回的資料型態
$row=$pdo->query($sq ,PDO::FETCH_NUM)->fetch();//fetch()怎麼拿到資料，寫在前面也可以

echo "<pre>";
print_r($row);
echo "</pre>";
