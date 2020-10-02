@extends('layouts.app')

@section('title')Регистрация @endsection

@section('content')
    <h1 align="center">Регистрация(не настроено соединение с бд)</h1>
    <form action="{{ route('check') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="login">Введите логин</label>
            <input type="text" name="login" placeholder="Введите логин" id="login" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Придумайте пароль</label>
            <input type="password" placeholder="Введите пароль" id="password" name="password" class="form-control" required>
            <input type="checkbox" id="togglePassword">
            <label id="passwordText">Показать пароль</label>
        </div>

        <button  class="p-2 text-white btn btn-success" type="submit">Зарегистрироваться</button>
        <button class="p-2 text-white" type="reset">Сбросить</button>
        <label for="password"></label>
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
