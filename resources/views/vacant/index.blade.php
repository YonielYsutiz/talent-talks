@extends('layouts.app')

@section('template_title')
    Vacant
@endsection

@section('content')
    <div class="container">
        <p class="block-title" style="text-align: center;"><strong>VACANTES</strong></p>
        <div class="row">
            <div class="col-sm-3">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h4 style="font-family: montserrat-semibold; color: #f25421; text-transform: uppercase;">Filtros</h4>
                    <div class="float-right">
                        <a href="/vacants" class="small-now-btn">
                            {{ __('eliminar filtros') }}
                        </a>
                    </div>
                </div>
                <div class="card">
                        <div class="card-body">
                            <h3>Ciudades</h3>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    @if(empty(Request::get('city')))
                                        Selecciona una ciudad
                                    @else
                                        {{ Request::get('city') }}
                                    @endif
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    @foreach ($cities as $city)
                                        <li><a href="/vacants?city={{$city}}">{{ $city }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <h3>Cargo</h3>
                            <div class="list-group">

                                @foreach ($position_availables as $position)
                                    <a href="/vacants?position={{$position}}" class="mb-1"><button type="button" class="list-group-item">{{ $position }}</button></a>
                                @endforeach
                            </div>

                            <h3>Modalidad</h3>
                            <div class="list-group">
                                @foreach ($modalities as $modality)
                                    <a href="/vacants?modality={{$modality}}" class="mb-1"><button type="button" class="list-group-item">{{ $modality }}</button></a>
                                @endforeach
                            </div>
                        </div>
                </div>

            </div>
            <div class="col-sm-9">
                <h4 style="font-family: montserrat-semibold; color: #f25421; text-transform: uppercase;">vacantes disponibles</h4>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                @foreach ($vacants as $vacant)
                    <div class="card card-default mb-3">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="card-body">
                                <b>{{ $vacant->company }}</b> | {{ $vacant->position }} | {{ $vacant->city }}
                            </div>
                            <div class="float-right">
                                <!-- @guest
                                    <button class="small-now-btn m-2" data-toggle="modal" data-target="#myModal"> {{ __('ver datos para aplicar') }}</button>
                                @else
                                    <a href="{{ route('vacants.show',$vacant->id) }}" class="small-now-btn m-2">
                                        {{ __('ver datos para aplicar') }}
                                    </a>
                                @endguest -->
                                <a href="#" class="small-now-btn m-2" onclick="goViewVacant(`{{ route('vacants.show',$vacant->id) }}`)">
                                    {{ __('ver datos para aplicar') }}
                                </a>
                                <button type="button" class="btn btn-primary btn-lg hidden" data-toggle="modal" data-target="#myModal" id="show-modal-login">
                                    login
                                </button>
                            </div>
                        </div>
                        
                    </div>
                @endforeach


                {!! $vacants->links() !!}

                <!-- Modal request authenticated -->
                @include('auth.modal-login')

            </div>
        </div>
    </div>
@endsection
