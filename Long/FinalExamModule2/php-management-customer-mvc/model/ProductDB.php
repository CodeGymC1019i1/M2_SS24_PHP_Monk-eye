<?php

namespace Model;

class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($product)
    {
        $sql = "INSERT INTO products(product_name,type_of_product,price,number,create_date,description) VALUES (?,?,?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->product_name);
        $statement->bindParam(2, $product->type_of_product);
        $statement->bindParam(3, $product->price);
        $statement->bindParam(4, $product->number);
        $statement->bindParam(5, $product->create_date);
        $statement->bindParam(6, $product->description);
        return $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['product_name'], $row['type_of_product'], $row['price'],$row['number'],$row['create_date'],$row['description']);
            $product->product_code = $row['product_code'];
            $products[] = $product;
        }
        return $products;
    }

    public function get($product_code){
        $sql = "SELECT * FROM products WHERE product_code = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product_code);
        $statement->execute();
        $row = $statement->fetch();
        $product = new Product($row['product_name'], $row['type_of_product'], $row['price'],$row['number'],$row['create_date'],$row['description']);
        $product->product_code = $row['product_code'];
        return $product;
    }


    public function delete($product_code){
        $sql = "DELETE FROM products WHERE product_code = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product_code);
        return $statement->execute();
    }

    public function update($product_code, $product)
    {
        $sql = "UPDATE products SET product_name = ?, type_of_product = ?, price = ?,number = ?,create_date = ?,description = ? WHERE product_code = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->product_name);
        $statement->bindParam(2, $product->type_of_product);
        $statement->bindParam(3, $product->price);
        $statement->bindParam(4, $product->number);
        $statement->bindParam(5, $product->create_date);
        $statement->bindParam(6, $product->description);
        $statement->bindParam(7, $product_code);
        return $statement->execute();
    }
    public function search($product_name){
        $sql = "SELECT * FROM products WHERE product_name = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product_name);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach($result as $item){
            $product = new Product($item['product_name'], $item['type_of_product'], $item['price'],$item['number'],$item['create_date'],$item['description']);
            array_push($products,$product);
        }
        return $products;
    }

}