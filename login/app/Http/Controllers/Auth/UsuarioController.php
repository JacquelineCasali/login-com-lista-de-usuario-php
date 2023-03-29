<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
// use App\Models\Usuario;

use App\Providers\RouteServiceProvider;
// use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsuarioController extends Controller
{
    // listar todos os usuarios dashboard 
 public function dashboard(){
    // $users=DB::select('SELECT id, name FROM users');

    $user=User::all();
    
     return view('dashboard',['user'=> $user]);

}

// ver um usuario
public function usuario($id){
        $user=User::find($id);
        return view('auth.usuario',['user'=> $user]);
}
// editar  um usuario
public function editarusuario($id){
    $user=User::find($id);
    return view('auth.editar',['user'=> $user]);
}

public function editar(Request $request, $id)
  // editar o usuario
{
        $user=User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
           
        ]);
   

    // echo "Usuario editado com sucesso";
    
    return redirect()->intended(RouteServiceProvider::HOME);
     
    }

    public function excluir($id)
    // excluir o usuario
  {
          $user=User::find($id);
          $user->delete();
     echo "Usuario excluido com sucesso";
      
  
          
  
      }


}