<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShowUsersController extends Controller
{
    public function showUser()
    {
        $users = DB::table('users')->get();
        
        return view('usuarios',['users' => $users]);
    }
}
