<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    //View da Home
    public function viewShowUser()
    {
        $users = User::all();
        
        return view('usuarios',['users' => $users]);
    }
    
    //View de cadastro
    public function viewNewUser()
    {
        return view('novoUsuario');

    }
    
    //View de atualizacao de dados
    public function viewUpdateUser($id)
    {
        $usuario = User::findOrFail($id);

        return view('editarUsuario', ['usuario' =>$usuario]);
    }

    //cadastrar um novo usuario no banco
    public function storeUser(Request $request)
    {   

        /*$validacao = Validator::make($request->all(), [
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
        ]);

        if ($validacao->fails()) {
            return response()->json([
                        'error' => $validacao->errors()->all()
                    ]);
        }else{*/
            $usuario = new User();

            $usuario->Nome = $request->nome;
            $usuario->Email = $request->email;
            $usuario->Data_Nascimento = $request->data;
            $usuario->Senha = $request->senha;

            $usuario->save();

            return redirect('/')->with('msg', 'Usuário criado');
    }
    

    //sava as alteracoes no banco
    public function updateUser(Request $request)
    {
        $usuario = User::findOrFail($request->id);
        $usuario->Nome = $request->nome;
        $usuario->Email = $request->email;
        $usuario->Data_Nascimento = $request->data;
        $usuario->Senha = $request->senha;
        $usuario->save();

        dd($usuario->save());
        if ($usuario) {
            return redirect('/')->with('msg', 'Usuário editado');
        }else{
            

        }   
    }

    //deleta o usuario
    public function destroyUser($id)
    {
        $usuario = User::findOrFail($id)->delete();

       return redirect('/')->with('msg', 'Usuário deletado com sucesso!');
    }
}
