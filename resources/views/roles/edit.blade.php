@extends('adminlte::page')

@section('title', 'Edit Role')

@section('content_header')
    <h1>Edit Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}">
                </div>
                <div class="form-group">
                    <label>Permissions</label>
                    @foreach($permissions as $permission)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                                   name="permissions[]" value="{{ $permission->id }}"
                                   id="check_{{ $permission->id }}" 
                                   @if($role->permissions->contains($permission)) checked @endif
                            >
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