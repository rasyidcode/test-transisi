@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Company</div>

                <img class="img-thumbnail" src="{{ asset('storage/' . $company->logo) }}" alt="Image {{ $company->name }}">

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Name : {{ $company->name }}</li>
                        <li class="list-group-item">Email : {{ $company->email }}</li>
                    <li class="list-group-item">Website : <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></li>
                        <li class="list-group-item">
                            @if (count($company->employees) > 0)
                                Employees :
                                <ul>
                                @foreach($company->employees as $employee)
                                    <li>
                                        <p class="m-0">Name : <strong>{{ $employee->name }}</strong></p>
                                        <p class="m-0">Email : <strong>{{ $employee->email }}</strong></p>
                                    </li>
                                @endforeach
                                </ul>
                            @else
                                <i>Belum ada employees.</i>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
