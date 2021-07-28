<?php

namespace Cart;
use Product\Product;

interface ICart
{
    public function add(int $id,int $quantity);
    public function remove(int $id);
    public function update(int $id, $qty);
    public function IfExist(int $id);
    public function getAll();
    public function clear();
}