@extends('layouts.app')

@section('template_title')
    Create Vacant
@endsection

@section('content')
    <div class="content">
        <p class="block-title" style="text-align: center;"><strong>Crear vacante</strong></p>
        <div class="row">
            <div class="col-md-6 mx-auto">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('vacants.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('vacant.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
