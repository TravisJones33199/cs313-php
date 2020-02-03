<?php
session_start();

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
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

    <div class="error">
    <?
    if (!empty($_POST["item"])) {

        foreach ($_SESSION['cart'] as $x) {
            if ($x[0] == $_POST["item"][0]) {
                echo $x[0]." is already in cart";
                return;
            }
        }

        array_push($_SESSION['cart'], $_POST["item"]);   
    }
    ?>
    </div>

    
</body>
</html>