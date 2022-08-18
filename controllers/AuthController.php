<?php

namespace app\controllers;

use app\models\repositories\UserRepository;
use app\engine\App;

class AuthController extends Controller
{

    public function actionLogin() 
    {
        $login = App::call()->request->getParams()['login'];
        $pass = App::call()->request->getParams()['pass'];

        if (App::call()->userRepository->Auth($login, $pass)) {
            header("Location: /");
            die();
        } else {
            die("Не верный логин или пароль");
        }
    }

    public function actionLogout()
    {
        App::call()->session->regenerate();
        App::call()->session->destroy();
        header("Location: /");
        die();
    }
}