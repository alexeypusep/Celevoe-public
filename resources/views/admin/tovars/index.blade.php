@extends('layouts.adminlayout')

@section('title', 'Таблица "Товары"')

@section('head', 'Все товары')

@section('content')

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>
                    Артикул
                </th>
                <th>
                    Название
                </th>
                <th>
                    Цена
                </th>
                <th>
                    Фото 1
                </th>
                <th>
                    Фото 2
                </th>
                <th>
                    Фото 3
                </th>
                <th>
                    Фото 4
                </th>
                <th>
                    Размер
                </th>
                <th>
                    Индекс размера
                </th>
                <th>
                    Масса
                </th>
                <th>
                    Каркас
                </th>
                <th style="width: 50%">

                </th>
                <th>
                    Удаление
                </th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody class="teal-centr">
            @foreach($tovars as $tovar)
                <tr>
                    <td>
                        {{ $tovar['code'] }}
                    </td>
                    <td>
                        {{ $tovar['naim'] }}
                    </td>
                    <td>
                        {{ $tovar['price'] }}
                    </td>
                    <td>
                        <img width="50" src="{{ $tovar['photo1'] }}">
                    </td>
                    <td>
                        <img width="50" src="{{ $tovar['photo2'] }}">
                    </td>
                    <td>
                        <img width="50" src="{{ $tovar['photo3'] }}" >
                    </td>
                    <td>
                        <img width="50" src="{{ $tovar['photo4'] }}">
                    </td>
                    <td>
                        {{ $tovar['size'] }}
                    </td>
                    <td>
                        {{ $tovar['indexsize'] }}
                    </td>
                    <td>
                        {{ $tovar['mass'] }}
                    </td>
                    <td>
                        {{ $tovar['carcass'] }}
                    </td>
                    <td>
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Категория</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Материал</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Краситель</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Хранение</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                        {{ $tovar['category'] }}
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                        {{ $tovar['material'] }}
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                        {{ $tovar['colorant'] }}
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                                        {{ $tovar['storage'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        @if ($tovar['del'] == 0)
                            <p class="bg-gradient-green rounded">Не удалён</p>
                        @elseif ($tovar['del'] == 1)
                            <p class="bg-gradient-red rounded">Удалён</p>
                        @endif
                    </td>
                    <td class="project-actions text-right">
                        <a hidden class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Просмотр
                        </a>
                        <a class="btn btn-info btn-sm" href="{{ route('admintovars.edit', $tovar['id_tovar']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form class="mt-2" action="{{ route('admintovars.destroy', $tovar['id_tovar']) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm delete-btn">
                                <i class="fas fa-trash">
                                </i>
                                Удалить
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            {{ $tovars->links() }}
        </div>
    </div>

@endsection
