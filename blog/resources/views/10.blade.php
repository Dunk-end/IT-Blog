@extends('layouts.app')

@section('title')Тумба под телевизор @endsection

@section('content')
    <h1>Тумба под телевизор</h1>

    <form class="container">
        <div class="product">
            <img src="https://sdelaipotolok.com/wp-content/uploads/svetilnik-v-stile-modern.jpg" width="500" height="300">
            <p>Мощность равна 50Вт</p>
            <a href="{{ route('products') }}"><button class="back" type="button">Назад</button></a>
            <button class="buy" type="button">Купить за 35990р</button>
        </div>
    </form>
@endsection
