@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Employee</div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Name : {{ $emp->name }}</li>
                        <li class="list-group-item">Email : {{ $emp->email }}</li>
                        <li class="list-group-item">Company : {{ $emp->company->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
