<?php

namespace App\Controllers\Mobile;

use App\Controllers\BaseController;

class InfoAplikasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Info Aplikasi'
        ];

        return view('mobile/aplikasi/index', $data);
    }
}
