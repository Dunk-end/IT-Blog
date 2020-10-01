@extends('layouts.app')

@section('title')Кровать с парящим основанием @endsection

@section('content')
    <h1>Кровать с парящим основанием</h1>

    <form class="container">
        <div class="product">
            <img src="https://ieqpg7lls6.a.trbcdn.net/upload/products/e0f/f5b/e0ff5b3a61b211e7a80c2c768a5115e1/main/e0ff5b3a-61b2-11e7-a80c-2c768a5115e1_0d89c22c-2bbc-11e6-b606-2c768a5115e0.jpeg" width="500" height="300">
            <p>Высота = 22.5см</p>
            <p>Выдерживает нагрузку до 400кг</p>
            <a href="{{ route('products') }}"><button class="back" type="button">Назад</button></a>
            <button class="buy" type="button">Купить за 34990р</button>

        </div>
    </form>
@endsection


