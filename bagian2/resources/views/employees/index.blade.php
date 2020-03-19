@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('message'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 p-2">
                            Data Employee
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('employees.create') }}" class="btn btn-primary">Tambah Employee</a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    @if (count($employees) > 0)
                        <ul>
                            @foreach($employees as $employee)
                                <div class="card mb-3" style="width: 25rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $employee->name }}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $employee->email }}</h6>
                                        <h6 class="card-subtitle mb-2 text-muted">From <strong>{{ $employee->company->name }}</strong></h6>

                                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-success btn-sm mr-1">show</a>
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm mr-1">edit</a>
                                        <button onclick="this.nextSibling.nextSibling.submit()" class="btn btn-danger btn-sm text-white">delete</button>
                                        <form method="post" action="{{ route('employees.destroy', $employee->id) }}">@csrf<input type="hidden" name="_method" value="DELETE"></form>
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    @else
                        <p>Data belum ada. <a href="{{ route('employees.create') }}">Tambah baru</a></p>
                    @endif
                </div>
                
                @if (count($employees->links()->getData()['elements'][0]) > 1)
                    <div class="card-footer">
                        {{ $employees->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
