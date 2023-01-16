<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        $users = User::orderByDesc('status')->orderByDesc('role')->orderByDesc('salary')->get();
        return view('users.index', compact('users'));
    }
}
