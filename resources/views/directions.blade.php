@extends('layouts.copy_add')

@section('title', 'Ступени образования')

@section('content')

    <div class="container">
        <!--Section: Content-->
        <section class="text-center">
            <!-- Section heading -->
            <h2 class="font-weight-bold mb-5">Ступени образования</h2>

            <div class="text-center mb-5">
                <p class="h5 mb-4">
                    Здесь размещены направления подготовки, по которым возможно целевое обучение.
                </p>
                <p class="h5 mb-4">
                    Выберите актуальную для Вас ступень образования и перейдите по вкладке для ознакомления с предложениями от ведущих организаций и предприятий города и области.
                </p>
            </div>

            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4 orgcon" onclick="location.href='{{ route('direct-sphere', 'Бакалавриат') }}'">
                    <!-- Card -->
                    <div class="card hoverable">
                        <!-- Card image -->
                        <img class="card-img-top" src="https://novsu.ru/upload/iblock/460/46048779334c21b75c47ae76588cee42.jpg" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Бакалавриат | Специалитет</p>
                            <!-- Text -->
                            <p class="mb-2">Бакалавриат | Специалитет</p>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-0 orgcon" onclick="location.href='{{ route('direct-sphere', 'Магистратура') }}'">
                    <!-- Card -->
                    <div class="card hoverable">
                        <!-- Card image -->
                        <img class="card-img-top" src="https://novsu.ru/upload/iblock/8fc/8fc25d1c9628667cf8585dfa59163ebd.jpg" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Магистратура</p>
                            <!-- Text -->
                            <p class="mb-2">Магистратура</p>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4 orgcon" onclick="location.href='{{ route('direct-sphere', 'Ординатура') }}'">
                    <!-- Card -->
                    <div class="card hoverable">
                        <!-- Card image -->
                        <img class="card-img-top" src="https://novsu.ru/upload/iblock/4c4/4c41639c1e00446d4d3b4c795c29e9ad.jpg" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Ординатура</p>
                            <!-- Text -->
                            <p class="mb-2">Ординатура</p>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            <!-- Grid row -->
            <div class="row justify-content-center mt-4">
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4 orgcon" onclick="location.href='{{ route('direct-sphere', 'Аспирантура') }}'">
                    <!-- Card -->
                    <div class="card hoverable">
                        <!-- Card image -->
                        <img class="card-img-top" src="https://novsu.ru/upload/iblock/dde/dde272840e665ed3e5540c4d6ce7729f.jpg" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Аспирантура</p>
                            <!-- Text -->
                            <p class="mb-2">Аспирантура</p>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
            </div>

        </section>
        <!--Section: Content-->
    </div>

@endsection
