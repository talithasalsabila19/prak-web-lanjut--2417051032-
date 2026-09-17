<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Talitha Roihanah Salsabila',
            'kelas' => 'Ilkomp B',
            'npm' => '2417051032'
        ];

        return view('profile', $data);
    }
}