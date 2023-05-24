@extends('layout.app')
@section('title')
@section('content')
<form action="/reg" method="post">
    @csrf
    <label>Name</label>
    <input type="text" name="name">
    <label>Email</label>
    <input type="text" name="email">
    <label>Password</label>
    <input type="password" name="password">
    <input type="submit" name="save">
</form>
@endsection