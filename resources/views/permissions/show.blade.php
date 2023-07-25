@extends('adminlte::page')

@section('title', 'View Permission')

@section('content_header')
    <h1>View Permission</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Permission: {{ $permission->name }}
            </h3>
        </div>
        <div class="card-body">
            <h5>Roles:</h5>
            <ul>
                @foreach($permission->roles as $role)
                    <li>{{ $role->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@stop