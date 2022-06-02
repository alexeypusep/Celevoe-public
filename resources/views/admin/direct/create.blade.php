@extends('layouts.admin_layout')

@section('title', 'Добавление нового направления')

@section('head', 'Добавление направления')

@section('content')

    <div class="card card-primary">
        <!-- form start -->
        <form action="{{ route('direct.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputWww">Название направления</label>
                    <input name="name" type="text" class="form-control" id="exampleInputWww" placeholder="Введите название направления" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPhon">Ступень образования</label>
                    <select name="spher" type="text" id="exampleInputPhon" class="form-control" placeholder="Ступень образования" required>
                        <option value="Бакалавриат">Бакалавриат/Специалитет</option>
                        <option value="Магистратура">Магистратура</option>
                        <option value="Аспирантура">Аспирантура</option>
                        <option value="Ординатура">Ординатура</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добаваить</button>
            </div>
        </form>
    </div>

@endsection
