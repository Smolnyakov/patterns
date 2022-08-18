<?php

namespace app\models\entities;
use app\models\Model;

class Cart extends Model
{
    protected $id;
    protected $user_session;
    protected $user_name;
    protected $user_surname;
    protected $phone;
    protected $status;
    protected $total_price;

    protected $props = [
        'user_session' => false,
        'user_name' => false,
        'user_surname' => false,
        'phone' => false,
        'status' => false,
        'total_price' => false,
    ];

    public function __construct($user_session = null, $user_name = null, $user_surname = null, $phone = null, $status = null, $total_price = null)
    {
        $this->user_session = $user_session;
        $this->user_name = $user_name;
        $this->user_surname = $user_surname;
        $this->phone = $phone;
        $this->status = $status;
        $this->total_price = $total_price;
    }
    
    protected static function getTableName()
    {
        return 'orders';
    }
}