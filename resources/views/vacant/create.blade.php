@extends('layouts.app')

@section('template_title')
    Create Vacant
@endsection

@section('content')
    <section class="content container-fluid">
        <p class="block-title" style="text-align:center;"><strong>Crear vacantes</strong></p>
        <div class="row">
            <div class="col-md-6 mx-auto">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Registro de Vacantes</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vacants.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('vacant.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
