<?php

namespace Controller;

use Model\Product;
use Model\ProductDB;
use Model\DBConnection;

class ProductController
{

    public $productDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=exam", "root", "long1996");
        $this->productDB = new ProductDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $product_name = $_POST['product_name'];
            $type_of_product = $_POST['type_of_product'];
            $price = $_POST['price'];
            $number = $_POST['number'];
            $create_date = $_POST['create_date'];
            $description = $_POST['description'];

            $product = new Product($product_name,$type_of_product,$price,$number,$create_date,$description);
            $this->productDB->create($product);
            include 'view/add.php';
            header('Location: index.php');
        }
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include 'view/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $product_code = $_GET['product_code'];
            $product = $this->productDB->get($product_code);
            include 'view/delete.php';
        } else {
            $product_code = $_POST['product_code'];
            $this->productDB->delete($product_code);
            header('Location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $product_code = $_GET['product_code'];
            $product = $this->productDB->get($product_code);
            include 'view/edit.php';
        } else {
            $product_code = $_POST['product_code'];
            $product = new Product($_POST['product_name'], $_POST['type_of_product'], $_POST['price'],$_POST['number'],$_POST['create_date'],$_POST['description']);
            $this->productDB->update($product_code, $product);
            header('Location: index.php');
        }
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $product_name = $_GET['product_name'];
            $this->productDB->search($product_name);
            include 'view/search.php';
        } else {
            $product_name = $_POST['product_name'];
            $this->productDB->search($product_name);
            include 'view/search.php';
        }
    }
}