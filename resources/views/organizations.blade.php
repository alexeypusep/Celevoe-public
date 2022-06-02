<?php
    $protocol = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on'))?'https://':'http://';
    if ($protocol != 'http://'){
        $public = '/storage/app/public/';
    }
    else {
        $public = '/storage/';
    }
?>

@extends('layouts.copy_add')

@section('title', 'Организации')

@section('content')

    <h2 class="text-center">Организации</h2>
    <div class="text-center mb-5">
        <p class="h5">
            Мы сотрудничаем со многими государственными учреждениями, корпорациями и коммерческими компаниями, с которыми возможно заключить договор на целевое обучение.
        </p>
        <p class="h5">
            Вам предлагается ознакомиться с ними, нажав на интересующую Вас организацию, где можно найти всю информацию об учреждении, а так же ссылку на основной сайт организации.
        </p>
    </div>

    @foreach($data as $el)

        <article onclick="location.href='{{ route('one-org', $el->id_org) }}'" data-post="191865" style="border: 1px solid #e0e0e0; border-radius: 20px;" class="article article--color-font-dark orgcon" data-post-action-loading-views="yes" data-post-action-loading-bookmarks="yes" data-post-action-loading-reactions="yes" data-post-action-loading-comments="yes">
            <div class="article__header" data-container-loaded="yes" data-loaded-count="0">
            </div>
            <div class="row article__main">
                <div class="col article__container-text">
                    <div class="article__container-title">
                        <h2 class="article__title article__title--icon">
                            <a style="outline: none; text-decoration: none; color: #2e2e2e;">{{ $el->name_org }}</a>
                        </h2>
                    </div>
                    <div class="article__container-excerpt">
                        <p class="article__excerpt article__excerpt--icon">
                            {{ $el->description }}
                        </p>
                    </div>
                </div>
                <div class="col article__container-author justify-content-end">
                    <div class="company-miniature">
                        <img width="150" height="150" class="" style=" border-radius: 10px;" src="{{ $public . $el->logo }}" alt="Организация: " {{ $el->name_org }}">
                        <span class="company-miniature__name"></span>
                    </div>
                </div>
            </div>
        </article>
        <br>
        <!--<article style="border: 1px solid #e0e0e0" data-post="191865" class="article article--color-font-dark" data-post-action-loading-views="yes" data-post-action-loading-bookmarks="yes" data-post-action-loading-reactions="yes" data-post-action-loading-comments="yes">
            <div class="article__main">
                <div class="article__container-text">
                    <div class="article__container-title">
                        <h5 class="article__title article__title--icon">
                            <a href="{{ route('one-org', $el->id_org) }}" class="article__link" style="outline: none; text-decoration: none; color: #2e2e2e;">{{ $el->name_org }}</a>
                        </h5>
                    </div>
                    <div class="article__container-excerpt">
                        <p class="article__excerpt article__excerpt--icon">{{ $el->description }}</p>
                    </div>
                </div>
            </div>
            <div class="article__container-background-image article__container-background-image--light">
                <img src="{{ asset($public . $el->logo) }}" srcset="{{ asset($public . $el->logo) }} 330w, {{ asset($public . $el->logo) }} 840w, {{ asset($public . $el->logo) }} 970w, {{ asset($public . $el->logo) }} 1680w, {{ asset($public . $el->logo) }} 720w, {{ asset($public . $el->logo) }} 1080w, {{ asset($public . $el->logo) }} 660w, {{ asset($public . $el->logo) }} 726w, {{ asset($public . $el->logo) }} 1895w" sizes="“(min-width:" calc="" alt="Обложка: {{ $el->name_org }}" class="wp-post-image article__background-image skip-lazy" decoding="async">
            </div>
        </article>-->
    @endforeach

@endsection
