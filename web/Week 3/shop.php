<?php
session_start();

if (!isset($_SESSION['cart'])) {
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

    <form method="post">
        <button type="submit" name="item[]" value="Item 1">Item 1</button>
        <button type="submit" name="item[]" value="Item 2">Item 2</button>
    </form>

    <?
    array_push($_SESSION['cart'], $_POST['item']);

    print_r($_SESSION['cart']);
    ?>
</body>
</html>