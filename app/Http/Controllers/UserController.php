<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'categories' => User::all(),
        ];
        return view('User.index', $data);
    }

    public function create(){
        return view('User.create');
    }
}
