<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use App\Models\comprobantes;

class ventaController extends Controller
{
    public function listarComprobantes(){
       
        $listaComprobantes = Venta::all();
        $comprobante = null;
        $noEncontrado = false;
       return view('comprobantesEmitidosView',compact('listaComprobantes','comprobante', 'noEncontrado'));

    }


    public function buscarComprobante(Request $request){

        $comprobante = null;
        
        if (!empty($request['cuitCliente']) && empty($request['fechaInicio']) && empty($request['fechaFin'])) {
            $comprobante = venta::where('cuitCliente', $request->input('cuitCliente'))->get();
        } //fecha de inicio hasta hoy
         else if (!empty($request['cuitCliente']) && !empty($request['fechaInicio']) && empty($request['fechaFin'])) {
            $comprobante = venta::where('cuitCliente',$request->input('cuitCliente'))
                ->whereDate('fecha', '>=', $request->input('fechaInicio'))->get();
        
        } //fecha fin para atras
        else if (!empty($request['cuitCliente']) && empty($request['fechaInicio']) && !empty($request['fechaFin'])) {
            $comprobante = venta::where('cuitCliente', $request->input('cuitCliente'))
                ->whereDate('fecha', '<=', $request->input('fechaFin'))->get();
        
        } // entre ambas fechas
         else if (!empty($request['cuitCliente']) && !empty($request['fechaInicio']) && !empty($request['fechaFin'])) {
            $comprobante = venta::where('cuitCliente', $request->input('cuitCliente'))
            ->whereBetween('fecha', [$request->input('fechaInicio'), $request->input('fechaFin')])->get();
        }

        //desde fecha de inicio hasta hoy sin cuir
        else if (empty($request['cuitCliente']) && !empty($request['fechaInicio']) && empty($request['fechaFin'])) {
            $comprobante = venta::whereDate('fecha', '>=', $request->input('fechaInicio'))->get();

        } //fecha fin para atras sin cuit
        else if (empty($request['cuitCliente']) && empty($request['fechaInicio']) && !empty($request['fechaFin'])) {
            $comprobante = venta::whereDate('fecha', '<=', $request->input('fechaFin'))->get();
        }
       
        

        if ($comprobante && $comprobante != null) {
            $noEncontrado = false;
            return view('comprobantesEmitidosView', [
                'listaComprobantes' => [],
                'comprobante' => $comprobante,
                'noEncontrado' => false
            ]);
        } else {
            $noEncontrado = true;
            return view('comprobantesEmitidosView', [
                'listaComprobantes' => [],
                'comprobante' => null,
                'noEncontrado' => true
            ]);
        }
        
    }
}
