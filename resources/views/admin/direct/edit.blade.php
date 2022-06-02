@extends('layouts.admin_layout')

@section('title', 'Редактирование направления')

@section('head', 'Редактирование направления')

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
                    <label for="exampleInputPhon">Ступень образования</label>
                    <select name="spher" type="text" id="exampleInputPhon" class="form-control" placeholder="Ступень образования" required>
                        @if($direct[0]['sphere'] == 'Бакалавриат')
                            <option selected value="Бакалавриат">Бакалавриат/Специалитет</option>
                            <option value="Магистратура">Магистратура</option>
                            <option value="Аспирантура">Аспирантура</option>
                            <option value="Ординатура">Ординатура</option>
                        @elseif($direct[0]['sphere'] == 'Магистратура')
                            <option value="Бакалавриат">Бакалавриат/Специалитет</option>
                            <option selected value="Магистратура">Магистратура</option>
                            <option value="Аспирантура">Аспирантура</option>
                            <option value="Ординатура">Ординатура</option>
                        @elseif($direct[0]['sphere'] == 'Аспирантура')
                            <option value="Бакалавриат">Бакалавриат/Специалитет</option>
                            <option value="Магистратура">Магистратура</option>
                            <option selected value="Аспирантура">Аспирантура</option>
                            <option value="Ординатура">Ординатура</option>
                        @elseif($direct[0]['sphere'] == 'Ординатура')
                            <option value="Бакалавриат">Бакалавриат/Специалитет</option>
                            <option value="Магистратура">Магистратура</option>
                            <option value="Аспирантура">Аспирантура</option>
                            <option selected value="Ординатура">Ординатура</option>
                        @endif
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>

@endsection
