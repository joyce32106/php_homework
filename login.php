<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    // 帳密（可以自己改）
    if ($user == "admin" && $pass == "1234") {
        $_SESSION["login"] = true;
        header("Location: form.php");
        exit();
    } else {
        $error = "登入失敗！";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登入頁面</title>
</head>
<body>

<h2>登入</h2>

<form method="post">
帳號：<input type="text" name="username"><br><br>
密碼：<input type="password" name="password"><br><br>
<input type="submit" value="登入">
</form>

<span style="color:red;"><?php echo $error; ?></span>

</body>
</html>