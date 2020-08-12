<?php
function add($item1, $item2, $item3)
{
    $sum = $item1 + $item2 + $item3;
    return $sum;
}

function totalTax($sum)
{
    $price = floor($sum * 1.1);
    return $price;
}

function displayMsg($name, $sum, $price)
{
    $msg = <<< EOM
{$name}様
ご注文承りました。
合計{$sum}円です。
{$price}円(税込)になります。\n
EOM;
    echo $msg;
}