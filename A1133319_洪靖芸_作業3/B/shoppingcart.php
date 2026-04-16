<?php
$total = 0;

echo "<h2>購物車</h2>";
echo "<table border='1'>";
echo "<tr><th>刪除</th><th>商品</th><th>價格</th><th>數量</th></tr>";

each ($_COOKIE as $key => $value) {

    if (is_array($value)) {

        echo "<tr>";

        echo "<td><a href='delete.php?Id=$key'>刪除</a></td>";
        echo "<td>".$value["Name"]."</td>";
        echo "<td>".$value["Price"]."</td>";
        echo "<td>".$value["Quantity"]."</td>";

        $total += $value["Price"] * $value["Quantity"];

        echo "</tr>";
    }
}

echo "</table>";
echo "<h3>總金額：".$total."</h3>";

echo "<a href='catalog.php'>繼續購物</a>";
?>
