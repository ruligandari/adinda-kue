<?php

namespace App\Controllers\Mobile;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('mobile/home/index', $data);
    }
}
