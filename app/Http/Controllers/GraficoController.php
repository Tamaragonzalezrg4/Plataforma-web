<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabla;

class GraficoController extends Controller
{
    public function index()
    {
    	$table=Tabla::all();
        return view('graficos',compact('table'));

    }
}
