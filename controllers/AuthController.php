<?php

namespace app\controllers;

use app\core\Request;
use app\models\User;
use app\models\LoginForm;
use app\core\Application;
use app\core\Response;
use app\core\middlewares\AuthMiddleware;

class AuthController extends \app\core\Controller
{


    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response)
    {
        $this->setLayout('auth');

        $loginForm = new LoginForm();

        if ($request->isPost())
        {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login())
            {
                $response->redirect('/');
                return;
            }
            $this->setLayout('auth');
            return $this->view('login', [
                'model' => $loginForm
            ]);
        }
        $this->setLayout('auth');

        return $this->view('login',[
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $user = new User();

        if ($request->isPost())
        {
            $user->loadData($request->getBody());
            if ($user->validate() && $user->save())
            {
                Application::$app->session->setFlash('success',  'Thanks For Registering');
                Application::$app->response->redirect('/');
                exit;
                
            }

            $this->setLayout('auth');
            return $this->view('register', [
                'model' => $user
            ]);
        }
        $this->setLayout('auth');
        return $this->view('register', [
            'model' => $user
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function profile()
    {
        return $this->view('profile');
    }

}