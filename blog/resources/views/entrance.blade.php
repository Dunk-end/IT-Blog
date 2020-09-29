@extends('layouts.app')

@section('title')Вход @endsection

@section('content')
    <h1 align="center">Вход(не настроено)</h1>
    <form action="{{ route('entrance') }}" method="post">
    @csrf

        <div class="form-group">
            <label for="login">Введите логин</label>
            <input type="text" name="login" placeholder="Введите логин" id="login" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Введите пароль</label>
            <input type="text" name="password" placeholder="Введите пароль" id="password" class="form-control">
        </div>
        <button  class="p-2 text-white btn btn-success" type="submit">Войти</button>
    </form>
@endsection
