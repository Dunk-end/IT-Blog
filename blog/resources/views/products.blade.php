@extends('layouts.app')

@section('title')Каталог товаров @endsection

@section('content')
    <button class="down-button" type="button">
        <img src="https://img.icons8.com/fluent/48/000000/down.png" width="20" height="20">
    </button>
    <h1 align="center">Каталог товаров</h1>
    <h3>Кровати:</h3>
    <form class="container">

        <div class="container">
            <div class="product">
                <a class="p-2" href="{{ route('1') }}"><img src="https://ieqpg7lls6.a.trbcdn.net/upload/products/e0f/f5b/e0ff5b3a61b211e7a80c2c768a5115e1/main/e0ff5b3a-61b2-11e7-a80c-2c768a5115e1_0d89c22c-2bbc-11e6-b606-2c768a5115e0.jpeg" width="300" height="200" alt=""></a>
                <p>Кровать с парящем основанием</p>
                <div class="product_price">34990р</div>
            </div>
        </div>

        <div class="container">
            <div class="product">
                <a class="p-2" href="{{ route('2') }}"><img src="https://lh3.googleusercontent.com/proxy/8XvHiKdVxFXvdowuvzISW3QukLuR0SieNY8aLtGyY-gcp2wG5G9ZbMIRtPPmbMbeB7CHOb-95RzzIHMuHcVcN5eNKWodmAio6aJQoIFu4xqHX76KPEp9OQPBpmQq6MxzFA" width="300" height="200" alt=""></a>
                <p>Подвесная кровать</p>
                <div class="product_price">15990р</div>
            </div>
        </div>


        <h3>Качели:</h3>

        <div class="container">
            <div class="product">
                <a class="p-2" href="{{ route('3')}}"><img src="https://images.ru.prom.st/775229582_w640_h640_podvesnoj-divan-kacheli-michigan.jpg" width="300" height="200"></a>
                <p>Подвесные диван-качели</p>
                <div class="product_price">10990р</div>
            </div>
        </div>
        <h3>Тумбы:</h3>

        <h3>Светильники:</h3>
    </form>
@endsection


