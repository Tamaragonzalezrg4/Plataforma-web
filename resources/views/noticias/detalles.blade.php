<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
@include('layouts.menup')
<br>
<br></br>
<div class="container">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4"> <center><i class="far fa-newspaper"></i> Detalles de noticias </center></h2>

  </div>
</div>
</div>

<div class="container">

 
   <!-- Card content -->
  <div class="card-deck">



  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <br>
      <center><img  src="{{$datos->imagen}}"  style="width:600px" class="img-responsive" alt="" ></center> 
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
<div class="container"> 
    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <center><h4 class="card-title">Titulo: {{$datos->titulo}}</h4></center>
      <!--Text-->
      <p class="card-text">Descripcion: {{$datos->descripcion}}.</p>
      <p class="card-text">Fuente: {{$datos->enlace_fuente}}.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <strong>Creado:{{$datos->created_at}}</strong><br>
      <strong>Actualizado:{{$datos->updated_at}}</strong>

    </div>

  </div>
</div>  
  <!-- Card -->
</div>
 <a href="{{ action('PrincipalController@noticias') }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-eye-open"></i>Volver</a>
</div>

@include('layouts.footerp')