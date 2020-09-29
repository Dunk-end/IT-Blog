<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body class="page light-theme">
    @include('inc.header')

    <div class="container">
        @include('inc.messages')

        <div class="row">
            <div class="col-8">
                @yield('content')
                <button class="up-button" type="button">
                    <img src="https://img.icons8.com/fluent/48/000000/up.png" width="20" height="20" alt="">
                </button>
            </div>
            <div class="col-4">
                @include('inc.aside')
            </div>
        </div>
    </div>
    @include('inc.footer')

    <script>

        let button = document.querySelector('.theme-button');
        let page = document.querySelector('.page');

        if ('dark-theme' === localStorage.getItem('theme')) {
            page.classList.toggle('dark-theme');
        }

        button.onclick = function() {
            if (page.classList.toggle('dark-theme')) {
                localStorage.setItem('theme', 'dark-theme');
            } else {
                localStorage.setItem('theme', 'light-theme')
            }
        };

        let upButton = document.querySelector('.up-button');

        window.onscroll = function () {
            if (window.pageYOffset > 200) {
                upButton.classList.add('shown');
            } else {
                upButton.classList.remove('shown');
            }
        };

        upButton.onclick = function () {
            window.scrollTo(0, 0);
        };

        let downButton = document.querySelector('.down-button')

        downButton.onclick = function() {
            window.scrollTo(0, 1000000000);
        };


    </script>
</body>
</html>
