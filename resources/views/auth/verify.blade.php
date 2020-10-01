@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">VERIFIQUE SU DIRECCION DE CORREO ELECTRONICO</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">SE HA ENVIADO UN ENLACE A SU DIRRECION DE CORREO ELECTRONICO
                            </div>
                        @endif
                        <p>ANTES DE CONTINUAR VERIFICAR SU CORREO ELECTRONICO</p>
                        <a href="{{ route('verification.resend') }}">PULSE PARA REENVIAR'</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection