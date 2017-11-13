<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function indexUser()
    {
        $dataUser = User::all();
        return view('backend.user.indexUser', compact('dataUser'));
    }
}
