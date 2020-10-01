@extends('layouts.app')

@section('title')Смарт кровать @endsection

@section('content')
    <h1>Смарт кровать</h1>

    <form class="container">
        <div class="product">
            <img src="https://www.dhresource.com/0x0/f2/albu/g2/M01/79/6D/rBVaG1oXx4SAGU9mAAmH6r7po78078.jpg" width="500" height="300">
                <p>Высота = 60см</p>
                <p>Имеет "миллиарды" функций вполть до массажера</p>
                <p>Выдерживает нагрузку до 800кг</p>
                <a href="{{ route('products') }}"><button class="back" type="button">Назад</button></a>
                <button class="buy" type="button">Купить за 999990р</button>
        </div>
    </form>
@endsection
