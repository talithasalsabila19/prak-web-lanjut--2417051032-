<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function create()
    {
        $kelas = Kelas::all();

        return view('create_user', compact('kelas'));
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->nama,
            'nim' => $request->npm,
            'kelas_id' => $request->kelas_id
        ]);

        return redirect('/user');
    }

    public function index()
    {
        $users = $this->userModel->getUser();

        return view('list_user', compact('users'));
    }
}