<?php
var_dump("お名前は？");
$name = trim(fgets(STDIN));
var_dump("1つ目の金額を入力");
$item1 = fgets(STDIN);
var_dump("2つ目の金額を入力");
$item2 = fgets(STDIN);
var_dump("3つ目の金額を入力");
$item3 = fgets(STDIN);
require_once __DIR__ . "/chap4_price.php";
$sum = add($item1, $item2, $item3);
$price = totalTax($sum);
displayMsg($name, $sum, $price);