<?php
include("db.php");

$email = $_POST['email'];

$sql = "INSERT INTO email_list(email)
VALUES('$email')";

$conn->query($sql);

echo "新增成功";

header("refresh:2;url=index.php");
?>
