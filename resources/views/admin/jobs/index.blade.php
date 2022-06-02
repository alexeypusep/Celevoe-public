@extends('layouts.admin_layout')

@section('title', 'Таблица "Должности"')

@section('head', 'Все вакансии')

@section('content')

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>
                    Организации
                </th>
                <th>
                    Направления
                </th>
                <th>
                    Сфера
                </th>
                <th>
                    Профиль
                </th>
                <th>
                    Должность
                </th>
                <th>
                    Меры социальной поддержки
                </th>
                <th>
                    Обязательный срок осуществления трудовой деятельности в организации
                </th>
                <th>
                    Количество вакансий
                </th>
                <th style="width: 20%">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobs as $job)
            <tr>
                    <td>
                        {{ $job->organizations['name_org'] }}
                    </td>
                    <td>
                        {{ $job->directs['name_dir'] }}
                    </td>
                    <td>
                        {{ $job['sphere'] }}
                    </td>
                    <td>
                        {{ $job['profil'] }}
                    </td>
                    <td>
                        {{ $job['position'] }}
                    </td>
                    <td>
                        {{ $job['bonuses'] }}
                    </td>
                    <td>
                        {{ $job['min_work'] }}
                    </td>
                    <td>
                        {{ $job['amount_jobs'] }}
                    </td>
                    <td class="project-actions text-right">
                        <a hidden class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Просмотр
                        </a>
                        <a class="btn btn-info btn-sm" href="{{ route('jobs.edit', $job['id_job'], $job['id_job']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form action="{{ route('jobs.destroy', $job['id_job'], $job['id_job']) }}" method="POST" style="display: inline-block">
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
