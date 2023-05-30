<?php



include("database_connect.php");

    
$cursor = $collections->find(['quantity'=>0],['projection'=>['name'=>1, "_id"=>0, "price"=>1, 'vendor'=>1]]);

echo "<table border='1'>";
echo "<tr><th colspan=3>Відсутні на складі товари</th></tr>";
echo "<tr><td>Назва товару</td><td>Ціна</td><td>Поставник</td></tr>";
foreach($cursor as $document){
    $doccontent = [$document['name'], $document['price'], $document['vendor']];
    echo "<tr><td>$doccontent[0]</td><td>$doccontent[1]</td><td>$doccontent[2]</td></tr>";
}
echo "</table>";

