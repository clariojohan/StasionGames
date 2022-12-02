<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function viewAccount()
    {
        return view('account');
    }

    public function viewAdmin()
    {
        return view('admin');
    }
}
