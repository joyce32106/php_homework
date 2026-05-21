<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include("db.php");

$subject = $_POST['subject'];
$message = $_POST['message'];
$delay = $_POST['delay'];
$random_count = $_POST['random_count'];

// 隨機或全部
if($random_count == ""){
    $sql = "SELECT * FROM email_list";
}else{
    $sql = "SELECT * FROM email_list ORDER BY RAND() LIMIT $random_count";
}

$result = $conn->query($sql);

$total = $result->num_rows;
$count = 0;

while($row = $result->fetch_assoc()){

    $mail = new PHPMailer(true);

    try {
        // SMTP設定
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'joycehong21@gmail.com';
        $mail->Password = 'pmcimnrrdgydeogh';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // 收件人
        $mail->setFrom('joycehong21l@gmail.com', '垃圾郵件系統');
        $mail->addAddress($row['email']);

        // 內容
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();

        $count++;
        $progress = ($count / $total) * 100;

        echo "寄送給：" . $row['email'] . "<br>";
        echo "進度：" . round($progress) . "%<br><hr>";

        sleep($delay);

    } catch (Exception $e) {
        echo "寄送失敗: {$mail->ErrorInfo}<br>";
    }
}

echo "全部寄送完成";
?>