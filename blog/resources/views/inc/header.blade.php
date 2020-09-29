<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <button  class="p-2 text-white theme-button" type="submit">Изменить тему</button>
        <a class="p-2 text-dark" href="{{ route('home') }}" aria-label="Home">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
        </a>

        <a class="p-2 text-white" href="{{ route('products') }}">Каталог товаров</a>
        <a class="p-2 text-white" href="{{ route('contact') }}">Контакы</a>
        <a class="p-2 text-white" href="{{ route('about') }}">Информация о компании</a>
        <a class="p-2 text-white" href="{{ route('contact-data') }}">Сообщения</a>
        <a class="p-2 text-white" href="{{ route('entrance') }}">Войти</a>
        <a class="p-2 text-white" href="{{ route('reg') }}">Зарегистрироваться</a>

    </div>
</nav>

