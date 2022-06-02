@extends('layouts.admin_layout')

@section('title', 'Таблица "Заявки организаций"')

@section('head', 'Все заявки')

@section('content')

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>
                    Название организации
                </th>
                <th>
                    Направление подготовки
                </th>
                <th>
                    Профиль подготовки
                </th>
                <th>
                    Будущее место трудоустройства и должность
                </th>
                <th>
                    Количество вакансий
                </th>
                <th>
                    Обязательный срок осуществления трудовой деятельности в организации
                </th>
                <th>
                    Предлагаемые меры социальной поддержки
                </th>
                <th>
                    Ссылка на сайт организации
                </th>
                <th>
                    Контактное лицо от организации
                </th>
                <th>
                    Статус
                </th>
                <th style="width: 10%">
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
                        {{ $app['position_org'] }}
                    </td>
                    <td>
                        {{ $app['profil'] }}
                    </td>
                    <td>
                        {{ $app['job'] }}
                    </td>
                    <td>
                        {{ $app['amount_job'] }}
                    </td>
                    <td>
                        {{ $app['min_job'] }}
                    </td>
                    <td>
                        {{ $app['support'] }}
                    </td>
                    <td>
                        {{ $app['www_url'] }}
                    </td>
                    <td>
                        {{ $app['contacts_org'] }}
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
                        <a class="btn btn-block @if($app['status'] == 0) btn-outline-success @else btn-outline-danger @endif" href="{{ route('appOrg.edit', $app['id_ap']) }}">
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
                        <form hidden action="{{ route('appOrg.destroy', $app['id_ap']) }}" method="POST" style="display: inline-block">
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
