<?php
include ("../Model/Product.php");
include ("../Controllers/AppControllers.php");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/15/2017
 * Time: 10:36 PM
 */
class ProductsController extends AppController
{
    public function __construct() {
        parent::__construct();
    }

    //Add product function
    public function addProduct($name,$price){
        $addProduct = new Product();
        $data = $addProduct->addProduct($name,$price);
        $this->execute($data);

        if($this->execute($data)) {
            return $this->successMessage("The product has been save");
        }else {
            return $this->failedMessage("The product can be save");
        }
    }
}
