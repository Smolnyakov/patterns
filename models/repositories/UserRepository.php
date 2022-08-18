<?php

namespace app\models\repositories;

use app\engine\App;
use app\models\entities\User;
use app\models\Repository;

class UserRepository extends Repository
{
    public function Auth($login, $pass) {
        $user = $this->getWhere('login', $login);
        
        if ($user != false && password_verify($pass, $user->pass)) {
            App::call()->session->set('login', $login);
            return true;
        }
        return false;
    }

    public function isAuth() {
        return isset($_SESSION['login']);
    }

    public function getName() {
        return $_SESSION['login'];
    }

    protected function getEntityClass() {
        return User::class;
    }

    protected function getTableName()
    {
        return 'users';
    }
    
}