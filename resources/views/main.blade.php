@extends('welcome')
@section('title', 'Главная')
@section('content')
    <div class="header">
        <div class="image"></div>
        <div class="header__text">
            <div class="header__up">
                <div class="logo">
                    <a href="{{route('main')}}"><img src="/public/assets/tv.png" alt=""></a>
                    <a href="{{route('main')}}">TopMovie</a>
                    <a style="color: #797979" href="{{route('page', 1)}}">Фильмы</a>
                    <a style="color: #797979" href="{{route('serialsPage', 1)}}">Сериалы</a>
                </div>
                <div class="menu">
                    <a href="#">Регистрация</a>
                    <div class="dropdown">
                        <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img src="/public/assets/Menu.png" alt=""></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Действие</a></li>
                            <li><a class="dropdown-item" href="#">Другое действие</a></li>
                            <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header__down">
                <h1>Флэшбэк (2022)</h1>
                <div class="rate">
                    <div class="imdb">
                        <img src="/public/assets/imdb.png" alt="">
                        <p>5.7/10</p>
                    </div>
                    <div class="kp">
                        <img src="/public/assets/kp.png" alt="">
                        <p>6.5/10</p>
                    </div>
                </div>
                <p class="description">Алекс Льюис, профессиональный киллер с репутацией, в какой-то момент пошел против ветра и теперь вынужден отбиваться и от ФБР, и от криминального босса. Все потому, что убийца отказался нарушить свой моральный кодекс.</p>
            </div>
        </div>
    </div>
    <div class="body__main">
        <div class="navigate">
            <h1>Новые фильмы</h1>
            <div class="dropdown">
                <button class="btn pages_btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Страница
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{route('page', 1)}}">1</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 2)}}">2</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 3)}}">3</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 4)}}">4</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 5)}}">5</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 6)}}">6</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 7)}}">7</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 8)}}">8</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 9)}}">9</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 10)}}">10</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 11)}}">11</a></li>
                    <li><a class="dropdown-item" href="{{route('page', 12)}}">12</a></li>
                </ul>
            </div>
        </div>

        <div class="catalog">
            @foreach($catalog as $item)
                @if(isset($item->find('img.nbl-poster__image')[0]->src))
                <div class="card">
                    <div class="card__all">
                        <img class="card__poster" src="{{$item->find('img.nbl-poster__image')[0]->src}}" alt="">
                        <p class="card__name">{{$item->find('span.nbl-slimPosterBlock__titleText')[0]->text()}}</p>
                        <div class="kp">
                            <img class="rate__kp" src="/public/assets/kp.png" alt="">
                            <p>{{$item->find('div.nbl-poster__propertiesRow')[0]->text()}}/10</p>
                        </div>
                        <a class="card__btn" href="{{route('card', $item->find('a.nbl-slimPosterBlock')[0]->attr('data-content-id'))}}">Подробнее</a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
