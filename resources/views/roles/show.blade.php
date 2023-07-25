@extends('adminlte::page')

@section('title', 'View Role')

@section('content_header')
    <h1>View Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Role: {{ $role->name }}
            </h3>
        </div>
        <div class="card-body">
            <h5>Permissions:</h5>
            <ul>
                @foreach($role->permissions as $permission)
                    <li>{{ $permission->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@stop