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
        $query = new AppController();
        $query->execute($data);

        if($query->execute($data)) {
            $query->redirect("/PNVsocial_network/src/view/product.html");
        }else {
            echo "Failed";
        }
    }
}
