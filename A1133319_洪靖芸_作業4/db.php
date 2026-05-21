<?php
$conn = new mysqli("localhost", "root", "", "mail_system");

if($conn->connect_error){
    die("連線失敗");
}
?>
