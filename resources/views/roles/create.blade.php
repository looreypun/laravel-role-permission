@extends('adminlte::page')

@section('title', 'Create Role')

@section('content_header')
    <h1>Create Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label>Permissions</label>
                    @foreach($permissions as $permission)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="check_{{ $permission->id }}">
                            <label class="form-check-label" for="check_{{ $permission->id }}">
                                {{ $permission->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop