<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>郵件寄送系統</title>
</head>
<body>

<h2>新增 Email</h2>

<form action="add_email.php" method="post">
    Email:
    <input type="email" name="email">
    <input type="submit" value="新增">
</form>

<hr>

<h2>寄送郵件</h2>

<form action="send_mail.php" method="post">

    信件標題:
    <input type="text" name="subject"><br><br>

    信件內容:
    <textarea name="message"></textarea><br><br>

    間隔秒數:
    <input type="number" name="delay" value="1"><br><br>

    隨機寄送幾筆:
    <input type="number" name="random_count"><br><br>

    <input type="submit" value="開始寄送">

</form>

</body>
</html>
