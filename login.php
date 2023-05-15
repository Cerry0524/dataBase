<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=coffee";
$pdo=new PDO($dsn,'root','');

$acc=$_POST['acc'];
$pw=$_POST['pw'];



$sql="select count(*) from members where `acc`='$acc' && `password`='$pw'";
// 帳號驗證直接於sql計算大於0的值回傳

$chk=$pdo->query($sql)->fetchColumn();//fetchColumn取回傳的第一筆


if($chk){//if判斷true or false，所以可以直接打變數驗證0與1
    header("location:member.php");
}else{
    header("location:login_form.php?error=1");
}

