<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\UserDataTable;

class UserController extends Controller
{
    // NAMA: MUHAMAD HUDANSAH
    // NIM: 6706223049
    // KELAS: 46-03
    
    // public function index() {
    //     $users = User::all();
    //     return view('user.daftarPengguna', compact('users'));
    // }
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.daftarPengguna');
    }

    public function showUser($username) {
        $user = User::where('username', $username)->firstOrFail();
        return view('user.infoPengguna', compact('user'));
    }

    public function create()
    {
    return view('user.registrasi');
    }

    public function store(Request $request)
    {
        
    }

    public function show()
    {
        
    }
}