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

@section('title', 'Работадателю')

@section('content')

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <h2 class="text-center">Уважаемые Работодатели!</h2>
    <h3 class="text-center">Мы открыты для сотрудничества!</h3>

    <div class="page-content">
        <div class="event-page__descr">
            <h3 class="event-page__descr-title">В современных условиях целевое обучение становится одним из преимущественных инструментов подготовки квалифицированных специалистов для различных сфер деятельности.</h3>
            <h3 class="event-page__descr-title">Если Вы заинтересованы в наших студентах, предлагаем Вам ознакомиться с необходимой документацией, количеством мест целевого набора на текущий год, а также подать заявку.</h3>
            <div class="event-page__descr-content">
                <strong style="color: #333333;">Количество мест целевого набора НовГУ 2022</strong><br>
                <div>
                    <a href="https://celevoe.novsu.ru/storage/app/public/docs/Количество мест целевого набора НовГУ 2022 (предварительно).docx.docx" class="" style="outline: none; text-decoration: none;" download="">
                        <img alt="doc" src="https://novsu.ru/local/templates/abitur/images/doc.svg">
                        <span>
                            Количество мест целевого набора НовГУ 2022 <small class="badge badge-primary">doc, 35 Кб</small>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center">Форма для заявки</h2>

    <div class="page-content">
        <div class="event-page__descr">
            <h3 class="event-page__descr-title">Вы можете скачать шаблон формы и отправить заполненый шаблон на почту <a href="mailto:Alexandr.Gerasimov@novsu.ru">Alexandr.Gerasimov@novsu.ru</a></h3>
            <div class="event-page__descr-content"><span style="font-weight: bold;"></span>
                <p style="color: #333333;"></p>
                <p>
                    <strong style="color: #333333;">Форма заявки:</strong>
                    <a href="https://celevoe.novsu.ru/storage/app/public/docs/Форма заявки.docx.docx" target="_blank"><span style="color: #002fa7;">Форма заявки.docx</span></a><br>
                    <br>
                </p>
            </div>
            <h3 class="event-page__descr-title">Или заполните форму</h3>
        </div>
    </div>

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
        .inputtextarea{
            width:100%;
            resize: vertical;
            padding:15px;
            margin:10px 0;
            border-radius:15px;
            border:0;
            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
            height:150px;
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
            width:100%;
        }
        .inputfile{
            padding:15px;
            margin:10px 0;
            border-radius:15px;
        }
    </style>

    <div>
        <!-- form start -->
        <form action="{{ route('orgappcreat') }}" method="POST">
            @csrf
            <div>
                <div>
                    <strong><label for="exampleInputName">Название организации</label></strong>
                    <input name="name" type="text" id="exampleInputName" class="inputtext" placeholder="Введите название организации" required>
                </div>
                <div>
                    <strong><label for="exampleInputPos">Направление подготовки/специальность</label></strong>
                    <select name="pos" type="text" id="InputPos" class="inputtext" placeholder="Введите направление подготовки/специальность" onchange="profiladd()" required>
                        <option disabled>Бакалавриат</option>
                        <option value="01.03.02 Прикладная математика и информатика">01.03.02 Прикладная математика и информатика</option>
                        <option value="05.03.02 География">05.03.02 География</option>
                        <option value="06.03.01 Биология">06.03.01 Биология</option>
                        <option value="07.03.01 Архитектура">07.03.01 Архитектура</option>
                        <option value="07.03.03 Дизайн архитектурной среды">07.03.03 Дизайн архитектурной среды</option>
                        <option value="08.03.01 Строительство">08.03.01 Строительство</option>
                        <option value="09.03.01 Информатика и вычислительная техника">09.03.01 Информатика и вычислительная техника</option>
                        <option value="11.03.01 Радиотехника">11.03.01 Радиотехника</option>
                        <option value="11.03.04 Электроника и наноэлектроника">11.03.04 Электроника и наноэлектроника</option>
                        <option value="13.03.01 Теплоэнергетика и теплотехника">13.03.01 Теплоэнергетика и теплотехника</option>
                        <option value="13.03.02 Электроэнергетика и электротехника">13.03.02 Электроэнергетика и электротехника</option>
                        <option value="15.03.05 Конструкторско-технологическое обеспечение машиностроительных производств">15.03.05 Конструкторско-технологическое обеспечение машиностроительных производств</option>
                        <option value="15.03.06 Мехатроника и робототехника">15.03.06 Мехатроника и робототехника</option>
                        <option value="21.03.02 Землеустройство и кадастры">21.03.02 Землеустройство и кадастры</option>
                        <option value="23.03.03 Эксплуатация транспортно-технологических машин и комплексов">23.03.03 Эксплуатация транспортно-технологических машин и комплексов</option>
                        <option value="29.03.04 Технология художественной обработки">29.03.04 Технология художественной обработки</option>
                        <option value="34.03.01 Сестринское дело">34.03.01 Сестринское дело</option>
                        <option value="35.03.01 Лесное дело">35.03.01 Лесное дело</option>
                        <option value="37.03.01 Психология">37.03.01 Психология</option>
                        <option value="38.03.01 Экономика">38.03.01 Экономика</option>
                        <option value="38.03.02 Менеджмент">38.03.02 Менеджмент</option>
                        <option value="40.03.01 Юриспруденция">40.03.01 Юриспруденция</option>
                        <option value="42.03.02 Журналистика">42.03.02 Журналистика</option>
                        <option value="44.03.01 Педагогическое образование">44.03.01 Педагогическое образование</option>
                        <option value="44.03.03 Специальное (дефектологическое) образование">44.03.03 Специальное (дефектологическое) образование</option>
                        <option value="44.03.05 Педагогическое образование (с двумя профилями подготовки)">44.03.05 Педагогическое образование (с двумя профилями подготовки)</option>
                        <option value="45.03.01 Филология">45.03.01 Филология</option>
                        <option value="45.03.02 Лингвистика">45.03.02 Лингвистика</option>
                        <option value="46.03.01 История">46.03.01 История</option>
                        <option value="46.03.02 Документоведение и архивоведение">46.03.02 Документоведение и архивоведение</option>
                        <option value="54.03.01 Дизайн">54.03.01 Дизайн</option>
                        <option disabled>Специалитет</option>
                        <option value="04.05.01 Фундаментальная и прикладная химия">04.05.01 Фундаментальная и прикладная химия</option>
                        <option value="31.05.01 Лечебное дело">31.05.01 Лечебное дело</option>
                        <option value="31.05.03 Стоматология">31.05.03 Стоматология</option>
                        <option value="33.05.01 Фармация">33.05.01 Фармация</option>
                        <option disabled>Магистратура</option>
                        <option value="09.04.01 Информатика и вычислительная техника">09.04.01 Информатика и вычислительная техника</option>
                        <option value="11.04.01 Радиотехника">11.04.01 Радиотехника</option>
                        <option value="11.04.03 Конструирование и технология электронных средств">11.04.03 Конструирование и технология электронных средств</option>
                        <option value="11.04.04 Электроника и наноэлектроника">11.04.04 Электроника и наноэлектроника</option>
                        <option value="36.04.02 Зоотехния">36.04.02 Зоотехния</option>
                        <option value="38.04.02 Менеджмент">38.04.02 Менеджмент</option>
                        <option value="44.04.01 Педагогическое образование">44.04.01 Педагогическое образование</option>
                        <option value="45.04.02 Лингвистика">45.04.02 Лингвистика</option>
                        <option value="46.04.01 История">46.04.01 История</option>
                        <option disabled>Ординатура</option>
                        <option value="31.08.01 Акушерство и гинекология">31.08.01 Акушерство и гинекология</option>
                        <option value="31.08.07 Патологическая анатомия">31.08.07 Патологическая анатомия</option>
                        <option value="31.08.09 Рентгенология">31.08.09 Рентгенология</option>
                        <option value="31.08.11 Ультразвуковая диагностика">31.08.11 Ультразвуковая диагностика</option>
                        <option value="31.08.12 Функциональная диагностика">31.08.12 Функциональная диагностика</option>
                        <option value="31.08.19 Педиатрия">31.08.19 Педиатрия</option>
                        <option value="31.08.26 Аллергология и иммунология">31.08.26 Аллергология и иммунология</option>
                        <option value="31.08.35 Инфекционные болезни">31.08.35 Инфекционные болезни</option>
                        <option value="31.08.36 Кардиология">31.08.36 Кардиология</option>
                        <option value="31.08.42 Неврология">31.08.42 Неврология</option>
                        <option value="31.08.45 Пульмонология">31.08.45 Пульмонология</option>
                        <option value="31.08.46 Ревматология">31.08.46 Ревматология</option>
                        <option value="31.08.49 Терапия">31.08.49 Терапия</option>
                        <option value="31.08.54 Общая врачебная практика (семейная медицина)">31.08.54 Общая врачебная практика (семейная медицина)</option>
                        <option value="31.08.57 Онкология">31.08.57 Онкология</option>
                        <option value="31.08.58 Отоларингология">31.08.58 Отоларингология</option>
                        <option value="31.08.59 Офтальмология">31.08.59 Офтальмология</option>
                        <option value="31.08.67 Хирургия">31.08.67 Хирургия</option>
                        <option value="31.08.68 Урология">31.08.68 Урология</option>
                        <option value="31.08.73 Стоматология терапевтическая">31.08.73 Стоматология терапевтическая</option>
                        <option value="31.08.74 Стоматология хирургическая">31.08.74 Стоматология хирургическая</option>
                        <option value="31.08.75 Стоматология ортопедическая">31.08.75 Стоматология ортопедическая</option>
                        <option value="31.08.77 Ортодонтия">31.08.77 Ортодонтия</option>
                        <option value="33.08.02 Управление и экономика фармации">33.08.02 Управление и экономика фармации</option>
                    </select>
                </div>
                <div>
                    <strong><label for="exampleInputProfil">Профиль подготовки (при наличии)</label></strong>
                    <select name="profil" type="text" id="InputProfil" class="inputtext" placeholder="Введите профиль подготовки">
                        <option value="Прикладная математика и информатика">Прикладная математика и информатикая</option>
                    </select>
                </div>
                <div>
                    <strong><label for="exampleInputJob">Будущее место трудоустройства и должность</label></strong>
                    <input name="job" type="text" id="exampleInputJob" class="inputtext" placeholder="Введите будущее место трудоустройства и должность" required>
                </div>
                <div>
                    <strong><label for="exampleInputAmJob">Количество вакансий</label></strong>
                    <input name="amou" type="text" id="exampleInputAmJob" class="inputtext" placeholder="Введите количество вакансий" required>
                </div>
                <div>
                    <strong><label for="exampleInputMinJob">Обязательный срок осуществления трудовой деятельности в организации</label></strong>
                    <input name="minjob" type="text" id="exampleInputMinJob" class="inputtext" placeholder="Введите обязательный срок осуществления трудовой деятельности в организации" required>
                </div>
                <div>
                    <strong><label for="exampleInputSupp">Предлагаемые меры социальной поддержки</label></strong>
                    <textarea name="supp" id="exampleInputSupp" class="inputtextarea" placeholder="Введите предлагаемые меры социальной поддержки" required></textarea>
                </div>
                <div>
                    <strong><label for="exampleInputWww">Ссылка на сайт организации – места трудоустройства</label></strong>
                    <input name="www" type="text" id="exampleInputWww" class="inputtext" placeholder="Введите ссылку на сайт организации – места трудоустройства" required>
                </div>
                <div>
                    <strong><label for="exampleInputContact">Контактное лицо от организации – заказчика целевого обучения (ФИО, должность, контактный телефон)</label></strong>
                    <input name="cont" type="text" id="exampleInputContact" class="inputtext" placeholder="Введите данные контактного лица от организации – заказчика целевого обучения" required>
                </div>
                <div class="text-center mt-3">
                    <a target="_blank" href="https://portal.novsu.ru/file/1537915">Нажимая на кнопку «Отправить», Вы соглашаетесь на обработку ваших персональных данных</a>
                </div>
            </div>
            <!-- /.card-body -->
            <br>
            <div>
                <button class="buttonsubm" type="submit">Отправить</button>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        function profiladd() {
            var selpos = document.getElementById("InputPos");
            var selprof = document.getElementById("InputProfil");

            <!--Бакалавриат-->

            if(selpos.value == "01.03.02 Прикладная математика и информатика"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Прикладная математика и информатика", "Прикладная математика и информатика");
            }
            if(selpos.value == "05.03.02 География"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Туризм и страноведение", "Туризм и страноведение");
            }
            if(selpos.value == "06.03.01 Биология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Биохимия", "Биохимия");
                selprof.options[1] = new Option("Биомедицина", "Биомедицина");
            }
            if(selpos.value == "07.03.01 Архитектура"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Архитектура", "Архитектура");
            }
            if(selpos.value == "07.03.03 Дизайн архитектурной среды"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Проектирование городской среды", "Проектирование городской среды");
            }
            if(selpos.value == "08.03.01 Строительство"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Промышленное и гражданское строительство", "Промышленное и гражданское строительство");
            }
            if(selpos.value == "09.03.01 Информатика и вычислительная техника"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Программное обеспечение вычислительной техники и автоматизированных систем", "Программное обеспечение вычислительной техники и автоматизированных систем");
                selprof.options[1] = new Option("Разработка прикладного программного обеспечения для мобильных платформ", "Разработка прикладного программного обеспечения для мобильных платформ");
            }
            if(selpos.value == "11.03.01 Радиотехника"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Радиотехнические средства передачи, приёма и обработки сигналов ", "Радиотехнические средства передачи, приёма и обработки сигналов ");
                selprof.options[1] = new Option("Аппаратно-программные средства радиотехнических систем", "Аппаратно-программные средства радиотехнических систем");
                selprof.options[2] = new Option("Техника и технологии медиаиндустрии", "Техника и технологии медиаиндустрии");
            }
            if(selpos.value == "11.03.03 Конструирование и технология электронных средств"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Проектирование и технология радиоэлектронных средств", "Проектирование и технология радиоэлектронных средств");
                selprof.options[1] = new Option("Информационные технологии в проектировании электронных средств", "Информационные технологии в проектировании электронных средств");
            }
            if(selpos.value == "11.03.04 Электроника и наноэлектроника"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Микроэлектроника и твердотельная электроника", "Микроэлектроника и твердотельная электроника");
            }
            if(selpos.value == "13.03.01 Теплоэнергетика и теплотехника"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Промышленная теплоэнергетика", "Промышленная теплоэнергетика");
            }
            if(selpos.value == "13.03.02 Электроэнергетика и электротехника"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Промышленная электроэнергетика", "Промышленная электроэнергетика");
            }
            if(selpos.value == "15.03.05 Конструкторско-технологическое обеспечение машиностроительных производств"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Технология машиностроения", "Технология машиностроения");
            }
            if(selpos.value == "15.03.06 Мехатроника и робототехника"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Мехатроника и промышленная робототехника", "Мехатроника и промышленная робототехника");
            }
            if(selpos.value == "21.03.02 Землеустройство и кадастры"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Землеустройство и кадастры", "Землеустройство и кадастры");
            }
            if(selpos.value == "23.03.03 Эксплуатация транспортно-технологических машин и комплексов"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Автомобильный сервис", "Автомобильный сервис");
            }
            if(selpos.value == "29.03.04 Технология художественной обработки"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Технология художественной обработки материалов", "Технология художественной обработки материалов");
            }
            if(selpos.value == "34.03.01 Сестринское дело"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Сестринское дело", "Сестринское дело");
            }
            if(selpos.value == "35.03.01 Лесное дело"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Лесопользование и лесоуправление", "Лесопользование и лесоуправление");
            }
            if(selpos.value == "35.03.06 Агроинженерия"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Технические и цифровые системы в АПК", "Технические и цифровые системы в АПК");
            }
            if(selpos.value == "35.03.07 Технология производства и переработки сельскохозяйственной продукции"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Биотехнология продуктов питания", "Биотехнология продуктов питания");
                selprof.options[1] = new Option("Производство и переработка продукции животноводства", "Производство и переработка продукции животноводства");
            }
            if(selpos.value == "36.03.02 Зоотехния"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Технология производства продуктов животноводства", "Технология производства продуктов животноводства");
            }
            if(selpos.value == "37.03.01 Психология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Психология", "Психология");
                selprof.options[1] = new Option("Психология управления", "Психология управления");
                selprof.options[2] = new Option("Психологическая помощь с использованием дистанционных технологий", "Психологическая помощь с использованием дистанционных технологий");
            }
            if(selpos.value == "38.03.01 Экономика"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Бухгалтерский учет, анализ и аудит", "Бухгалтерский учет, анализ и аудит");
                selprof.options[1] = new Option("Финансы и кредит", "Финансы и кредит");
            }
            if(selpos.value == "38.03.02 Менеджмент"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Маркетинг", "Маркетинг");
                selprof.options[1] = new Option("Логистика", "Логистика");
                selprof.options[2] = new Option("Цифровая экономика и управление", "Цифровая экономика и управление");
            }
            if(selpos.value == "40.03.01 Юриспруденция"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Юрист общей практики", "Юрист общей практики");
            }
            if(selpos.value == "42.03.02 Журналистика"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Медиа в цифровом обществе", "Медиа в цифровом обществе");
                selprof.options[1] = new Option("Продюсирование в медиа", "Продюсирование в медиа");
            }
            if(selpos.value == "44.03.01 Педагогическое образование"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Дошкольное образование", "Дошкольное образование");
                selprof.options[1] = new Option("Физическая культура", "Физическая культура");
            }
            if(selpos.value == "44.03.03 Специальное (дефектологическое) образование"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Логопедия", "Логопедия");
            }
            if(selpos.value == "44.03.05 Педагогическое образование (с двумя профилями подготовки)"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Менеджмент воспитания и социальная педагогика", "Менеджмент воспитания и социальная педагогика");
                selprof.options[1] = new Option("Русский язык и литература", "Русский язык и литература");
                selprof.options[2] = new Option("Игропедагогика и английский язык", "Игропедагогика и английский язык");
                selprof.options[3] = new Option("Технология и информатика", "Технология и информатика");
                selprof.options[4] = new Option("Изобразительное искусство и дополнительное образование: декоративно-прикладное искусство", "Изобразительное искусство и дополнительное образование: декоративно-прикладное искусство");
                selprof.options[5] = new Option("Начальное образование и дополнительное образование: внеурочная работа", "Начальное образование и дополнительное образование: внеурочная работа");
                selprof.options[6] = new Option("Английский язык и немецкий язык", "Английский язык и немецкий язык");
                selprof.options[7] = new Option("Немецкий язык и английский язык", "Немецкий язык и английский язык");
                selprof.options[8] = new Option("Физика и информатика", "Физика и информатика");
                selprof.options[9] = new Option("Математика и информатика", "Математика и информатика");
                selprof.options[10] = new Option("История и обществознание", "История и обществознание");
                selprof.options[11] = new Option("Биология и география", "Биология и география");
                selprof.options[12] = new Option("Культурологическое образование и организация социально-культурной деятельности", "Культурологическое образование и организация социально-культурной деятельности")
            }
            if(selpos.value == "45.03.01 Филология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Преподавание филологических дисциплин", "Преподавание филологических дисциплин");
            }
            if(selpos.value == "45.03.02 Лингвистика"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Перевод и переводоведение (английский язык)", "Перевод и переводоведение (английский язык)");
                selprof.options[1] = new Option("Перевод и переводоведение (немецкий язык)", "Перевод и переводоведение (немецкий язык)");
            }
            if(selpos.value == "46.03.01 История"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("История России и археология", "История России и археология");
                selprof.options[1] = new Option("Зарубежная история", "Зарубежная история");
            }
            if(selpos.value == "46.03.02 Документоведение и архивоведение"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Документоведение и архивоведение", "Документоведение и архивоведение");
            }
            if(selpos.value == "54.03.01 Дизайн"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Графический дизайн", "Графический дизайн");
            }

            <!--Специалитет-->

            if(selpos.value == "04.05.01 Фундаментальная и прикладная химия"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Химия и технология удобрений", "Химия и технология удобрений");
            }
            if(selpos.value == "31.05.01 Лечебное дело"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Лечебное дело", "Лечебное дело");
            }
            if(selpos.value == "31.05.03 Стоматология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Стоматология", "Стоматология");
            }
            if(selpos.value == "33.05.01 Фармация"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Фармация", "Фармация");
                selprof.options[1] = new Option("Биомедицина", "Биомедицина");
            }

            <!--Магистратура-->

            if(selpos.value == "09.04.01 Информатика и вычислительная техника"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Информационные технологии больших данных", "Информационные технологии больших данных");
                selprof.options[1] = new Option("Искусственный интеллект и интеллектуальный анализ данных", "Искусственный интеллект и интеллектуальный анализ данных");
            }
            if(selpos.value == "11.04.01 Радиотехника"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Системы и устройства передачи, приема и обработки сигналов", "Системы и устройства передачи, приема и обработки сигналов");
            }
            if(selpos.value == "11.04.03 Конструирование и технология электронных средств"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Микроэлектроника и техника сверхвысоких частот", "Микроэлектроника и техника сверхвысоких частот");
            }
            if(selpos.value == "11.04.04 Электроника и наноэлектроника"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Микро- и наноэлектронные устройства", "Микро- и наноэлектронные устройства");
            }
            if(selpos.value == "36.04.02 Зоотехния"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Организация производства продуктов животноводства", "Организация производства продуктов животноводства");
            }
            if(selpos.value == "38.04.02 Менеджмент"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Финансовый менеджмент", "Финансовый менеджмент");
            }
            if(selpos.value == "44.04.01 Педагогическое образование"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Образовательный менеджмент", "Образовательный менеджмент");
                selprof.options[1] = new Option("Менеджмент и цифровизация образования", "Менеджмент и цифровизация образования");
                selprof.options[2] = new Option("Литературное образование", "Литературное образование");
                selprof.options[3] = new Option("Православная культура в современном образовании", "Православная культура в современном образовании");
                selprof.options[4] = new Option("Образование в области физической культуры и спорта", "Образование в области физической культуры и спорта");
            }
            if(selpos.value == "45.04.02 Лингвистика"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Международный туризм и экскурсионная деятельность", "Международный туризм и экскурсионная деятельность");
            }
            if(selpos.value == "46.04.01 История"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("Отечественная история", "Отечественная история");
                selprof.options[1] = new Option("Международные отношения: Балтийский регион в пространстве истории и культуры", "Международные отношения: Балтийский регион в пространстве истории и культуры");
            }

            <!--Ординатура-->

            if(selpos.value == "31.08.01 Акушерство и гинекология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.07 Патологическая анатомия"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.09 Рентгенология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.11 Ультразвуковая диагностика"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.12 Функциональная диагностика"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.19 Педиатрия"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.26 Аллергология и иммунология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.35 Инфекционные болезни"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.36 Кардиология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.42 Неврология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.45 Пульмонология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.46 Ревматология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.49 Терапия"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.54 Общая врачебная практика (семейная медицина)"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.57 Онкология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.58 Отоларингология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.59 Офтальмология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.67 Хирургия"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.68 Урология"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.73 Стоматология терапевтическая"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.74 Стоматология хирургическая"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.75 Стоматология ортопедическая"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "31.08.77 Ортодонтия"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.value == "33.08.02 Управление и экономика фармации"){
                document.getElementById('InputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
        }
    </script>

@endsection
