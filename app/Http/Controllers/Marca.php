<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Marca extends Controller
{
    public function index(){
        $marcas = DB::table('marca')
                    ->get();
        return view('marcas.listado', ['brand' => $marcas]);
    }
}
