<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class clientesController extends Controller
{
    public function listar(){
      $todos=Cliente::all();
      return $todos;
    }
    public function guardar(Request $request){
      $nombre=$request['nombre'];
      $monto=$request['monto'];
      $cliente=new Cliente;
      $cliente->nombres=$nombre;
      $cliente->monto=$monto;
      $cliente->save();
      return 'Guardado con exito';
    }
}
