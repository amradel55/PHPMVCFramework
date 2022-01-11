<?php

namespace app\controllers;

use app\core\Request;
use app\models\RegisterModel;

class AuthController extends \app\core\Controller
{

    public function login()
    {
        $this->setLayout('auth');
        return $this->view('login');
    }

    public function register(Request $request)
    {
        $registerModel = new RegisterModel();

        if ($request->isPost())
        {
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register())
            {
                return 'Success';
            }
            return $this->view('register', [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->view('register', [
            'model' => $registerModel
        ]);
    }

}