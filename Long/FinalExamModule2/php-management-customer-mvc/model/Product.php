<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 01/11/2018
 * Time: 22:39
 */
namespace Model;

class Product
{
    public $product_code;
    public $product_name;
    public $type_of_product;
    public $price;
    public $number;
    public $create_date;
    public $description;

    public function __construct($product_name,$type_of_product,$price,$number,$create_date,$description)
    {
        $this->product_name = $product_name;
        $this->type_of_product = $type_of_product;
        $this->price = $price;
        $this->number = $number;
        $this->create_date = $create_date;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->product_code;
    }

    /**
     * @param mixed $product_code
     */
    public function setProductCode($product_code)
    {
        $this->product_code = $product_code;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @return mixed
     */
    public function getTypeOfProduct()
    {
        return $this->type_of_product;
    }
}