<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Conductor;
use App\Ruta;
use App\Vehiculo;
use App\Pago;

class PagosController extends Controller
{
    // Devolver listado de todos los pagos
    public function list(Request $request){
        $sort = $request->query('sort');
        if(is_null($sort)) {
            $pagos = Pago::paginate(10);
            return view('pagos.listado', ['pagos' => $pagos]);
        } else {
            $pagos = Pago::orderBy($sort)->paginate(10);
            return view('pagos.listado', ['pagos' => $pagos,'sort' => $sort]);
        } 
    }
    // Eliminar un pago
    public function destroy($id){
        $pago = Pago::where('id','=',$id);
        $pago->delete();
        return redirect('Pagos');
    }
}
