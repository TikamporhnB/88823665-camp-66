@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1>Edit User</h1>
@endsection

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Name:</label> <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
        <label>Email:</label> <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
        <label>Role:</label> <input type="text" name="role" value="{{ $user->role }}" class="form-control" required>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
