<?php

namespace App\Controllers\Mobile;

use App\Controllers\BaseController;

class InfoDeveloper extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Info Developer'
        ];

        return view('mobile/developer/index', $data);
    }
}
