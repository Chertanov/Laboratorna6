<?php

include('database_connect.php');

$cursor = $collections->distinct("vendor");
echo "<table border='1'>";
echo "<tr><th>Поставники магазину</th></tr>";
foreach($cursor as $row){
    echo "<tr><td>$row</td></tr>";
}
echo "</table>";

