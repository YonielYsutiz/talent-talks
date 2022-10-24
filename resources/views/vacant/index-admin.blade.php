@extends('layouts.app')

@section('template_title')
    Vacant
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vacant') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vacants.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Company</th>
										<th>Position</th>
										<th>Modality</th>
										<th>Salary</th>
										<th>Email Company</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vacants as $vacant)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vacant->company }}</td>
											<td>{{ $vacant->position }}</td>
											<td>{{ $vacant->modality }}</td>
											<td>{{ $vacant->salary }}</td>
											<td>{{ $vacant->email_company }}</td>

                                            <td>
                                                <form action="{{ route('vacants.destroy',$vacant->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vacants.show',$vacant->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vacants.edit',$vacant->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $vacants->links() !!}
            </div>
        </div>
    </div>
@endsection
