@extends('layouts.app')

@section('title')Каталог товаров @endsection

@section('content')
    <button class="down-button" type="button">
        <img src="https://img.icons8.com/fluent/48/000000/down.png" width="20" height="20">
    </button>
    <h1 align="center">Каталог товаров</h1>
    <h3>Кровати:</h3>
    <table>
        <tr>
            <td>
                <div class="container">
                    <div class="product">
                        <a class="p-2" href="{{ route('1') }}"><img src="https://ieqpg7lls6.a.trbcdn.net/upload/products/e0f/f5b/e0ff5b3a61b211e7a80c2c768a5115e1/main/e0ff5b3a-61b2-11e7-a80c-2c768a5115e1_0d89c22c-2bbc-11e6-b606-2c768a5115e0.jpeg" width="300" height="200" alt=""></a>
                            <p>Кровать с парящим основанием</p>
                            <div class="product_price">34990р</div>
                    </div>
                </div>
            </td>
            <td>
                <div class="container">
                    <div class="product">
                        <a href="{{ route('2') }}"><img src="https://obustroeno.com/wp-content/uploads/takaya-krovat-sdelaet-neobychnym-lyuboy-interer.jpg" width="300" height="200" alt=""></a>
                            <p>Подвесная кровать</p>
                            <div class="product_price">15990р</div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="container">
                    <div class="product">
                        <a href="{{ route('4') }}"><img src="https://www.dhresource.com/0x0/f2/albu/g2/M01/79/6D/rBVaG1oXx4SAGU9mAAmH6r7po78078.jpg" width="300" height="200"></a>
                            <p>Смарт кровать</p>
                            <div class="product_price">999990р</div>
                    </div>
                </div>
            </td>
            <td>
                <div class="container">
                    <div class="product">
                        <a href="{{ route('5') }}"><img src="https://vip-1gl.ru/vipberrrt/552673af91b15590f73e7ea336b2bd08efdc.jpg" width="300" height="200"></a>
                            <p>Круглая кровать</p>
                            <div class="product_price">199990р</div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

        <h3>Качели:</h3>
        <table>
            <tr>
                <td>
                    <div class="container">
                        <div class="product">
                            <a class="p-2" href="{{ route('3')}}"><img src="https://images.ru.prom.st/775229582_w640_h640_podvesnoj-divan-kacheli-michigan.jpg" width="300" height="200"></a>
                                <p>Подвесной диван-качели</p>
                                <div class="product_price">10990р</div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="container">
                        <div class="product">
                            <a href="{{ route('6') }}"><img src="https://images.ru.prom.st/502852104_dvuhmestnye-podvesnye-kacheli.jpg" width="300" height="200"></a>
                                <p>Подвесные двухместные качели</p>
                                <div class="product_price">21990р</div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <h3>Тумбы:</h3>
        <table>
            <tr>
                <td>
                    <div class="container">
                        <div class="product">
                            <a href="{{ route('7') }}"><img src="https://vezudivan.ru/upload/resize_cache/iblock/504/800_340_10b014fd9e3863cd8700c3501745054e0/5040ad2a0deca2a457c48b0cddce86df.jpg" width="300" height="200"></a>
                                <p>Подвесная тумба под телевизор</p>
                                <div class="product_price">19990р</div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="container">
                        <div class="product">
                            <a href="{{ route('8') }}"><img src="https://hoff.ru/upload/iblock/c3f/c3f2d19bb573034dad2f490c5a8a7faa.jpg" width="300" height="200"></a>
                                <p>Тумба под телевизор</p>
                                <div class="product_price">29990р</div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <h3>Светильники:</h3>
        <table>
            <tr>
                <td>
                    <div class="container">
                        <div class="product">
                            <a href="{{ route('9') }}"><img src="https://lightcity39.ru/upload/iblock/9b4/53722c76_64b8_11e8_80e9_0cc47a57bedb_efcbddec_a52e_11e8_80ec_0cc47a57bedb.resize1.jpg" width="300" height="200"></a>
                                <p>Светильник подвесной</p>
                                <div class="product_price">38990р</div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="container">
                        <div class="product">
                            <a href="{{ route('10') }}"><img src="https://sdelaipotolok.com/wp-content/uploads/svetilnik-v-stile-modern.jpg" width="300" height="200"></a>
                                <p>Потолочный светильник</p>
                                <div class="product_price">35990р</div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
@endsection


