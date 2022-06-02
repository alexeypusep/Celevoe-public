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

@section('title', 'Портал целевого обучения НовГУ - Главная страница')

@section('content')

    <!--Main layout-->
    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5"><strong>Latest posts</strong></h4>

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card text-center hover-zoom">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-header">Featured</div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>

                                <button type="button" class="btn btn-primary">Button</button>
                            </div>
                            <div class="card-footer">2 days ago</div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card text-center hover-zoom">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-header">Featured</div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>

                                <button type="button" class="btn btn-primary">Button</button>
                            </div>
                            <div class="card-footer">2 days ago</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Post title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="#!" class="btn btn-primary">Read</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/022.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Post title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="#!" class="btn btn-primary">Read</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <!-- Pagination -->
            <nav class="my-4" aria-label="...">
                <ul class="pagination pagination-circle justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
    <!--Main layout-->

    <div id="carouselExampleIndicators" class="carousel slide mb-4" data-mdb-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="9" aria-label="Slide 10"></button>
        </div>
        <div class="carousel-inner rounded">
            <div class="carousel-item active">
                <img src="https://celevoe.novsu.ru/public/img/1.png" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="https://celevoe.novsu.ru/public/img/2.png" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="https://celevoe.novsu.ru/public/img/3.png" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="https://celevoe.novsu.ru/public/img/4.png" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="https://celevoe.novsu.ru/public/img/5.png" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="https://celevoe.novsu.ru/public/img/6.png" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="https://celevoe.novsu.ru/public/img/7.png" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="https://celevoe.novsu.ru/public/img/8.png" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="https://celevoe.novsu.ru/public/img/9.png" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="https://celevoe.novsu.ru/public/img/10.png" class="d-block w-100"/>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="page-content">
        <div class="event-page__descr">
            <h3 class="event-page__descr-title">Правила приёма на целевое обучение 2022:</h3>
            <div class="event-page__descr-content"><span style="font-weight: bold;"></span>
                <p>
                    <strong style="color: #333333;"></strong><br>
                    Ссылка на документ:&nbsp;<a href="https://celevoe.novsu.ru/storage/app/public/docs/ПК_Целевое.pdf" target="_blank"><span style="color: #002fa7;">Правила приёма на целевое обучение 2022</span></a><br>
                </p>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="event-page__descr">
            <h3 class="event-page__descr-title">Возможные меры поддержки лиц, заключивших целевой договор об обучении:</h3>
            <div class="event-page__descr-content"><span style="font-weight: bold;"></span>
                <p style="color: #333333;"></p>
                <p>- материальное стимулирование (выплата стипендии, единовременная выплата, стимулирующая выплата по итогам сессии и т.п.;</p>
                <p>- оплата дополнительных образовательных услуг, оказываемых за рамками образовательной программы, осваиваемой в соответствии с договором о целевом обучении;</p>
                <p>- предоставление в пользование и (или) оплату жилого помещения;</p>
                <p>- оплата питания и (или) проезда до места учебы;</p>
                <p>- предоставление в пользование библиотечным и (или) архивным фондом;</p>
                <p>- другие меры поддержки (на усмотрение заказчика целевого обучения (работодателя);</p>
            </div>
        </div>
    </div>

@endsection

