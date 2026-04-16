<?php
session_start();

if (isset($_POST["item"])) {

    $_SESSION["Quantity"] = $_POST["Quantity"];
    $id = $_POST["item"];
    $_SESSION["ID"] = $id;

    switch ($id) {
        case "S001":
            $_SESSION["Name"] = "10吋平板電腦";
            $_SESSION["Price"] = 12000;
            break;

        case "S002":
            $_SESSION["Name"] = "15.6吋筆電";
            $_SESSION["Price"] = 27000;
            break;

        case "S003":
            $_SESSION["Name"] = "iPhone手機";
            $_SESSION["Price"] = 21000;
            break;
    }

    header("Location: savecart.php");
    exit();
}
?>

<h2>商品選擇</h2>

<form method="post">
<select name="item">
    <option value="S001">10吋平板電腦 - 12000</option>
    <option value="S002">15.6吋筆電 - 27000</option>
    <option value="S003">iPhone手機 - 21000</option>
</select>

數量：
<input type="number" name="Quantity" value="1">

<input type="submit" value="加入購物車">
</form>

<br>
<a href="shoppingcart.php">查看購物車</a>
