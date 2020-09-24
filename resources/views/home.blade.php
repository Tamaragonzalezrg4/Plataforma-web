@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                 <h3>Categoria</h3>

                <p>Categoria</p>
              </div>
              <div class="icon">
              <i class="fa fa-edit"></i>
              </div>
              <a href="" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Noticias</h3>

                <p>Ultimas Noticias</p>
              </div>
              <div class="icon">
               <i class="fa fa-archive"></i>
              </div>
              <a href="" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Denuncias</h3>

                <p>Denuncias</p>
              </div>
              <div class="icon">
                <i class="fa fa-clone"></i>
              </div>
              <a href="" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                 <h3>Usuarios</h3>
                <p>Usuarios</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="" class="small-box-footer">Mas informacion <i class="fa fa-arrow-user"></i></a>
            </div>
          </div>
                    <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Principal</h3>

                <p>Pagina principal</p>
              </div>
              <div class="icon">
                <i class="fa fa-address-card"></i>
              </div>
              <a href="{{ action('PrincipalController@noticias') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
                    <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Graficos</h3>

                <p>Graficos</p>
              </div>
              <div class="icon">
               <i class="fa fa-clipboard"></i>
              </div>
              <a href="{{ action('GraficoController@index') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
</div>
</div>
</section>
</div>
@endsection
