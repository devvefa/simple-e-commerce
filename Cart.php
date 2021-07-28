<?php
class Cart{
    private $productId=[];
    private $price;
    private $quantity ;

    public function __construct($id, array $productId, $price, $quantity)
    {
        $this->id = $id;
        $this->productId = $productId;
        $this->price = $price;
        $this->quantity = $quantity;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }




}
