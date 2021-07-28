<?php
class Db {


    public static $list = [
        '1'=> [
            'id'=>1, 'img'=>'product1.jpg', 'name'=> 'Iphone XS', 'price'=>100.00, 'currency'=>'TRY', 'status'=>1,
            'category'=>'cellphone'
        ],
        '2'=> [
            'id'=>2, 'img'=>'product2.jpg', 'name'=>'Iphone', 'price'=>90.25, 'currency'=>'TRY', 'status'=>1,'category'=>'cellphone'
        ],
        '3'=> [
            'id'=>3, 'img'=>'product5.jpg','name'=>'Wiskas Cat Feed', 'price'=>240.5, 'currency'=>'TRY', 'status'=>1,
            'category'=>'animalFood'
        ],
        '4'=> [
            'id'=>4, 'img'=>'product3.jpg', 'name'=>'Wiskas Dog Dry Feed', 'price'=>125.75, 'currency'=>'TRY', 'status'=>1,
            'category'=>'animalFood'

        ],
        '5'=> [
            'id'=>5, 'img'=>'product4.jpg', 'name'=>'Wiskas Dog Dry Feed Premium', 'price'=>125.75, 'currency'=>'TRY', 'status'=>1,
            'category'=>'animalFood'

        ],

    ];

    public static function  getById($id): array
    {

        return static::$list[$id];

    }

    public function all(){
        return static::$list;
    }
}