<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // Devolver listado de todos los clientes
    public function list(Request $request){
        $sort = $request->query('sort');
        if(is_null($sort)) {
            $users = User::paginate(10);
            return view('users.listado', ['users' => $users]);
        } else {
            $users = User::orderBy($sort)->paginate(10);
            return view('users.listado', ['users' => $users,'sort' => $sort]);
        }
    }

    // Buscar por nombre
    public function searchNombre(Request $request){
        $request->validate([
            'name' => 'required|min:1|max:255',
        ]);
        $name = $request->get('name');
        $users = User::where('name','like','%'.$name.'%')->paginate(10);
        return view('users.listado', ['users' => $users]);

    }

    // Buscar por apellidos
    public function searchApellidos(Request $request){
        $request->validate([
            'surname' => 'required|min:1|max:255',
        ]);
        $surname = $request->get('surname');
        $users = User::where('surname','like','%'.$surname.'%')->paginate(10);
        return view('users.listado', ['users' => $users]);

    }

    // Muestra la vista de crear
    public function create(){
        return view('users.registro');
    }
    // Crear un cliente en la bbdd
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'surname' => 'required|min:3|max:255',
            'fecha_nac' => 'required|before:2002',
            'password' => 'required|min:2|max:25emailemail5',
        ]);
        $user = new User;
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->fecha_nac = $request->input('fecha_nac');
        $user->password = $request->input('password');
        $user->save();
        return redirect()->action('UserController@list');
    }

    // Muestra la vista de modificar
    public function edit(Request $request, $email){
        //$clientes = Cliente::where('email','%'.$email.'%');
        
        return view('users.modificar', ['email' => $email]); 
    }
    // Modificar un cliente en la bbdd
    public function update(Request $request, $email){
        $request->validate([
            'name' => 'required|min:3|max:255',
            'surname' => 'required|min:3|max:255',
            'fecha_nac' => 'required|before:2002',
            'password' => 'required|min:2|max:255',
        ]);
        $user = User::findOrFail($request->input('email'));
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->fecha_nac = $request->input('fecha_nac');
        $user->password = $request->input('password');
        $user->save();
        return redirect('User');
    }

    // Eliminar un cliente
    public function destroy($email){
        $user = User::where('email','LIKE',$email);
        $user->delete();
        return redirect('User');
    }


}
