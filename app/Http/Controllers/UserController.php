<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use DB;

class UserController extends Controller
{
    public function index()
    {
        $userAll = User::all();
        return view('admin.user.index', compact('userAll'));
    }

    public function activate(User $user)
    {
        $user->is_active = true;
        $user->save();
        return redirect('user');
    }
}
