<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
</head>
<body>
    <h1>會員登入</h1>
    <p>
    <?php
    if(isset($_GET['error'])){
        switch($_GET['error']){
            case 1:
                echo "帳號密碼錯誤";break;
            case 2:
                echo "無法連線，請稍後再試";break;
            default:
                echo "未知錯誤，請連線管理員";break;
        }
    }
    ?>
    </p>
    <form action="login.php" method="post">
    <p>
        <label for="acc">
        </label><input type="text" name="acc" id="acc">
    </p>
    <p>
        <label for="pw">
        </label><input type="text" name="pw" id="pw">
    </p>
    <p>
        <input type="submit" value="確認">

    </p>

    </form>
</body>
</html>