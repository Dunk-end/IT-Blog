<!doctype html>
<?php

    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

    if (mb_strlen($login) < 3 || mb_strlen($login) > 90) {
        print_r("Недопустимая длина логина!");
        exit();
    } else if (mb_strlen($email) < 5 || mb_strlen($email) > 90) {
        print_r ("Недопустимая длина email!");
        exit();
    } else if (mb_strlen($password) < 8 || mb_strlen($password) > 100) {
        print_r("Недопустимая длина пароля! (от 8 до 100");
        exit();
   }

    $password = md5($password."sdfhfhsfmn123");
?>
@extends('home')
@section('content')
    <p>Вы успешно зарегистрированы!</p>
@endsection
