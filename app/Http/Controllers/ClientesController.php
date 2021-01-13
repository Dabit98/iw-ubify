<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Conductor;
use App\Ruta;
use App\Vehiculo;
use App\Pago;

class ClientesController extends Controller
{
    // Devolver listado de todos los clientes
    public function list(Request $request){
        $sort = $request->query('sort');
        if(is_null($sort)) {
            $clientes = Cliente::paginate(10);
            return view('clientes.listado', ['clientes' => $clientes]);
        } else {
            $clientes = Cliente::orderBy($sort)->paginate(10);
            return view('clientes.listado', ['clientes' => $clientes,'sort' => $sort]);
        } 
    }
    // Buscar Nombre
    public function searchNombre(Request $request){
        $request->validate([
            'nombre' => 'required|min:1|max:255',
        ]);
        $nombre = $request->get('nombre');
        $clientes = Cliente::where('nombre','like','%'.$nombre.'%')->paginate(10);
        return view('clientes.listado', ['clientes' => $clientes]);

    }
    // Buscar Apellidos
    public function searchApellidos(Request $request){
        $request->validate([
            'apellidos' => 'required|min:1|max:255',
        ]);
        $apellidos = $request->get('apellidos');
        $clientes = Cliente::where('apellidos','like','%'.$apellidos.'%')->paginate(10);
        return view('clientes.listado', ['clientes' => $clientes]);

    }

    // Muestra la vista de crear
    public function create(){
        return view('clientes.registro');
    }
    // Crear un cliente en la bbdd
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email|unique:clientes|min:2|max:255',
            'nombre' => 'required|min:2|max:255',
            'apellidos' => 'required|min:2|max:255',
            'fecha_nac' => 'required|before:2002',
            'contrasenya' => 'required|min:2|max:25emailemail5',
        ]);
        $cliente = new Cliente;
        $cliente->email = $request->input('email');
        $cliente->nombre = $request->input('nombre');
        $cliente->apellidos = $request->input('apellidos');
        $cliente->fecha_nac = $request->input('fecha_nac');
        $cliente->contrasenya = $request->input('contrasenya');
        $cliente->save();
        return redirect()->action('ClientesController@list');
    }
    // Muestra la vista de modificar
    public function edit(Request $request, $email){
        //$clientes = Cliente::where('email','%'.$email.'%');
        
        return view('clientes.modificar', ['email' => $email]); 
    }
    // Modificar un cliente en la bbdd
    public function update(Request $request){
        $request->validate([
            'nombre' => 'required|min:2|max:255',
            'apellidos' => 'required|min:2|max:255',
            'fecha_nac' => 'required|before:2002',
            'contrasenya' => 'required|min:2|max:25emailemail5',
        ]);
        $cliente = Cliente::findOrFail($request->input('email'));
        $cliente->email = $request->input('email');
        $cliente->nombre = $request->input('nombre');
        $cliente->apellidos = $request->input('apellidos');
        $cliente->fecha_nac = $request->input('fecha_nac');
        $cliente->contrasenya = $request->input('contrasenya');
        $cliente->save();
        return redirect()->action('ClientesController@list');
}
    // Eliminar un cliente
    public function destroy($email){
        $cliente = Cliente::where('email','LIKE',$email);
        $cliente->delete();
        return redirect('Clientes');
    }
}