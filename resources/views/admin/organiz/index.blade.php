<?php
    $protocol = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on'))?'https://':'http://';
    if ($protocol != 'http://'){
        $public = '/storage/app/public/';
    }
    else {
        $public = '/storage/';
    }
?>

@extends('layouts.admin_layout')

@section('title', 'Таблица "Организации"')

@section('head', 'Все организации')

@section('content')

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>
                    Название организации
                </th>
                <th>
                    Описание
                </th>
                <th>
                    Логотип
                </th>
                <th>
                    Страница сайта
                </th>
                <th>
                    Контактное лицо от организации
                </th>
                <th>
                    Подтверждение
                </th>
                <th style="width: 20%">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($organiz as $organ)
            <tr>
                    <td>
                        {{ $organ['name_org'] }}
                    </td>
                    <td>
                        {{ $organ['description'] }}
                    </td>
                    <td>
                        <img width="50" src="{{ asset($public . $organ['logo']) }}" alt="logo">
                    </td>
                    <td>
                        {{ $organ['www_page'] }}
                    </td>
                    <td>
                        {{ $organ['contacts'] }}
                    </td>
                    <td>
                        @if($organ['confirm'] == 1)
                            Да
                        @else
                            Нет
                        @endif
                    </td>
                    <td class="project-actions text-right">
                        <a hidden class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Просмотр
                        </a>
                        <a class="btn btn-info btn-sm" href="{{ route('organiz.edit', $organ['id_org'], $organ['id_org']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form action="{{ route('organiz.destroy', $organ['id_org'], $organ['id_org']) }}" method="POST" style="display: inline-block">
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
