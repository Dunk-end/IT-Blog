<!doctype html>
<?php

    $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
        FILTER_SANITIZE_STRING);

    $password = md5($password."sdfhfhsfmn123");
?>
@extends('home')
@section('content')
    <p>Добро пожаловать!</p>
@endsection

