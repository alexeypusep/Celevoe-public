@extends('layouts.copy_add')

@section('title', 'Сферы деятельности')

@section('content')

    <div class="container">
        <!--Section: Content-->
        <section class="text-center">
            <!-- Section heading -->
            <h2 class="font-weight-bold mb-5">Сферы деятельности</h2>

            <div class="text-center mb-5">
                <p class="h5 mb-4">Мы активно содействуем будущим выпускникам в трудоустройстве</p>
                <p class="h5 mb-4">Здесь Вы можете найти актуальные должности по Вашей специальности.
                Перейдите в раздел интересующей Вас «Сферы деятельности» и найдите для себя лучшие предложения.</p>
            </div>

            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4 orgcon" onclick="location.href='{{ route('jobs-sphere', 'Медицинская сфера') }}'">
                    <!-- Card -->
                    <div class="card hoverable">
                        <!-- Card image -->
                        <img class="card-img-top" src="https://cdn.fishki.net/upload/post/2020/01/05/3191413/tn-194916-72c5a1e91d0aa.jpg" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Медицинская сфера</p>
                            <!-- Text -->
                            <p class="mb-2">Направлена на изучение различных процессов в организме человека, лечение и предотвращение различных заболеваний</p>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4 orgcon" onclick="location.href='{{ route('jobs-sphere', 'Сфера юриспруденции') }}'">
                    <!-- Card -->
                    <div class="card hoverable">
                        <!-- Card image -->
                        <img class="card-img-top" src="https://catherineasquithgallery.com/uploads/posts/2021-02/1613652569_92-p-fon-dlya-prezentatsii-yurisprudentsiya-106.jpg" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Сфера юриспруденции</p>
                            <!-- Text -->
                            <p class="mb-2">Наука, изучающая свойства государства и права</p>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4 orgcon" onclick="location.href='{{ route('jobs-sphere', 'Техническая сфера') }}'">
                    <!-- Card -->
                    <div class="card hoverable">
                        <!-- Card image -->
                        <img class="card-img-top" src="https://u-f.ru/sites/default/files/ajti.jpg" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Техническая сфера</p>
                            <!-- Text -->
                            <p class="mb-2">Работа специалистов технических профессий связана с разработкой, обслуживанием и ремонтом оборудования</p>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </section>
        <!--Section: Content-->
    </div>

@endsection
