<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');
?>
<style>
table{
    border-collapse: collapse;
    width: 70%;
    min-width: 800px;
}

td{
    border: 1px solid lightblue;
    padding: 5px 8px;
}
a.btn{
    border: 1px solid lightblue;
    padding: 5px 15px;
    font-size: 20px;
    border-radius: 7px;
    display: inline-block;
    box-shadow: 0px 0px 6px green;
    background: linear-gradient(45deg, red, transparent,purple);
    font-family: "標楷體";
    /* transition: all 0.5s; */
    top:0px;
    right:0px;
}

a.btn:hover{
    transform: scale(1.2);
    filter: brightness(1.5);
    position:relative ;
    /* transition: all 0.5s; */
    top:-5px;
    right:-10px;
}
</style>

<h1>學生列表</h1>
<a href="insert_form.php" class='btn' >新增學生資料</a>
<table>
    <tr>
        <td>序號</td>
        <td>學號</td>
        <td>班級座號</td>
        <td>姓名</td>
        <td>出生年月日</td>
        <td>身分證號碼</td>
        <td>住址</td>
        <td>家長</td>
        <td>電話</td>
        <td>科別</td>
        <td>畢業國中</td>
        <td>編輯</td>
        <td>刪除</td>
    </tr>
<?php 
    $sql="select * from students order by id desc ";
    $rows=$pdo->query($sql)->fetchAll(pdo::FETCH_ASSOC);
    foreach($rows as $row){
?>
    <tr>
        <td><?=$row['id'];?></td>
        <td><?=$row['uni_id'];?></td>
        <td><?=$row['seat_num'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['birthday'];?></td>
        <td><?=$row['national_id'];?></td>
        <td><?=$row['address'];?></td>
        <td><?=$row['parent'];?></td>
        <td><?=$row['telphone'];?></td>
        <td><?=$row['major'];?></td>
        <td><?=$row['secondary'];?></td>
        <td><a href='edit_form.php?id=<?=$row['id'];?>'>編輯</a></td>
        <td><a href='del.php?id=<?=$row['id'];?>'>刪除</a></td>
    </tr>
    <?php
    }
    ?>
    
</table>