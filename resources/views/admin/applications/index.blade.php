@extends('layouts.admin_layout')

@section('title', 'Таблица "Заявки абитуриентов"')

@section('head', 'Все заявки')

@section('content')

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>
                    Фамилия
                </th>
                <th>
                    Имя
                </th>
                <th>
                    Отчество
                </th>
                <th>
                    Email
                </th>
                <th>
                    Телефон
                </th>
                <th>
                    Должность
                </th>
                <th>
                    Дата добавления
                </th>
                <th>
                    Статус
                </th>
                <th style="width: 20%">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($apps as $app)
            <tr>
                    <td>
                        {{ $app['name'] }}
                    </td>
                    <td>
                        {{ $app['fam'] }}
                    </td>
                    <td>
                        {{ $app['otch'] }}
                    </td>
                    <td>
                        {{ $app['email'] }}
                    </td>
                    <td>
                        {{ $app['phone'] }}
                    </td>
                    <td>
                        {{ $app['position_app'] }}
                    </td>
                    <td>
                        {{ $app['created_at'] }}
                    </td>
                    <td>
                        @if($app['status'] == 0)
                            <p class="text-danger">Не проверено</p>
                        @else
                            <p class="text-success">Проверено</p>
                        @endif
                    </td>
                    <td class="project-actions text-right">
                        <a hidden class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Просмотр
                        </a>
                        <a class="btn btn-block @if($app['status'] == 0) btn-outline-success @else btn-outline-danger @endif" href="{{ route('app.edit', $app['id_ap']) }}">
                            @if($app['status'] == 0)
                                <i class="fas fa-check"></i>
                            @else
                                <i class="fas fa-times"></i>
                            @endif

                            @if($app['status'] == 0)
                                Проверено
                            @else
                                Не проверено
                            @endif
                        </a>
                        <form hidden action="{{ route('app.destroy', $app['id_ap']) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
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
    </div>

@endsection
