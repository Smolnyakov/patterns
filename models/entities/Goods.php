<?php

namespace app\models\entities;
use app\models\Model;

class Goods extends Model
{
    protected $id;
    protected $product_name;
    protected $price;
    protected $product_img;
    protected $description;
    protected $views;

    protected $props = [
        'product_name' => false,
        'price' => false,
        'product_img' => false,
        'description' => false,
        'views' => false
    ];
    
    public function __construct($product_name = null, $price = null, $product_img = null, $description = null, $views = null)
    {
        $this->product_name = $product_name;
        $this->price = $price;
        $this->product_img = $product_img;
        $this->description = $description;
        $this->views = $views;
    }
}