<?php

$price = $_GET["low_price"];
$hprice = $_GET["high_price"];
$price = $price+0;
$hprice = $hprice+0;

include("database_connect.php");

$cursor = $collections -> find(['price'=>['$gt'=>$price-1, '$lt'=>$hprice+1]],['projection'=>['name'=>1,'price'=>1,'quantity'=>1,'vendor'=>1, 'category'=>1,'_id'=>0],'sort'=>['price'=>1]]);
$tableRes = "";
echo "<table border='1'>";
echo"<tr><th colspan='5'>Товари ціною від $price до $hprice</th></tr>";
echo "<tr><td>Назва товару</td><td>Ціна</td><td>Кількість</td><td>Поставник</td><td>Категорія</td></tr>";
foreach($cursor as $document){
    $doccontent = [$document['name'], $document['price'],$document['quantity'], $document['vendor'], $document['category']];
    $tableRes .= "<tr><td>$doccontent[0]</td><td>$doccontent[1]</td><td>$doccontent[2]</td><td>$doccontent[3]</td><td>$doccontent[4]</td></tr>";
}
echo $tableRes;
echo "</table>";
echo "<script>localStorage.setItem('$price+$hprice','$tableRes')</script>";

