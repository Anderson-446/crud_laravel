@extends('master')

@section('content')

<h2>Cadastro</h2>

@if (session()->has('message'))
    {{ session()->get('message')}}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="firstName" placeholder="Seu nome">
    <input type="text" name="lastName" placeholder="Seu sobrenome">
    <input type="text" name="email" placeholder="Seu email">
    <input type="text" name="password" placeholder="Sua senha">
    <button type="submit">Cadastro</button>
</form>



@endsection