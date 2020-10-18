<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
class PrincipalController extends Controller
{
    public function noticias (){
    	$re=Noticia::find(1);
	    $relevante=Noticia::orderBy('id','DESC')->get();
    	//$relevantes= Noticia::paginate(1);
    	$noticias = Noticia::paginate(3);
    	$ultimas = Noticia::latest()
    	->take(3) 
    		//->take(1) 
    	->get();
    	return view('principal',compact('re','relevante',
    		'noticias', 'ultimas'));

    	}
    	

    	
}