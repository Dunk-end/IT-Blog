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

    $mysql = new mysqli('127.0.0.1', 'root', 'root', 'blog');
    $mysql->query("INSERT INTO `users` (`login`, `email`, `password`)
    VALUES('$login', '$email', '$password')");

    $mysql->close();

?>
@extends('layouts.app')
@section('content')
    <p>Вы успешно зарегистрированы!</p>
@endsection
