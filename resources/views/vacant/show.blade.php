@extends('layouts.app')

@section('template_title')
    {{ $vacant->name ?? 'Show Vacant' }}
@endsection

@section('content')
    <div class="content container-fluid">
        <p class="block-title" style="text-align: center;"><strong>VACANTES | {{ $vacant->company }} </strong></p>
                    <a href="{{ route('vacants.index') }}" class="small-now-btn">
                {{ __('Volver') }}
            </a>
        <div class="float-right">
        
        <div class="row">
            <div class="col-md-6: center;" style="text-align: center;" >

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Company:</strong>
                            {{ $vacant->company }}
                        </div>
                        <div class="form-group">
                            <strong>Position:</strong>
                            {{ $vacant->position }}
                        </div>
                        <div class="form-group">
                            <strong>Modality:</strong>
                            {{ $vacant->modality }}
                        </div>
                        <div class="form-group">
                            <strong>Salary:</strong>
                            {{ $vacant->salary }}
                        </div>
                        <div class="form-group">
                            <strong>Email Company:</strong>
                            {{ $vacant->email_company }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
