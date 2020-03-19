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
                            Data Company
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('companies.create') }}" class="btn btn-primary">Tambah Company</a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    @if (count($companies) > 0)
                        <ul>
                            @foreach($companies as $company)
                                <div class="card mb-3" style="width: 25rem;">
                                    <img class="card-img-top" src="{{ asset('storage/' . $company->logo) }}" alt="Image {{ $company->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $company->name }}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $company->email }}</h6>
                                        
                                        <a href="{{ route('companies.show', $company->id) }}" class="btn btn-success btn-sm mr-1">show</a>
                                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm mr-1">edit</a>
                                        <button onclick="this.nextSibling.nextSibling.submit()" class="btn btn-danger btn-sm text-white">delete</button>
                                        <form method="post" action="{{ route('companies.destroy', $company->id) }}">@csrf<input type="hidden" name="_method" value="DELETE"></form>
                                    </div>
                                    <div class="card-footer">
                                        <h6>Website : <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></h6>
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    @else
                        <p>Data belum ada. <a href="{{ route('companies.create') }}">Tambah baru</a></p>
                    @endif
                </div>
                
                @if (count($companies->links()->getData()['elements'][0]) > 1)
                    <div class="card-footer">
                        {{ $companies->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
