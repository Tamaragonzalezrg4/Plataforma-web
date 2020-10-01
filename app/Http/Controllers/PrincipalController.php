<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
class PrincipalController extends Controller
{
    public function noticias (){
    	$noticias = Noticia::paginate(3);
    	$ultimas = Noticia::latest()
    	->take(3) 
    	->get();
    	return view('principal',compact(
    		'noticias', 'ultimas'));

    	}

    	
}