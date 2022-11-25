<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


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

        $validacao = Validator::make($request->all(), [
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
        ]);

        if ($validacao->fails()) {
            return response()->json([
                        'error' => $validacao->errors()->all()
                    ]);
        }else{

        

            $usuario = new User();

            $usuario->Nome = $request->nome;
            $usuario->Email = $request->email;
            $usuario->Data_Nascimento = $request->data;
            $usuario->Senha = $request->senha;

            $usuario->save();

            return response()->json(['success'=>'Form is successfully submitted!']);
        }
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

        if ($usuario == true) {
            return response()->json(['success'=>'Form is successfully submitted!']);
        }else{
            return response()->json(['error'=>'Form is not submitted!']);

        }   
    }

    //deleta o usuario
    public function destroyUser($id)
    {
        $usuario = User::findOrFail($id)->delete();

       return redirect('/')->with('msg', 'Usuário deletado com sucesso!');
    }
}
