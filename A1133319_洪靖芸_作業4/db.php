<?php
$conn = new mysqli("localhost", "root", "", "midterm");

if($conn->connect_error){
    die("連線失敗");
}
?>
