<?php

namespace app\controllers;

use app\core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $prams = [
            'name' => "AMR"
        ];

        return self::view('home', $prams);

    }

}