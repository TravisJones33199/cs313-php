<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
</head>
<body>
    <h1>Shop</h1>
    <a href="cart.php">Cart</a>


    <form method="post">
        <button type="submit" name="item[]" value="Item 1">Item 1</button>
        <button type="submit" name="item[]" value="Item 2">Item 2</button>
        <button type="submit" name="item[]" value="Item 3">Item 3</button>
        <button type="submit" name="item[]" value="Item 4">Item 4</button>
        <button type="submit" name="item[]" value="Item 5">Item 5</button>
    </form>

    <?
    array_push($_SESSION['cart'], $_POST["item"]);
    ?>
</body>
</html>