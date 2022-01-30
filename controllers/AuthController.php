<?php

namespace app\controllers;

use app\core\Request;
use app\models\User;
use app\core\Application;

class AuthController extends \app\core\Controller
{

    public function login()
    {
        $this->setLayout('auth');
        return $this->view('login');
    }

    public function register(Request $request)
    {
        $user = new User();

        if ($request->isPost())
        {
            $user->loadData($request->getBody());
            if ($user->validate() && $user->save())
            {
                Application::$app->response->redirect('/');

                
            }

            return $this->view('register', [
                'model' => $user
            ]);
        }
        $this->setLayout('auth');
        return $this->view('register', [
            'model' => $user
        ]);
    }

}