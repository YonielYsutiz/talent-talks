@extends('layouts.app')

@section('template_title')
    {{ $vacant->name ?? 'Show Vacant' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Vacant</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vacants.index') }}"> Back</a>
                        </div>
                    </div>

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
    </section>
@endsection
