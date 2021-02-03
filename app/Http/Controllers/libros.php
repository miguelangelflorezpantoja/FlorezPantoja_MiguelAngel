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
        return view('libros/form_reglib',compact('editorial'));
    }

    public function registrar( Request $request){

        $producto = new libro ();
        $producto->ISBN = $request->input('ISBN');
        $producto->itulo = $request->input('titulo');
        $producto->precio= $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->editorial= $request->input('editorial');
        $producto->save();
        return redirect()->route('listadolibros');
    }



}
