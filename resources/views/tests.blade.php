
<script type="text/javascript">$(document).ready(function () {
$('.stepper').mdbStepper();
})</script>
<br></br>
<br>
@include('layouts.menup')
@yield('content')
<div class="container">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4"> <center><i class="fa fa-vial"></i> Test Rapido de Dengue </center></h2>
    <p class="lead"><center>Podran realizarse test rapidos para comprobar posibles casos</center></p>
  </div>
</div>
</div>

<div class="container">
    <!--Accordion wrapper-->
<div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
  <div class="card">
    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading96">
      <h5 class="text-uppercase mb-0 py-1">
        <a class="white-text font-weight-bold" data-toggle="collapse" href="#collapse96" aria-expanded="true"
          aria-controls="collapse96">
          TEST
        </a>
      </h5>
    </div>
    <div id="collapse96" class="collapse show" role="tabpanel" aria-labelledby="heading96"
      data-parent="#accordionEx23">
      <div class="card-body">
        <div class="row my-4">
          <div class="col-md-8">
            <h2 class="font-weight-bold mb-3 black-text">Primer paso</h2>
            <p class="">tuvo contacto con algun enfermo</p>
            <p class="mb-0">formulario...</p>
          </div>
          <div class="col-md-4 mt-3 pt-2">
            <div class="view z-depth-1">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature.jpeg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading97">
      <h5 class="text-uppercase mb-0 py-1">
        <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse97"
          aria-expanded="false" aria-controls="collapse97">
          TEST
        </a>
      </h5>
    </div>
    <div id="collapse97" class="collapse" role="tabpanel" aria-labelledby="heading97"
      data-parent="#accordionEx23">
      <div class="card-body">
        <div class="row my-4">
          <div class="col-md-8">
            <h2 class="font-weight-bold mb-3 black-text">Segundo paso</h2>
            <p class="">tuvo contacto con algun enfermo</p>
            <p class="mb-0">formulario...</p>
          </div>
          <div class="col-md-4 mt-3 pt-2">
            <div class="view z-depth-1">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature.jpeg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98">
      <h5 class="text-uppercase mb-0 py-1">
        <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse98"
          aria-expanded="false" aria-controls="collapse98">
          TEST
        </a>
      </h5>
    </div>
    <div id="collapse98" class="collapse" role="tabpanel" aria-labelledby="heading98"
      data-parent="#accordionEx23">
      <div class="card-body">
        <div class="row my-4">
          <div class="col-md-8">
            <h2 class="font-weight-bold mb-3 black-text">Primer paso</h2>
            <p class="">tuvo contacto con algun enfermo</p>
            <p class="mb-0">formulario...</p>
          </div>
          <div class="col-md-4 mt-3 pt-2">
            <div class="view z-depth-1">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature.jpeg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Accordion wrapper-->
</div>



@include('layouts.footerp')
@yield('content')    