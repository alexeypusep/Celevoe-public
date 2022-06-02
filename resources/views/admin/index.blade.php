@extends('layouts.admin_layout')

@section('title', 'Главная страница')

@section('head', 'Главная')

@section('content')

    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-lightblue">
                    <div class="inner">
                        <h3>Организации</h3>

                        <h5>Количество организаций: {{ $org_count }}</h5>
                    </div>
                    <div class="icon">
                        <i class="far fa-building"></i>
                    </div>
                    <a href="{{ route('organiz.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Должности</h3>

                        <h5>Количество должностей: {{ $job_count }}</h5>
                    </div>
                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <a href="{{ route('jobs.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>Направления</h3>

                        <h5>Количество направлений: {{ $dir_count }}</h5>
                    </div>
                    <div class="icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <a href="{{ route('direct.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Заявки абитуриентов</h3>

                        <h5>Количество заявок: {{ $app_count }}</h5>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('app.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Заявки организаций</h3>

                        <h5>Количество заявок: {{ $appOrg_count }}</h5>
                    </div>
                    <div class="icon">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <a href="{{ route('appOrg.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

@endsection
