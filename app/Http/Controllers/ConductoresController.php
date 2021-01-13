<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Conductor;
use App\Ruta;
use App\Vehiculo;
use App\Pago;

class ConductoresController extends Controller
{
    // Devolver listado de todos los conductores
    public function list(Request $request){
        $sort = $request->query('sort');
        if(is_null($sort)) {
            $conductores = Conductor::paginate(10);
            return view('conductores.listado', ['conductores' => $conductores]);
        } else {
            $conductores = Conductor::orderBy($sort)->paginate(10);
            return view('conductores.listado', ['conductores' => $conductores,'sort' => $sort]);
        } 
    }

    // Muestra la vista de crear un conductor
    public function create(){
        return view('conductores.registro');
    }
    // Crear un conductor
    public function store(Request $request){
	/*
        $request->validate([
            'email' => 'required|email|unique:clientes|min:2|max:255',
            'name' => 'required|min:2|max:255',
            'surname' => 'required|min:2|max:255',
            'fecha_nac' => 'required|before:2002',
            'password' => 'required|min:2|max:255',
        ]); 
	*/
        $conductor = new Conductor;
        $conductor->email = $request->input('email');
         $conductor->name = $request->input('name');
        $conductor->surname = $request->input('surname');
        $conductor->fecha_nac = $request->input('fecha_nac');
        $conductor->password = $request->input('password');
        $conductor->save();
	
	 $user = new User;
        $user->email = $request->input('email');
         $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->fecha_nac = $request->input('fecha_nac');
        $user->password = $request->input('password');
        $user->save();
	
        return redirect()->action('ConductoresController@list');
    }

    // MUestra la vista de modificar un conductor
    public function edit(Request $request, $email){
        return view('conductores.modificar', ['email' => $email]);
    }
    // Modificar un conductor en la bbdd
    public function update(Request $request, $email){
        /*$request->validate([
            'nombre' => 'required|min:2|max:255',
            'apellidos' => 'required|min:2|max:255',
            'fecha_nac' => 'required|before:2002',
            'contrasenya' => 'required|min:2|max:255',
        ]);*/
        $conductor = Conductor::findOrFail($request->input('email'));
        $conductor->name = $request->input('name');
        $conductor->surname = $request->input('surname');
        $conductor->fecha_nac = $request->input('fecha_nac');
        $conductor->password = $request->input('password');
        $conductor->save();
        return redirect('home2');

    }

    // Eliminar un conductor
    public function destroy($email){
        $conductor = Conductor::where('email','LIKE',$email);
        $conductor->delete();
        return redirect('Conductores');
    }
}
