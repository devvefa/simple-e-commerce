<?php
namespace Product;

class Product implements iProduct {

    private $id;
    private $name;
    private $price;
    private $currency;
    private $status;
    private $img;

    /**
     * @return mixed
     */

    private $category;

    public function __construct($details = null){
        if ($details !== null ){
            $this->id = $details->id;
            $this->name = $details->name;
            $this->price = $details->price;
            $this->currency = $details->currency;
            $this->status = $details->status;
            $this->category = $details->category;
            $this->img = $details->img;

        }
    }
    public function getImg(): string
    {
        return $this->img;
    }
    public function getProductId() : int {
        return $this->id;
    }

    public function getProductList() : array {
        return \Db::$list;
    }

    public function getPrice() : float {
        return $this->price;
    }

    public function getCurrency() : string {
        return $this->currency;
    }

    public function getCategory( ) : string {

        return $this->category;
    }

    public function getName() :  string {

        return $this->name;

    }

    public function productStatus(): string {

    }


}