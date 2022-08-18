<?php

namespace app\controllers;

use app\engine\App;
use app\models\repositories\CartRepository;
use app\models\entities\Cart;

class CartController extends Controller
{
    public function actionIndex()
    {
        $session_id = session_id();
        $cart = App::call()->cartRepository->getCart($session_id);
        echo $this->render('cart', [
            'cart' => $cart
        ]);
    }

    public function actionAdd()
    {
        $id = App::call()->request->getParams()['id'];
        $session_id = App::call()->session->getId();

        $cart = new Cart($session_id, $id);
        App::call()->cartRepository->save($cart);

        $response = [
            'status' => 'ok',
            'count' => App::call()->cartRepository->getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        die();
    }

    public function actionDelete()
    {
        $id = App::call()->request->getParams()['id'];
        $session_id = App::call()->session->getId();

        $error = "ok";
        $cart = App::call()->cartRepository->getOne($id);

        if (!$cart) {
            $error = 'Нет такого товара';
        } else 
            if ($session_id == $cart->session_id) {
                App::call()->cartRepository->delete($cart);
            } else {
                $error = "Нет прав доступа";
            }

        $response = [
            'status' => $error,
            'count' => App::call()->cartRepository->getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        die();
    }
}