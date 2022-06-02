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

@if(!empty($data[0]))

    @section('title') {{ $data['0']['name_org'] }} @endsection

    @section('content')
        <?php //dd($data) ?>
        <article id="post-130078" class="mb-4" data-post-action-loading-reactions="yes" data-post-action-loading-comments="yes" data-post-action-loading-bookmarks="yes" data-post-action-loading-views="yes">
            <div class="" style="border: 1px solid #e0e0e0; border-radius: 20px">
                <div hidden class="" style="background-color: #FFFFFF; text-align: center; border-radius: 100px; margin-top: 10px" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                    <img width="400" style="border-radius: 10px;" src="{{ $public . $data['0']['logo'] }}" srcset="{{ $public . $data['0']['logo'] }} 280w, {{ $public . $data['0']['logo'] }} 670w, {{ $public . $data['0']['logo'] }} 970w, {{ $public . $data['0']['logo'] }} 880w, {{ $public . $data['0']['logo'] }} 720w, {{ $public . $data['0']['logo'] }} 1080w, {{ $public . $data['0']['logo'] }} 660w, {{ $public . $data['0']['logo'] }} 726w, {{ $public . $data['0']['logo'] }} 1656w" sizes="(min-width: 1320px) 880px, (min-width: 977px) 620px, (min-width: 481px) calc(100vw - 40px), 100vw" alt="Обложка: {{ $data['0']['name_org'] }}" itemprop="image url" class="" decoding="async">
                </div>
                <div class="company-header__container company-header__container-with-thumbnail mt-4">
                    <div class="company-header__logo" style="text-align: center">
                        <img width="200" src="{{ $public . $data['0']['logo'] }}" class="" style="border-radius: 10px" alt="{{ $public . $data['0']['name_org'] }}" title="{{ $public . $data['0']['name_org'] }}" srcset="{{ $public . $data['0']['logo'] }} 640w, {{ $public . $data['0']['logo'] }} 330w, {{ $public . $data['0']['logo'] }} 150w, {{ $public . $data['0']['logo'] }} 90w, {{ $public . $data['0']['logo'] }} 50w, {{ $public . $data['0']['logo'] }} 32w, {{ $public . $data['0']['logo'] }} 16w" data-id="130078" sizes="(max-width: 480px) 90px, 150px">
                    </div>
                    <h2 class="company-header__caption" style="text-align: center">{{ $data['0']['name_org'] }}</h2>
                    <br>
                    <div class="company-header__description" style="text-align: center">{{ $data['0']['description'] }}</div>
                    <br>
                    <div class="company-header__description" style="text-align: center"><a href="{{ $organizations['0']['www_page'] }}" target="_blank">Сайт {{ $organizations['0']['name_org'] }}</a></div>
                    <br>
                    <div class="company-header__description pl-4 pr-4" style="text-align: center; margin-right: 10px; margin-left: 10px;"><strong>Контакты организации:</strong> {{ $data[0]['contacts'] }}</div>
                    <br>
                </div>
            </div>
        </article>

        @foreach($data as $el)
            @include('inc.job-inc')
        @endforeach
    @endsection

@else

    @section('title') {{ $organizations['0']['name_org'] }} @endsection

    @section('content')
        <article id="post-130078" class="box format-standard post-130078 company type-company status-publish has-post-thumbnail hentry post-icon no-gradient-cover" data-post-action-loading-reactions="yes" data-post-action-loading-comments="yes" data-post-action-loading-bookmarks="yes" data-post-action-loading-views="yes">
            <div class="company-header" style="border: 1px solid #e0e0e0; border-radius: 20px">
                <div hidden class="entry-image company-thumbnail__image" style="background-color: #FFFFFF; text-align: center; border-radius: 100px; margin-top: 10px" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                    <img width="400" style="margin-top: 20px; border-radius: 10px" src="{{ $public . $organizations['0']['logo'] }}" srcset="{{ $public . $organizations['0']['logo'] }} 280w, {{ $public . $organizations['0']['logo'] }} 670w, {{ $public . $organizations['0']['logo'] }} 970w, {{ $public . $organizations['0']['logo'] }} 880w, {{ $public . $organizations['0']['logo'] }} 720w, {{ $public . $organizations['0']['logo'] }} 1080w, {{ $public . $organizations['0']['logo'] }} 660w, {{ $public . $organizations['0']['logo'] }} 726w, {{ $public . $organizations['0']['logo'] }} 1656w" sizes="(min-width: 1320px) 880px, (min-width: 977px) 620px, (min-width: 481px) calc(100vw - 40px), 100vw" alt="Обложка: {{ $organizations['0']['name_org'] }}" itemprop="image url" class="wp-post-image skip-lazy" decoding="async">
                </div>
                <div class="company-header__container company-header__container-with-thumbnail mt-4">
                    <div class="company-header__logo" style="text-align: center">
                        <img width="200" src="{{ $public . $organizations['0']['logo'] }}" style="border-radius: 10px" class="company-header__logo-img" alt="{{ $public . $organizations['0']['name_org'] }}" title="{{ $public . $organizations['0']['name_org'] }}" srcset="{{ $public . $organizations['0']['logo'] }} 640w, {{ $public . $organizations['0']['logo'] }} 330w, {{ $public . $organizations['0']['logo'] }} 150w, {{ $public . $organizations['0']['logo'] }} 90w, {{ $public . $organizations['0']['logo'] }} 50w, {{ $public . $organizations['0']['logo'] }} 32w, {{ $public . $organizations['0']['logo'] }} 16w" data-id="130078" sizes="(max-width: 480px) 90px, 150px">
                    </div>
                    <h2 class="company-header__caption" style="text-align: center">{{ $organizations['0']['name_org'] }}</h2>
                    <br>
                    <div class="company-header__description" style="text-align: center">{{ $organizations['0']['description'] }}</div>
                    <br>
                    <div class="company-header__description" style="text-align: center"><a href="{{ $organizations['0']['www_page'] }}" target="_blank">Сайт {{ $organizations['0']['name_org'] }}</a></div>
                    <br>
                    <div class="company-header__description" style="text-align: center; margin-right: 10px; margin-left: 10px;"><strong>Контакты организации:</strong> {{ $organizations[0]['contacts'] }}</div>
                    <br>
                </div>
            </div>
        </article>
        <br>
        <h2 style="text-align: center">У организации нет предложений</h2>
    @endsection
@endif
