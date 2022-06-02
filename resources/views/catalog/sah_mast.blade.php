<?php
    if (empty(session('category'))){
        session([
            'category' => 'Декор из сахарной мастики',
        ]);
    }
    if (empty(session('sort'))){
        session([
            'sort' => 'asc',
        ]);
    }
    if (empty(session('pole'))){
        session([
            'pole' => 'code',
        ]);
    }
?>

@extends('layouts.add')

@section('title', 'Декор из сахарной мастики')

@section('content')

        <nav class="mt-2" aria-label="breadcrumb">
            <ol class="breadcrumb white pl-5">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('catalog') }}">Каталог</a></li>
                <li class="breadcrumb-item"><a href="">Декор из сахарной мастики</a></li>
            </ol>
        </nav>

        <div class="row ml-5 mr-5">

            <div class="col">
                <nav class="navbar navbar-light rounded">

                    <!-- Navbar brand -->
                    <a class="navbar-brand rounded" href="{{ route('tovarsview', ['categ' => 'Декор из сахарной мастики', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Все категории</a>

                    <!-- Collapse button -->
                    <button class="navbar-toggler toggler-example animated" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation" onclick="getico()">
                        <span class="dark-blue-text">
                          <i id="icomen" class="fas fa-angle-down" style="transition: 1s;"></i>
                        </span>
                    </button>

                    <!-- Collapsible content -->
                    <div class="collapse navbar-collapse show" id="navbarSupportedContent1">

                        <!-- Links -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Младенцы', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Младенцы</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Ангелы|Крещение', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Ангелы/Крещение</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Единороги', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Единороги</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="list-group-item list-group-item-action border-0 rounded" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Домашние животные</a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Домашние животные', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Все домашние животные</a>
                                    <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Домашние животные|Кошки', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Кошки</a>
                                    <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Домашние животные|Собачки', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Собачки</a>
                                    <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Домашние животные|Коровы|бычки', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Коровы/бычки</a>
                                    <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Домашние животные|Овечки', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Овечки</a>
                                    <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Домашние животные|Лошадки|пони', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Лошадки/пони</a>
                                    <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Домашние животные|Прочие домашние животные', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Прочие домашние животные</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="list-group-item list-group-item-action border-0 rounded" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Дикие животные</a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="">Все дикие животные</a>
                                    <a class="dropdown-item" href="">Лесные животные<hr></a>
                                    <div class="ml-4">
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Лесные животные|Медведи', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Медведи</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Лесные животные|Олени', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Олени</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Лесные животные|Зайки', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Зайки</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Лесные животные|Лисички', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Лисички</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Лесные животные|Тигры|львы', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Тигры/львы</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Лесные животные|Прочие дикие животные', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Прочие дикие животные</a>
                                    </div>
                                    <a class="dropdown-item" href="">Сафари<hr></a>
                                    <div class="ml-4">
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Сафари|Слоны|бегемоты', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Слоны/бегемоты</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Сафари|Жирафы', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Жирафы</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Сафари|Тигры|львы', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Тигры/львы</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Сафари|Зебры', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Зебры</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => 'Сафари|Прочие экзотические животные', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Прочие экзотические животные</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Мифологические животные|персонажи|драконы', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Мифологические животные/персонажи/драконы</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Птицы|морские обитатели|насекомые', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Птицы/морские обитатели/насекомые</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Динозавры', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Динозавры</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Свадьба|помолвка', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Свадьба/помолвка</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Праздники', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Праздники</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Транспорт', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Транспорт</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Инструменты|оружие|аксессуары', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Инструменты/оружие/аксессуары</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Спорт', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Спорт</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Профессии', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Профессии</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Документы', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Документы</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Надписи|таблички', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Надписи/таблички</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Цифры', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Цифры</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Цветы|растения|деревья', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Цветы/растения/деревья</a>
                            </li>
                            <li class="nav-item">
                                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Дополнительный декор', 'pole' => session('pole'), 'sort' => session('sort')]) }}">Дополнительный декор</a>
                            </li>
                        </ul>
                        <!-- Links -->
                    </div>
                    <!-- Collapsible content -->
                </nav>
            </div>

            <div class="col-lg-9 mb-5">
                <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example z-depth-1 rounded">
                    <div class="container">
                        <section class="text-center mb-4">

                            <h2 class="pt-3">Декор из сахарной мастики</h2>
                            <ul class="nav justify-content-end py-1">
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Сортировка</a>
                                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => session('category'), 'pole' => 'code', 'sort' => 'asc']) }}">По умолчанию</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => session('category'), 'pole' => 'price', 'sort' => 'asc']) }}">По возрастанию цены</a>
                                        <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => session('category'), 'pole' => 'price', 'sort' => 'desc']) }}">По убыванию цены</a>
                                    </div>
                                </li>
                            </ul>
                            <br>
                            <div class="row wow fadeIn">

                                @foreach ($tovars as $tovar)

                                <div class="col-lg-4 col-md-12 mb-4" data-id="{{ $tovar['id_tovar'] }}">
                                    <a href="{{ route('tovars.show', $tovar['id_tovar']) }}" class="waves-effect waves-light">
                                        <img src="{{ asset($tovar['photo1']) }}" class="img-fluid rounded" alt="Photo" style="width:auto; height:auto; max-width:70%!important; max-height:250px!important;">
                                    </a>
                                    <br>
                                    <p class="mb-1">
                                        <a href="{{ route('tovars.show', $tovar['id_tovar']) }}" class="font-weight-bold black-text">{{ $tovar['naim'] }}</a>
                                    </p>
                                    <p class="mb-1">
                                        <strong>{{ $tovar['price'] }}₽</strong>
                                    </p>
                                    <div class="row justify-content-center">
                                        <a href="{{ route('tovars.show', $tovar['id_tovar']) }}" data-toggle="tooltip" title="Подробнее о товаре"><button class="btn cloudy-knoxville-gradient btn-sm px-3 waves-effect"><i class="fas fa-info-circle fa-2x indigo-text" aria-hidden="true"></i></button></a>
                                        <form action="{{ route('addcart', $tovar['id_tovar']) }}" method="post">
                                            @csrf
                                            <button class="btn cloudy-knoxville-gradient btn-sm px-3 waves-effect" data-toggle="tooltip" title="Добавить в корзину"><i class="fas fa-cart-plus fa-2x green-text" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach

                        </section>
                        <div>
                            {{ $tovars->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
