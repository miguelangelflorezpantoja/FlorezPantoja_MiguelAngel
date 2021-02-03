<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\libro;
use App\Models\editorial;
class libros extends Controller
{
    //
    public function index(){

        $libro = DB::table('libro')->get();
        return view('libros.listado',['libro'=>$libro]);
    }


    public function formularioReg(){
        $categorias = editorial::all();
        return view('libro.form_registro',compact('categorias'));
    }

    public function registrar( Request $request){

        $producto = new libro ();
        $producto->nombreProducto = $request->input('nombrepro');
        $producto->cantidadProducto = $request->input('cantidadpro');
        $producto->precioProducto = $request->input('preciopro');
        $producto->fotoProducto = $request->input('fotopro');
        $producto->categoria = $request->input('categoria');
        $producto->save();
        return redirect()->route('listadoProductos');
    }

}
