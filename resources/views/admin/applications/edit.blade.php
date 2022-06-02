@extends('layouts.admin_layout')

@section('title', 'Редактирование заявки абитуриентов')

@section('head', 'Редактирование заявки')

@section('content')

    <div class="card card-primary">
        <!-- form start -->
        <form action="{{ route('direct.update', $direct[0]['id_direct'], $direct[0]['id_direct']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputWww">Название направления</label>
                    <input name="name" type="text" class="form-control" id="exampleInputWww" placeholder="Введите название направления" value="{{ $direct[0]['name_dir'] }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPhon">Средний проходной балл прошлого года</label>
                    <input name="avg" type="text" class="form-control" id="exampleInputPhon" placeholder="Введите средний проходной балл прошлого года" value="{{ $direct[0]['avg_ball'] }}" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>

@endsection
