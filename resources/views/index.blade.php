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

@section('title', 'Портал целевого обучения НовГУ')

@section('content')

    <div class="page-content">
        <div class="event-page__descr">
            <h2 class="text-center">Приветствуем Вас на портале целевого обучения НовГУ!</h2>
            <h4>Здесь вы можете ознакомиться с основными составляющими института целевой подготовки специалистов для приоритетных производственных и социальных сфер Новгородской области и России в целом.</h4>
            <h4>Целевое обучение – это обучение на бюджетных местах по программам среднего профессионального или высшего образования в интересах заказчика (органа власти или муниципального управления, предприятия и т.п.)</h4>

        </div>
    </div>

    <div class="page-content">
        <div class="event-page__descr">
            <h3 class="event-page__descr-title">Приём на целевое обучение 2022</h3>
            <div id="carouselExampleIndicators" class="carousel slide mb-5 mt-5" data-mdb-ride="carousel">
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
            <div class="event-page__descr-content"><span style="font-weight: bold;"></span>
                <div>
                    <a href="https://celevoe.novsu.ru/storage/app/public/docs/ПК_Целевое.pdf" class="" style="outline: none; text-decoration: none;" download="">
                        <img alt="pdf" src="https://novsu.ru/local/templates/abitur/images/pdf.svg">
                        <span>
                            Приём на целевое обучение 2022 <small class="badge badge-primary">pdf, 654 Кб</small>
                        </span>
                    </a>
                </div>
            </div>
            <div class="event-page__descr-content"><span style="font-weight: bold;"></span>
                <p>В представленной презентации Вы можете ознакомиться с нормативно-правовой базой, регулирующей:</p>
                <ul>
                    <li>порядок заключения, действия и расторжения договора о целевом обучении;</li>
                    <li>особенности приема на целевое обучение;</li>
                    <li>порядок определения приоритетных направлений подготовки и контрольных цифр приема;</li>
                    <li>принцип взаимной ответственности сторон, заключающих договор о целевом обучении;</li>
                    <li>осуществление контроля и регулирования процесса целевой подготовки специалистов на всех стадиях и др.</li>
                </ul>
                <p>А также изучить основные требования к договору о целевом обучении и перечень существенных условий к нему.</p>
            </div>
            <div class="event-page__descr-content"><span style="font-weight: bold;"></span>
                <p><strong>Прием на целевое обучение</strong> осуществляется при наличии договора о целевом обучении,
                    заключенного между поступающим и заказчиком целевого обучения, в соответствии с положением о целевом
                    обучении и типовой формой договора о целевом обучении, установленными Правительством Российской Федерации.</p>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="event-page__descr">
            <h3 class="event-page__descr-title">Преимущества целевого обучения</h3>
            <div class="event-page__descr-content"><span style="font-weight: bold;"></span>
                <p>1.	Отдельный конкурс на бюджетные места</p>
                <p>2.	Зачисление на целевые места происходит до основного этапа зачисления, таким образом, в случае не поступления на данные места, есть возможность участвовать в общем конкурсе</p>
                <p>3.	Дополнительные меры социальной поддержки за счет предприятия-заказчика при обучении в университете</p>
                <p>4.	Знакомство с будущим местом трудоустройства при прохождении практик на предприятии, которое является будущим работодателем</p>
                <p>5.	Гарантированное трудоустройство выпускников после окончания ВУЗа</p>
            </div>
            <div class="event-page__descr-content mt-5"><span style="font-weight: bold;"></span>
                <div>
                    <a href="https://celevoe.novsu.ru/storage/app/public/docs/Памятка Как стать целевым студентом.docx" class="" style="outline: none; text-decoration: none;" download="">
                        <img alt="doc" src="https://novsu.ru/local/templates/abitur/images/doc.svg">
                        <span>
                            Памятка "целевого" студента <small class="badge badge-primary">doc, 17 Кб</small>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

