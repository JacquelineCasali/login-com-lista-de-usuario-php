<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
// use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{


    // public function create()
    // {
    //     return view('auth.editar');
    // }

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
    
        return view('dashboard');

        // // valida o usuario
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
       

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        
    }


}