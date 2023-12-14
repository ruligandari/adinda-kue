<?php

namespace App\Controllers\Mobile;

use App\Controllers\BaseController;

use App\Models\ProfilePerusahaanModel;

class ProfileController extends BaseController
{
    public function index()
    {
        $model = new ProfilePerusahaanModel();

        $profile = $model->find('1');
        $data = [
            'title' => 'Profile',
            'profile' => $profile
        ];
        return view('mobile/profile/index', $data);
    }
}
