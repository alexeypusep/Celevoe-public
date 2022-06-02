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

@section('title', 'Заявка о заинтересованности')

@section('content')

    @if(session('success'))
        <h4>{{ session('success') }}</h4>
    @endif

    <p class="h5">Уважаемые абитуриенты! С целью более эффективного взаимодействия по вопросам целевого обучения, просим вас заполнить форму ниже.</p>
    <p class="h5">Если вы заинтересованы в нашей помощи, обращаться можно по телефону: +7(8162)33-20-44 (приемная комиссия).</p>

    <h2 class="mb-0 text-center">Форма для заявки о заинтересованности</h2>
    <?php //dd($data[0]['name_dir'])?>
    <h3 class="mb-0 text-center">Должность "{{ $data[0]['position'] }}"</h3>
    <h3 class="mb-5 text-center">Направление "{{ $data[0]['name_dir'] }}"</h3>

    <style type="text/css">
        .inputtext{
            border:0;
            border-bottom:1px solid #eee;
            border-radius:10px;
            padding: 10px;
            width:100%;
            margin:10px 0;
            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
            font-family:inherit;
            font-size: inherit;
        }
        .buttonsubm{
            /* remove default behavior */
            appearance:none;
            -webkit-appearance:none;
            /* usual styles */
            padding:10px;
            border:none;
            background-color:#002fa7;
            color:#fff;
            font-weight:600;
            border-radius:5px;
            width:50%;
        }
    </style>

    <div>
        <!-- form start -->
        <form action="{{ route('appcreate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <strong><label for="exampleInputName">Ваше имя</label></strong>
                    <input name="name" type="text" id="exampleInputName" class="inputtext" placeholder="Введите ваше имя" required>
                </div>
                <div>
                    <strong><label for="exampleInputFam">Ваша фамилия</label></strong>
                    <input name="fam" type="text" id="exampleInputFam" class="inputtext" placeholder="Введите вашу фамилию" required>
                </div>
                <div>
                    <strong><label for="exampleInputOtch">Ваше отчество</label></strong>
                    <input name="otch" type="text" id="exampleInputOtch" class="inputtext" placeholder="Введите ваше отчество" required>
                </div>
                <div>
                    <strong><label for="exampleInputEmail">Ваш email</label></strong>
                    <input name="email" type="email" id="exampleInputEmail" class="inputtext" placeholder="Введите ваш email" required>
                </div>
                <div>
                    <strong><label for="exampleInputPhone">Ваш телефон</label></strong>
                    <input name="phone" type="text" id="exampleInputEmail" class="inputtext" placeholder="Введите ваш телефон">
                </div>
                <div hidden>
                    <strong><label for="exampleInputPos">Направление</label></strong>
                    <input name="pos" type="text" id="exampleInputPos" class="inputtext" placeholder="Направление" value="Название организации: {{ $data[0]['name_org'] }}. Название должности: {{ $data[0]['position'] }}. Название направления: {{ $data[0]['name_dir'] }}">
                </div>
                <div class="text-center mt-3">
                    <a target="_blank" href="https://portal.novsu.ru/file/1537915">Нажимая на кнопку «Отправить», Вы соглашаетесь на обработку ваших персональных данных</a>
                </div>
            </div>
            <!-- /.card-body -->
            <br>
            <div style="text-align: center">
                <button class="buttonsubm" type="submit">Отправить</button>
            </div>
        </form>
    </div>

@endsection
