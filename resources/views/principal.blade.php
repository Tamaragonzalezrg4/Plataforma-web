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
<body class="fixed-sn mdb-skin">

  <!--Double navigation-->
  <header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav fixed wide sn-bg-1">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        
      </ul>
      <div class="sidenav-bg rgba-blue-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto">
        
      </div>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contactar</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="{{ action('PrincipalController@noticias') }}"><i class="fa fa-home"></i> <span class="clearfix d-none d-sm-inline-block">Inicio</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Iniciar Secion</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ action('MapaController@index') }}"><i class="fas fa-map-marked-alt"></i> <span class="clearfix d-none d-sm-inline-block">Mapas</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ action('GraficoController@index') }}"><i class="fa fa-chart-pie"></i> <span class="clearfix d-none d-sm-inline-block">Graficos</span></a>
        </li>
      </ul>
    </nav>
    <!-- /.Navbar -->
  </header>
</body>
</nav>


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
  <center>
<h4 class="card-title"><strong> ULTIMAS NOTICIAS
</strong></h4></center>

@foreach($ultimas->chunk(3) as $ultimas)
<!-- Card deck -->
<div class="card-deck">
  
@foreach($ultimas as $n)


  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
       <img  src="{{$n->imagen}}"  style="width:400px" class="img-responsive" alt="" >
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Titulo: {{$n->titulo}}</h4>
      <!--Text-->
      <p class="card-text">Descripcion: {{$n->descripcion}}.</p>
      <p class="card-text">Fuente: {{$n->enlace_fuente}}.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">{{$n->created_at}}</button>

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
    
              <h3 class="font-weight-bold">Titulo: {{$noticia->titulo}}</h3>
    
              <p class="text-muted">Descripcion: {{$noticia->descripcion}}</p>
    
              <a class="btn btn-purple btn-md ml-0" href="#" role="button">URL: {{$noticia->enlace_fuente}}<i class="fa fa-gem ml-2"></i></a>
    
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">
    
              <!--Image-->
              <div class="view overlay z-depth-1-half">
                <img  src="{{$noticia->imagen}}"  style="width:500px " class="img-responsive" alt="">
                <a href="#">
                  <div class="mask rgba-white-light"></div>
                </a>
              </div>
    
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

<center>
<h4 class="card-title"><strong> proximamente
</strong></h4></center>
<!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg"
        alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg"
        alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg"
        alt="Third slide">
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" width="100">
    </li>
    <li data-target="#carousel-thumb" data-slide-to="1">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" width="100">
    </li>
    <li data-target="#carousel-thumb" data-slide-to="2">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" width="100">
    </li>
  </ol>
</div>
<!--/.Carousel Wrapper-->
</div>
<body>

</body>
<div class="container"> 
  

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
        <p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
        <p>
          <i class="fas fa-home mr-3"></i> Encarnacion</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> 7masecretariageneral@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> (071) 203 076</p>
        <p>
          <i class="fas fa-phone mr-3"></i> (071) 202 620</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Registrate gratis</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Registrate aqui</a>
    </li>
  
      </div>
        

      </div>
      <!-- Grid column -->


      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->
</div>
</html>