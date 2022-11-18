<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    //mostar todos os usuarios cadastrados
    public function showUser()
    {
        $users = User::all();
        
        return view('usuarios',['users' => $users]);
    }
    
    public function viewNewUser()
    {
        return view('novoUsuario');

    }
    
    //cadastrar um novo usuario no banco
    public function storeUser(Request $request)
    {   
    
        $usuario = new User();

        $usuario->Nome = $request->Nome;
        $usuario->Email = $request->Email;
        $usuario->Data_Nascimento = $request->Data_Nascimento;
        $usuario->Senha = $request->Senha;

        $usuario->save();

        return redirect('/')->response()->json(['success'=>'Successfully']);

    }
    
    //redireciona para pagina de atualizacao
    public function updateUser($id)
    {
        $usuario = User::findOrFail($id);

       return view('editarUsuario', ['usuario' =>$usuario]);
    }

    //sava as alteracoes no banco
    public function saveUser(Request $request)
    {
        $usuario = User::findOrFail($request->id)->update($request->all());

       return redirect('/')->with('msg', 'Usuário alterado com sucesso!');
    }

    //deleta o usuario
    public function destroyUser($id)
    {
        $usuario = User::findOrFail($id)->delete();

       return redirect('/')->with('msg', 'Usuário deletado com sucesso!');
    }
}
