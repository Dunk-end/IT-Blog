@extends('layouts.app')

@section('title')Круглая кровать @endsection

@section('content')
    <h1>Круглая кровать</h1>

    <form class="container">
        <div class="product"><img src="https://vip-1gl.ru/vipberrrt/552673af91b15590f73e7ea336b2bd08efdc.jpg" width="500" height="300">
            <p>Высота = 65см</p>
            <p>Выдерживает нагрузку до 500кг</p>
            <a href="{{ route('products') }}"><button class="back" type="button">Назад</button></a>
            <button class="buy" type="button">Купить за 199990р</button>
        </div>
    </form>
@endsection
