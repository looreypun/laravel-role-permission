@extends('adminlte::page')

@section('title', 'Edit Permission')

@section('content_header')
    <h1>Edit Permission</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Permission Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $permission->name }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop