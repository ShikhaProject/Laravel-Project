@extends('layout.app')
@section('title')
@section('content')
<form action="/login" method="post">
    @csrf
    <label>Email</label>
    <input type="text" name="email">
    <label>Password</label>
    <input type="password" name="password">
    <input type="submit" name="save">
</form>
@endsection