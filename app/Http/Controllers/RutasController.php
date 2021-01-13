<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Conductor;
use App\Ruta;
use App\Vehiculo;
use App\Pago;

class RutasController extends Controller
{
    // Devolver listado de todos las rutas
    public function list(Request $request){
        $sort = $request->query('sort');
        if(is_null($sort)) {
            $rutas = Ruta::paginate(10);
            return view('rutas.listado', ['rutas' => $rutas]);
        } else {
            $rutas = Ruta::orderBy($sort)->paginate(10);
            return view('rutas.listado', ['rutas' => $rutas,'sort' => $sort]);
        } 
    }
    // Eliminar una ruta
    public function destroy($id){
        $ruta = Ruta::where('id','=',$id);
        $ruta->delete();
        return redirect('Rutas');
    }
}
