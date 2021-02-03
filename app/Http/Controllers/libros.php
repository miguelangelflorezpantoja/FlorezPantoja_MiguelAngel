<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\libro;

class libros extends Controller
{
    //
    public function index(){

        $libro = DB::table('libro')->get();
        return view('libros.listado',['libro'=>$libro]);
    }
}
