<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    
    public function listarClientes()
    { 
        $cliente = null;
        $error = false;
        $listaClientes = Cliente::all();
        return view('buscarClienteView', compact('listaClientes','cliente','error'));
    }


    
    public function buscarClientePorCuit(Request $request){
           
        $cliente = null;
        $error = null;

        if($request->has('unCuit')){
            $cliente = Cliente::where('cuit', $request->input('unCuit'))->first();
        }
       
        if ($cliente != null) {
            return view('buscarClienteView', [
                'cliente' => $cliente, 
                'listaClientes' => [],
                'error' =>false
            ]);
        }

        return view('buscarClienteView',[
            'error'=>true,
            'cliente'=>null,
            'listaClientes'=>[]
        ]);

       /* 
        
        return redirect()->route('listarClientes')->with([
            'error' => 'Cliente no encontrado',
            'listaClientes' => [''],
            'cliente' => null
        ]);

        
        return redirect()->route('listarClientes')->with('error', 'Cliente no encontrado');
        */
    }
    


    public function editarCliente($idCliente)
    {
        $cliente = Cliente::find($idCliente);
        $exito = false;
        return view('editarClienteView', ['cliente' => $cliente , 'exito' =>false]);
    }

    public function actualizarCliente(Request $request, $idCliente){
        $cliente = Cliente::find($idCliente);

        $cliente->direccion = $request->input('direccion');
        $cliente->email = $request->input('email');

        $cliente->save();

        $exito = true;
        return view('editarClienteView', ['cliente' => $cliente, 'exito'=> true]);
    }
   
}
