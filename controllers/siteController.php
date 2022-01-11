<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class siteController extends Controller
{
    public function handleContact(Request $request)
    {
        $body = $request->getBody();

        var_dump($body);
    }

    public function contact()
    {

        return $this->view('contact');

    }
}