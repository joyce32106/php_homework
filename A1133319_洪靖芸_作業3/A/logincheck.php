<?php
session_start();

$id = $_POST["id"];
$pw = $_POST["pw"];

if ($id == "student" && $pw == "123") {
    $_SESSION["role"] = "student";
} elseif ($id == "teacher" && $pw == "123") {
    $_SESSION["role"] = "teacher";
} elseif ($id == "admin" && $pw == "123") {
    $_SESSION["role"] = "admin";
} else {
    echo "登入失敗<br>";
    echo "<a href='login.php'>回登入頁</a>";
    exit();
}

setcookie("user_id", $id, time()+3600);

if ($_SESSION["role"] == "student") {
    header("Location: student.php");
} elseif ($_SESSION["role"] == "teacher") {
    header("Location: teacher.php");
} else {
    header("Location: admin.php");
}

exit();
?>
