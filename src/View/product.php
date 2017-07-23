<?php
include ("../Controllers/ProductsController.php");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/15/2017
 * Time: 10:59 PM
 */
if (isset($_POST['submit'])) {
    $data = new ProductsController();
    $name = $_POST['name'];
    $price = $_POST['price'];
    $data->addProduct($name,$price);
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="POST" role="form">
    <legend>Add product</legend>

    <div class="form-group">
        <label for="">name</label>
        <input type="text" name = "name" class="form-control" id="" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">price</label>
        <input type="text" name = "price" class="form-control" id="" placeholder="Input field">
    </div>
    <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

