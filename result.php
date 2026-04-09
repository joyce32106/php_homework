<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}

$name = $_POST["name"];
$gender = $_POST["gender"];
$camp = $_POST["camp"];
$interests = isset($_POST["interest"]) ? $_POST["interest"] : [];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>報名結果</title>
</head>
<body>

<h2>報名成功！</h2>

姓名：<?php echo $name; ?><br>
性別：<?php echo $gender; ?><br>
梯次：<?php echo $camp; ?><br>

興趣：
<?php
foreach ($interests as $i) {
    echo $i . " ";
}
?>

</body>
</html>