<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
    <h1>Cart</h1>
    <a href="shop.php">Shop</a>
    <?
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $x) {
            if ($x[0] != 0) {
            echo "<br>".$x[0];
            }
        }
    }
    else {
        echo "Cart is empty";
    }
    ?>
</body>
</html>