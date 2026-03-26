
<?php
// 初始化變數（避免錯誤）
$name = "";
$password = "";
$gender = "";
$camp = "";
$intro = "";
$interests = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $camp = $_POST["camp"];
    $intro = $_POST["intro"];

    if (isset($_POST["interest"])) {
        $interests = $_POST["interest"];
    }

    // 簡單驗證
    if (empty($name) || empty($password)) {
        echo "❌ 請填寫完整資料<br><br>";
    } else {
        echo "<h2>✅ 報名成功！</h2>";
        echo "姓名：" . $name . "<br>";
        echo "性別：" . $gender . "<br>";
        echo "梯次：" . $camp . "<br>";

        echo "興趣：";
        foreach ($interests as $i) {
            echo $i . " ";
        }
        echo "<br>";

        echo "自我介紹：<br>" . nl2br($intro);

        echo "<hr>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>夏令營報名表</title>
</head>
<body>

<h2>🌞 夏令營報名表</h2>

<form method="post" action="">

姓名：<input type="text" name="name" value="<?php echo $name; ?>"><br><br>

密碼：<input type="password" name="password"><br><br>

性別：
<input type="radio" name="gender" value="男" <?php if($gender=="男") echo "checked"; ?>>男
<input type="radio" name="gender" value="女" <?php if($gender=="女") echo "checked"; ?>>女<br><br>

興趣：
<input type="checkbox" name="interest[]" value="運動"
<?php if(in_array("運動", $interests)) echo "checked"; ?>>運動

<input type="checkbox" name="interest[]" value="音樂"
<?php if(in_array("音樂", $interests)) echo "checked"; ?>>音樂

<input type="checkbox" name="interest[]" value="程式"
<?php if(in_array("程式", $interests)) echo "checked"; ?>>程式<br><br>

營隊梯次：
<select name="camp">
    <option value="第一梯" <?php if($camp=="第一梯") echo "selected"; ?>>第一梯</option>
    <option value="第二梯" <?php if($camp=="第二梯") echo "selected"; ?>>第二梯</option>
</select><br><br>

自我介紹：<br>
<textarea name="intro" rows="4" cols="30"><?php echo $intro; ?></textarea><br><br>

<input type="submit" value="送出報名">

</form>

</body>
</html>