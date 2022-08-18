<?php

namespace app\models\entities;
use app\engine\Session;
use app\models\Model;

class User extends Model
{
    protected $id;
    protected $login;
    protected $pass;

    protected $props = [
        'login' => false,
        'pass' => false,
        'hash' => false,
    ];


    public function __construct($login = null, $pass = null)
    {
        $this->login = $login;
        $this->pass = $pass;
    }
}