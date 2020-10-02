@extends('layouts.app')

@section('title')Вход @endsection

@section('content')
    <h1 align="center">Вход(не настроено соединение с бд)</h1>
    <form action="{{ route('auth') }}" method="post">
    @csrf

        <div class="form-group">
            <label for="login">Введите логин</label>
            <input type="text" name="login" placeholder="Введите логин" id="login" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Введите пароль</label>
            <input type="password" name="password" placeholder="Введите пароль" id="password" class="form-control" required>
            <input type="checkbox" id="togglePassword">
            <label id="passwordText">Показать пароль</label>
        </div>
        <button  class="p-2 text-white btn btn-success" type="submit">Войти</button>
        <button class="p-2 text-white" type="reset">Сбросить</button>
        <script>
            let togglePassword = document.getElementById("togglePassword");

            let showOrHidePassword = () => {
                let password = document.getElementById('password');
                if (password.type === 'password') {
                    password.type = 'text';
                } else {
                    password.type = 'password';
                }
            };

            togglePassword.addEventListener("change", showOrHidePassword);
        </script>
    </form>
@endsection
