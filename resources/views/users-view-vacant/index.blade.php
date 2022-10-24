@extends('layouts.app')

@section('template_title')
    Users View Vacant
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Users View Vacant') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('users-view-vacants.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>User Id</th>
										<th>Vacant Id</th>
										<th>Points</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usersViewVacants as $usersViewVacant)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usersViewVacant->user_id }}</td>
											<td>{{ $usersViewVacant->vacant_id }}</td>
											<td>{{ $usersViewVacant->points }}</td>

                                            <td>
                                                <form action="{{ route('users-view-vacants.destroy',$usersViewVacant->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('users-view-vacants.show',$usersViewVacant->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('users-view-vacants.edit',$usersViewVacant->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usersViewVacants->links() !!}
            </div>
        </div>
    </div>
@endsection
