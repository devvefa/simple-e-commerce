<?php

namespace Cart;
class CartManager implements ICart
{


    public function add(int $id, int $quantity)
    {
        session_start();

        if (($this->IfExist( $id))){
            $this->update( $id, $quantity);

        }else
            array_push($_SESSION['cart'],array("id"=>$id,"quantity"=>$quantity));

    }

    public function remove(int $id)
    {

        foreach ($_SESSION["cart"] as $key => $val) {

            if ($val["id"] ===$id)
            {
               unset($_SESSION["cart"][$key]);
            }
        }

    }

    public function update(int $id, $quantity)
    {
        foreach( $_SESSION["cart"] as $k => $value){

            if($value['id'] === $id){
                $_SESSION["cart"][$k]['quantity'] = $quantity;
            }
        }
    }



    public function IfExist(int $id)
    {
        foreach ($_SESSION["cart"] as $key => $val)
        {

            if ($val["id"] ==$id)
            {
                return true;
            }

        }
         return false;

    }



    public function getAll()
    {
       return $_SESSION["cart"];
    }

    public function clear()
    {
        session_start();
        unset($_SESSION['cart']);
    }
}