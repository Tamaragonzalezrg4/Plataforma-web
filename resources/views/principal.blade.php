<!DOCTYPE html>
<html>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="icon" type="image/png" href="/icono.png" />
	<title> Principal </title>
</head>

    <!--/. Sidebar navigation -->
    <!-- Navbar -->
@include('layouts.menup')


<!--Carousel Wrapper-->

    <!--/.Navbar -->
    <br>
<div class="container my-5 py-5 z-depth-1">
  <!--Section: Content-->
  <section class="dark-grey-text text-center">
    
    <h3 class="font-weight-bold pt-5 pb-2">Bienvenido a la pataforma web de noticas de los casos de dengue, esta es una version beta, proximante estaran disponibles mas noticias, graficos, mapas de los casos por barrios, la informacion es estatica, estan como prueba de como se vizualizaria.</h3>

    <div class="row mx-3">
      <div class="col-md-4 px-4 mb-4">

        <div class="view">
          <img src="https://mdbootstrap.com/img/illustrations/drawkit-drawing-man-colour.svg" class="img-fluid" alt="smaple image">
        </div>

      </div>
     <div class="col-md-4 px-4 mb-4">

        <div class="view">
          <img src="https://mdbootstrap.com/img/illustrations/drawkit-phone-conversation-colour.svg" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <div class="col-md-4 px-4 mb-4">

        <div class="view">
          <img src="https://mdbootstrap.com/img/illustrations/app-user-colour.svg" class="img-fluid" alt="smaple image">
        </div>

      </div>
    </div>
    <!--Section: Content-->
  </div>
</br>
  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    
    <!-- Subtitle -->
  
  </div>

</div>
<!-- Card -->
<div class="container">
    <center><img src="/un.png" alt="Avatar" ></center>
</div>
<br>
<div class="container">
@foreach($ultimas->chunk(3) as $ultimas)
<!-- Card deck -->
<div class="card-deck">
  
@foreach($ultimas as $n)


  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
       <img  src="{{$n->imagen}}" class="img-responsive" height="300px" width="350px" alt="" >
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">{{substr($n->titulo,0,50)}}...</h4>
      <!--Text-->
      <p class="card-text">{{substr($n->descripcion,0,200)}}...</p>
      <p class="card-text"><u>Fuente:</u> {{substr($n->enlace_fuente,0,50)}}...</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <strong>Creado: {{$n->created_at}}</strong>

    </div>

  </div>
  @endforeach
  <!-- Card -->
</div>
@endforeach
@foreach($noticias as $noticia)
    <div class="container my-5 py-5 z-depth-1">
 
 
        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
    
          <!--Grid row-->
          <div class="row">
    
            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">
    
              <h3 class="font-weight-bold">{{$noticia->titulo}}</h3>
    
              <p class="text-muted">{{substr($noticia->descripcion,0,200)}}...</p>
    
              <strong><u>URL:</u>  {{substr($noticia->enlace_fuente,0,50)}}...</strong>
    
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">
    
              <!--Image-->
              <div class="view overlay z-depth-1-half">
                <img  src="{{$noticia->imagen}}" class="img-responsive" height="350px" width="435px"  alt="">
                <a href="#">
                  <div class="mask rgba-white-light"></div>
                </a>
              </div>
              <a href="{{ url('detalles', [$noticia->id]) }}" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-eye-open"></i>Ver mas</a>
    
            </div>
            <!--Grid column-->
    
          </div>
          <!--Grid row-->
    
    
        </section>
        <!--Section: Content-->
    
    
      </div>
      @endforeach
       <div class="container">
      {!! $noticias->render() !!}
      </div>
<!-- Card deck -->

<div class="container">

    <h3 class="display-4"> <center><i class="fa fa-newspaper"></i> Noticias mas relevantes </center></h3>

</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
        @foreach($relevante as $key => $re)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <img src="{{$re->imagen}}"  class="d-block w-100 " height="500px" width="450px" alt="..."> 
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<body>

</body>

  
</div>
</section>
</div>

<!-- Footer -->
@include('layouts.footerp')

</html>