<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Conductor;
use App\Ruta;
use App\Vehiculo;
use App\Pago;

class VehiculosController extends Controller
{
    // Devolver listado de todos los vehiculos
    public function list(Request $request){
        $sort = $request->query('sort');
        if(is_null($sort)) {
            $vehiculos = Vehiculo::paginate(10);
            return view('vehiculos.listado', ['vehiculos' => $vehiculos]);
        } else {
            $vehiculos = Vehiculo::orderBy($sort)->paginate(10);
            return view('vehiculos.listado', ['vehiculos' => $vehiculos,'sort' => $sort]);
        } 
    }

    // Muestra la vista de crear un vehiculo
    public function create(){
        return view('vehiculos.registro');
    }
    // Crear un nuevo vehiculo en la bbdd
    public function store(Request $request){
        $minus = $request->query('minusvalido');
	    $request->validate([
            'conductor_email' => 'required|email|min:2|max:255',
            'marca' => 'required|min:2|max:255',
            'modelo' => 'required|min:2|max:255',
            'plazas' => 'required|integer|max:7',
        ]);
        $vehiculo = new Vehiculo;
        $vehiculo->marca = $request->input('marca');
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->plazas = $request->input('plazas');
        if(is_null($minus)){
		 $vehiculo->minusvalido = false;
	    } else {
            $vehiculo->minusvalido = true;
        }
        $vehiculo->conductor_email = $request->input('conductor_email');
        $vehiculo->save();
        return redirect()->action('VehiculosController@list'); 
    }

    // Muestra la vista de modificar un vehiculo
    public function edit(Request $request, $codigo){
        return view('vehiculos.modificar', ['codigo' => $codigo]);

    }
    // Modificar un vehiculo en la bbdd
    public function update(Request $request, $codigo){
        $request->validate([
            'conductor_email' => 'required|email|min:2|max:255',
            'marca' => 'required|min:2|max:255',
            'modelo' => 'required|min:2|max:255',
            'plazas' => 'required|integer|max:7',
        ]);
        $vehiculo = Vehiculo::findOrFail($codigo);
        $vehiculo->marca = $request->input('marca');
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->plazas = $request->input('plazas');
    if(is_null($vehiculo->minusvalido = $request->input('minusvalido')) == true){
         $vehiculo->minusvalido = false;
    }
        $vehiculo->conductor_email = $request->input('conductor_email');
        $vehiculo->save();
        //return redirect('/home');
        return redirect()->action('VehiculosController@list');

    }

    // Eliminar un vehiculo
    public function destroy($codigo){
        $vehiculo = Vehiculo::where('codigo','=',$codigo);
        $vehiculo->delete();
        return redirect('Vehiculos');
    }
}
