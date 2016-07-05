<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP - Programando com OO</title>
</head>
<body>
<?php
require_once('../src/Candido/Examples/product.php');

$product01 = new Product();

$product01->description = "Chocolate";
$product01->stock = 10;
$product01->price = 7;

echo "O estoque do produto {$product01->description} é de {$product01->stock} unidade.";
echo "<br>";
echo "O valor do produto {$product01->description} é de R$ {$product01->price}";

$product01->increaseStock(50);
$product01->decreaseStock(7);
$product01->readjustPrice(77);

echo "<hr>";
echo "O estoque do produto {$product01->description} é de {$product01->stock} unidade.";
echo "<br>";
echo "O valor do produto {$product01->description} é de R$ {$product01->price}";

?>

</body>
</html>
