@extends('layouts.app')

@section('template_title')
    {{ $usersViewVacant->name ?? 'Show Users View Vacant' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Users View Vacant</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users-view-vacants.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $usersViewVacant->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vacant Id:</strong>
                            {{ $usersViewVacant->vacant_id }}
                        </div>
                        <div class="form-group">
                            <strong>Points:</strong>
                            {{ $usersViewVacant->points }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
