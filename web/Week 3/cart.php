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
            echo "<br>".$x."<form method='post'>
            <button type='submit' name='item' value='".$x."'>Remove</button></form>";
        }
    }
    else {
        echo "Cart is empty";
    }
    ?>

    <?
    if (!empty($_POST['item'])) {
        echo array_search($_POST['item'], $_SESSION['cart']);
    }
    ?>
</body>
</html>