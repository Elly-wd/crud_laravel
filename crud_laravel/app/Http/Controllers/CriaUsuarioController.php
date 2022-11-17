<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CriaUsuarioController extends Controller
{
    public function newUser ($nome, $email, $dataNascimento, $senha)
    {
        DB::table('users')->insert([
            'Nome' => $nome, 
            'Email' => $email,
            'Data_Nascimento' => $dataNascimento,
            'Senha' => $senha
        ]);
    }

    public function FdeleteUser()
    {
       
    }

    public function viewNewUser()
    {
        return view('novoUsuario');

    }
}
