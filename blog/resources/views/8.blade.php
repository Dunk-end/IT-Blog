@extends('layouts.app')

@section('title')Тумба под телевизор @endsection

@section('content')
    <h1>Тумба под телевизор</h1>

    <form class="container">
        <div class="product">
            <img src="https://hoff.ru/upload/iblock/c3f/c3f2d19bb573034dad2f490c5a8a7faa.jpg" width="500" height="300">
            <p>Высота = 45.7см</p>
            <p>Выдерживает нагрузку до 100кг</p>
            <a href="{{ route('products') }}"><button class="back" type="button">Назад</button></a>
            <button class="buy" type="button">Купить за 29990р</button>
        </div>
    </form>
@endsection
