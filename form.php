<?php
session_start();

// 沒登入就回登入頁
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>報名表</title>
</head>
<body>

<h2>夏令營報名表</h2>

<form method="post" action="result.php">

姓名：<input type="text" name="name"><br><br>

性別：
<input type="radio" name="gender" value="男">男
<input type="radio" name="gender" value="女">女<br><br>

興趣：
<input type="checkbox" name="interest[]" value="運動">運動
<input type="checkbox" name="interest[]" value="音樂">音樂
<input type="checkbox" name="interest[]" value="程式">程式<br><br>

營隊梯次：
<select name="camp">
    <option value="第一梯">第一梯</option>
    <option value="第二梯">第二梯</option>
</select><br><br>

<input type="submit" value="送出報名">

</form>

</body>
</html>