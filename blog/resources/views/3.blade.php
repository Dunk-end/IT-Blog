@extends('layouts.app')

@section('title')Подвесной диван-качели @endsection

@section('content')
    <h1>Подвесной диван-качели</h1>

    <form class="container">
        <div class="product">
            <img src="https://images.ru.prom.st/775229582_w640_h640_podvesnoj-divan-kacheli-michigan.jpg" width="500" height="300">
            <p>Высота = 55.7см</p>
            <p>Выдерживает нагрузку до 350кг</p>
            <a href="{{ route('products') }}"><button class="back" type="button">Назад</button></a>
            <button class="buy" type="button">Купить за 10990р</button>
        </div>
    </form>
@endsection
