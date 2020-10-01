@extends('layouts.app')

@section('title')Подвесная тумба под телевизор @endsection

@section('content')
    <h1>Подвесная тумба под телевизор</h1>

    <form class="container">
        <div class="product">
            <img src="https://vezudivan.ru/upload/resize_cache/iblock/504/800_340_10b014fd9e3863cd8700c3501745054e0/5040ad2a0deca2a457c48b0cddce86df.jpg" width="500" height="300">
            <p>Высота = 35.7см</p>
            <p>Выдерживает нагрузку до 100кг</p>
            <a href="{{ route('products') }}"><button class="back" type="button">Назад</button></a>
            <button class="buy" type="button">Купить за 19990р</button>
        </div>
    </form>
@endsection
