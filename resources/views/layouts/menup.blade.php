
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