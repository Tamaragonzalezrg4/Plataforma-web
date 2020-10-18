@extends('layouts.app')
<link rel="icon" type="image/png" href="/laboratorio.png" />
@section('content')
<div class="container-fluid">
<div class="container">
  <br>
  <h3>Prueba de Api
  </h3>
        <div class="animated fadeIn">

    

        </tbody>
    </table> 
    

       <!-- Widgets -->
        </div>
      </div>
       <table class="table table-bordered" id="data-table">
        <thead>
            <tr>
                
               
                    <th>Barrio</th>
                     

       
                
            </tr>
        </thead>
        <tbody>
        @foreach($barrios as $barrios)
            <tr>
                 
                  <td>{{ $barrios->barrio}}</td>
                  
            
            </tr>
        @endforeach
        
@endsection