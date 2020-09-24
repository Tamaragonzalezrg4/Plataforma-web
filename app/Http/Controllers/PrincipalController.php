<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
class PrincipalController extends Controller
{
    public function noticias (){
    	$noticias = Noticia::paginate(3);
    	return view('principal',compact(
    		'noticias'));
    	}
    	
}