@extends('layouts.app')

@section('title')Подвесная кровать @endsection

@section('content')
    <h1>Подвесная кровать</h1>

    <form class="container">
        <div class="product">
            <img src="https://obustroeno.com/wp-content/uploads/takaya-krovat-sdelaet-neobychnym-lyuboy-interer.jpg" width="500" height="300">

            <p>Высота = 22.5см</p>
            <p>Выдерживает нагрузку до 400кг</p>
            <a href="{{ route('products') }}"><button class="back" type="button">Назад</button></a>
            <button class="buy" type="button">Купить за 15990р</button>

        </div>
    </form>
@endsection
