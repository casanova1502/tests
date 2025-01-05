<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
print "私の名前は、" . $name;
echo "<br>";
$goods = htmlspecialchars($_GET['goods_a'], ENT_QUOTES);
print "ご注文の商品は、" . $goods;

echo "<br>";
$order = htmlspecialchars($_GET['order'], ENT_QUOTES);
print "注文数は、" . $order;
echo "<br>";