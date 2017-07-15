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
}

