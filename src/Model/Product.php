<?php
include ('../../config/database.php');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/15/2017
 * Time: 10:43 PM
 */
class Product extends DB
{
    var $Product;

    public function __construct() {
        parent::__construct();
    }

    public function addProduct($name,$price) {
        $this->Product = "insert into product(id,name,price) VALUES('','$name','$price') ";
        if (!$this->Product) {
            return false;
        }
        return $this->Product;
    }
}