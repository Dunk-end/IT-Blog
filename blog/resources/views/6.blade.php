@extends('layouts.app')

@section('title')Круглая кровать @endsection

@section('content')
    <h1>Круглая кровать</h1>

    <form class="container">
        <div class="product">
            <img src="https://images.ru.prom.st/502852104_dvuhmestnye-podvesnye-kacheli.jpg" width="500" height="300">
            <p>Высота = 45см</p>
            <p>Выдерживает нагрузку до 250кг</p>
            <a href="{{ route('products') }}"><button class="back" type="button">Назад</button></a>
            <button class="buy" type="button">Купить за 21990р</button>
        </div>
    </form>
@endsection
