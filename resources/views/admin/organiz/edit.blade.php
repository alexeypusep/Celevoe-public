@extends('layouts.admin_layout')

@section('title', 'Редактирование организации')

@section('head', 'Редактирование организации')

@section('content')

    <div class="card card-primary">
        <!-- form start -->
        <form action="{{ route('organiz.update', $organizacii[0]['id_org'], $organizacii[0]['id_org']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Название организации</label>
                    <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Введите название организации" value="{{ $organizacii[0]['name_org'] }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputDisc">Описание организации</label>
                    <textarea name="desc" class="form-control" id="exampleInputDisc" placeholder="Введите описание организации" required>{{ $organizacii[0]['description'] }}</textarea>
                </div>
                <div class="form-group">
                    <label>Логотип организации</label><br>
                    <p class="text-danger">Если изображение менять не нужно, то поле оставить пустым!</p>
                    <input class="mb-2" id="id_files" name="logo" type="file">
                    <div id="preview">
                        <img id="preview">
                    </div>

                    <script type="text/javascript">
                        var fileField = document.getElementById('id_files');
                        var preview = document.getElementById('preview');
                        fileField.addEventListener('change', function(event) {
                            for(var x = 0; x < event.target.files.length; x++) {
                                (function(i) {
                                    var reader = new FileReader();
                                    var img = document.createElement('img');
                                    reader.onload = function(event) {
                                        img.setAttribute('src', event.target.result);
                                        img.setAttribute('class', 'preview');
                                        img.setAttribute('style', 'width: 200px');
                                        preview.appendChild(img);
                                    }
                                    reader.readAsDataURL(event.target.files[x]);
                                })(x);
                            }
                        }, false);
                    </script>
                </div>
                <div class="form-group">
                    <label for="exampleInputWww">Адрес сайта организации</label>
                    <input name="www" type="text" class="form-control" id="exampleInputWww" placeholder="Введите адрес сайта организации" value="{{ $organizacii[0]['www_page'] }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPhon">Контактное лицо от организации</label>
                    <input name="phone" type="text" class="form-control" id="exampleInputPhon" placeholder="Введите данные контактного лица от организации" value="{{ $organizacii[0]['contacts'] }}" required>
                </div>
                <div class="form-check">
                    <label>Подтверждение</label><br>
                    <input type="checkbox" class="form-check-input" name="confirm" @if($organizacii[0]['confirm'] == 1) checked @endif id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Отображать на сайте</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>

@endsection
