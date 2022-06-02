@extends('layouts.admin_layout')

@section('title', 'Таблица "Направления"')

@section('head', 'Все направления')

@section('content')

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>
                    Название
                </th>
                <th>
                    Ступень образования
                </th>
                <th style="width: 20%">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($directs as $direct)
            <tr>
                    <td>
                        {{ $direct['name_dir'] }}
                    </td>
                    <td>
                        {{ $direct['sphere'] }}
                    </td>
                    <td class="project-actions text-right">
                        <a hidden class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Просмотр
                        </a>
                        <a class="btn btn-info btn-sm" href="{{ route('direct.edit', $direct['id_direct']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form action="{{ route('direct.destroy', $direct['id_direct']) }}" method="POST" style="display: inline-block">
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
