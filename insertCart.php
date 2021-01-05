<?php
session_start();
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$img = $_POST['image'];

$product = array($name,$price,$quantity,$img);

 $_SESSION['name'] = $product;
  header('location:shop.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>