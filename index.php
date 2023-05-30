<?php
include('database_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товари в магазині </title>
</head>
<body>
    <form action='1st_task.php' method='get'>
        <label for="vendor_name">Get vendor's names:</label></br>
        <input type=submit></input>
    </form>
    </br>
    </br>
    <form action='2nd_task.php' method='get'>
        <label for="category_name">Get absent items:</label></br>
        <input type=submit></input>
    </form>
    </br>
    </br>
    <form action='3rd_task.php' method='get'>
    <label>Please, choose price range:</label></br>
    <table>
        <tr><td><input type='number'value=1000 id="low_price" name="low_price" oninput="localStorage.setItem('lPrice',  LowerPrice.value)"></input></td>
        <td><input type='number' value=9000 name="high_price" id="high_price" oninput="localStorage.setItem('hPrice',  HigherPrice.value)"></input> </td>
        <td><input type=submit></input></td></tr>
    </table>
    </form>
    </br>
    <table border='1'>
    <tr><th colspan='5' id="ResultHeader"></th></tr>
    <tr><td>Назва товару</td><td>Ціна</td><td>Кількість</td><td>Поставник</td><td>Категорія</td></tr>
    <tbody id="Result"></tbody>
    </table>
    <script>
        const LowerPrice = document.getElementById("low_price");
        const HigherPrice = document.getElementById("high_price");
        LowerPrice.value = localStorage.getItem("lPrice");
        HigherPrice.value = localStorage.getItem("hPrice");
        value = localStorage.getItem(LowerPrice.value+'+'+HigherPrice.value);
        document.getElementById('Result').innerHTML = value;
        document.getElementById('ResultHeader').innerHTML = "Товари ціною від "+ LowerPrice.value+ " до " + HigherPrice.value;
    </script>
</body>
</html>