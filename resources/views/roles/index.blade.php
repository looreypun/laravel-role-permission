@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('roles.create') }}" class="btn btn-primary">Add Role</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                              <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info">View</a>
                              <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop