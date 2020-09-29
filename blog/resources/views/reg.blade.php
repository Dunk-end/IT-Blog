@extends('layouts.app')

@section('title')Регистрация @endsection

@section('content')
    <h1 align="center">Регистрация</h1>
    <form action="{{ route('reg') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="login">Введите логин</label>
            <input type="text" name="login" placeholder="Введите логин" id="login" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Придумайте пароль</label>
            <input type="password" name="password" placeholder="Введите пароль" id="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Подтвердите пароль</label>
            <input type="password" name="password" placeholder="Введите пароль" id="password" class="form-control">
        </div>
        <button  class="p-2 text-white btn btn-success" type="submit">Зарегистрироваться</button>
</form>
@endsection
