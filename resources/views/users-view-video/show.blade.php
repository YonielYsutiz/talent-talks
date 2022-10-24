@extends('layouts.app')

@section('template_title')
    {{ $usersViewVideo->name ?? 'Show Users View Video' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Users View Video</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users-view-videos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $usersViewVideo->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Slug Video:</strong>
                            {{ $usersViewVideo->slug_video }}
                        </div>
                        <div class="form-group">
                            <strong>Points:</strong>
                            {{ $usersViewVideo->points }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
