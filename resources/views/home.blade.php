@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 style="font-family: montserrat-semibold; color: #f25421; text-transform: uppercase;">Hola, Bienvenido a Talent Talks!</h1>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <a class="register-now-btn" href="/vacants" role="button">Ver Vacantes</a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a class="register-now-btn" href="/#talent-fest-talks" role="button">Ver Charlas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h3 style="font-family: montserrat-semibold; color: #f25421; text-transform: uppercase;">Puntos acumulados: <span class="label label-warning">{{ Auth::user()->getPoints(Auth::user()->id) }}</span> </h3>
            
            @if (Auth::user()->getPoints(Auth::user()->id) >= 100)
                <div class="well well-sm">Ya tienes mas de 100 puntos ya puedes descargar tu <b>kit de empleabilidad</b> </div>
                <a href="/kit" class="register-now-btn">Descargar Kit</a>
            @else
                <div class="well well-sm">Para poder descargar el <b>kit de empleabilidad</b> debes llegar a un minimo de 100 puntos </div>
            @endif

        </div>
    </div>
</div>
@endsection
