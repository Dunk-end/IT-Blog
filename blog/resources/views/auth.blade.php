<!doctype html>
<?php

    $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
        FILTER_SANITIZE_STRING);

    $password = md5($password."sdfhfhsfmn123");

    $mysql = new mysqli('127.0.0.1', 'root', 'root', 'blog');

    $result = $mysql->query('SELECT * FROM `users` WHERE `login` = \'$login\' AND `password` = \'$password\'');
    $user = $result->fetch_assoc();
    if(count($user) == false) {
        echo "Логин или пароль введены не верно!";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600 * 24 * 30 * 56, "/");

    $mysql->close();

    header('Location: /reg');
?>
@extends('layouts.app')
@section('content')
    <p>Добро пожаловать!</p>
@endsection

