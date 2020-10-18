<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DB;
class ApiController extends Controller
{
    public function index (){

    $client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://127.0.0.1:6060/api/pacientes',
    // You can set any number of default request options.
    'timeout'  => 2.0,
	]);
		$response = $client->request('GET', 'pacientes');
		
		$barrios = json_decode($response->getBody()->getContents());
		return view('apipacientes',compact('barrios'));

    }
  
}
