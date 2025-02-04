@extends('adminlte::page')

@section('title', 'Add User')

@section('content_header')
    <h1>Add New User</h1>
@endsection

@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>Name:</label> <input type="text" name="name" class="form-control" required>
        <label>Email:</label> <input type="email" name="email" class="form-control" required>
        <label>Role:</label> <input type="text" name="role" class="form-control" required>
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
