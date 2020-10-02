@extends('layouts.app')

@section('title')Тумба под телевизор @endsection

@section('content')
    <h1>Тумба под телевизор</h1>

    <form class="container">
        <div class="product">
            <img src="https://lightcity39.ru/upload/iblock/9b4/53722c76_64b8_11e8_80e9_0cc47a57bedb_efcbddec_a52e_11e8_80ec_0cc47a57bedb.resize1.jpg" width="500" height="300">
            <p>Мощность равна 50Вт</p>
            <a href="{{ route('products') }}"><button class="back" type="button">Назад</button></a>
            <button class="buy" type="button">Купить за 38990р</button>
        </div>
    </form>
@endsection
