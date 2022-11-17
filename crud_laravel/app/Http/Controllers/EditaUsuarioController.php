<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditaUsuarioController extends Controller
{
    public function updateUser()
    {
       return view('editarUsuario');
    }
}
