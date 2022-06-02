@extends('layouts.admin_layout')

@section('title', 'Добавление новой должности')

@section('head', 'Добавление должности')

@section('content')

    <div class="card card-primary">
        <!-- form start -->
        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Организации</label>
                    <select id="exampleInputName" name="id_org" class="form-control" required>
                        @foreach($organizations as $organizaction)
                            <option value="{{ $organizaction->id_org }}">{{ $organizaction->name_org }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputDisc">Направления</label>
                    <select id="exampleInputDisc" name="id_direct" class="form-control" required onchange="profiladd()">
                        @foreach($directions as $direction)
                            <option value="{{ $direction->id_direct }}">{{ $direction->name_dir }} ({{ $direction->sphere }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputDisc">Сфера деятельности</label>
                    <select id="exampleInputDisc" name="spher" class="form-control" required>
                        <option value="Медицинская сфера">Медицинская сфера</option>
                        <option value="Сфера юриспруденции">Сфера юриспруденции</option>
                        <option value="Техническая сфера">Техническая сфера</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputProfil">Профиль подготовки</label>
                    <select id="exampleInputProfil" name="profil" class="form-control">
                        <option value="Прикладная математика и информатика">Прикладная математика и информатика</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputWww">Название должности</label>
                    <input name="position" type="text" class="form-control" id="exampleInputWww" placeholder="Введите название должности" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPhon">Меры социальной поддержки</label>
                    <textarea name="bonuses" class="form-control" id="exampleInputPhon" placeholder="Введите меры социальной поддержки" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputMinWork">Обязательный срок осуществления трудовой деятельности в организации</label>
                    <input name="min_work" type="text" class="form-control" id="exampleInputMinWork" placeholder="Введите обязательный срок осуществления трудовой деятельности в организации" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputAmJob">Количество вакансий</label>
                    <input name="amount_jobs" type="text" class="form-control" id="exampleInputAmJob" placeholder="Введите количество вакансий" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        function profiladd() {
            var selpos = document.getElementById("exampleInputDisc");
            var selprof = document.getElementById("exampleInputProfil");

            console.log(selpos.options[selpos.selectedIndex].text);
            console.log(selprof.value);

            <!--Бакалавриат-->

            if(selpos.options[selpos.selectedIndex].text == "01.03.02 Прикладная математика и информатика (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Прикладная математика и информатика", "Прикладная математика и информатика");
            }
            if(selpos.options[selpos.selectedIndex].text == "05.03.02 География (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Туризм и страноведение", "Туризм и страноведение");
            }
            if(selpos.options[selpos.selectedIndex].text == "06.03.01 Биология (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Биохимия", "Биохимия");
                selprof.options[1] = new Option("Биомедицина", "Биомедицина");
            }
            if(selpos.options[selpos.selectedIndex].text == "07.03.01 Архитектура (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Архитектура", "Архитектура");
            }
            if(selpos.options[selpos.selectedIndex].text == "07.03.03 Дизайн архитектурной среды (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Проектирование городской среды", "Проектирование городской среды");
            }
            if(selpos.options[selpos.selectedIndex].text == "08.03.01 Строительство (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Промышленное и гражданское строительство", "Промышленное и гражданское строительство");
            }
            if(selpos.options[selpos.selectedIndex].text == "09.03.01 Информатика и вычислительная техника (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Программное обеспечение вычислительной техники и автоматизированных систем", "Программное обеспечение вычислительной техники и автоматизированных систем");
                selprof.options[1] = new Option("Разработка прикладного программного обеспечения для мобильных платформ", "Разработка прикладного программного обеспечения для мобильных платформ");
            }
            if(selpos.options[selpos.selectedIndex].text == "11.03.01 Радиотехника (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Радиотехнические средства передачи, приёма и обработки сигналов ", "Радиотехнические средства передачи, приёма и обработки сигналов ");
                selprof.options[1] = new Option("Аппаратно-программные средства радиотехнических систем", "Аппаратно-программные средства радиотехнических систем");
                selprof.options[2] = new Option("Техника и технологии медиаиндустрии", "Техника и технологии медиаиндустрии");
            }
            if(selpos.options[selpos.selectedIndex].text == "11.03.03 Конструирование и технология электронных средств (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Проектирование и технология радиоэлектронных средств", "Проектирование и технология радиоэлектронных средств");
                selprof.options[1] = new Option("Информационные технологии в проектировании электронных средств", "Информационные технологии в проектировании электронных средств");
            }
            if(selpos.options[selpos.selectedIndex].text == "11.03.04 Электроника и наноэлектроника (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Микроэлектроника и твердотельная электроника", "Микроэлектроника и твердотельная электроника");
            }
            if(selpos.options[selpos.selectedIndex].text == "13.03.01 Теплоэнергетика и теплотехника (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Промышленная теплоэнергетика", "Промышленная теплоэнергетика");
            }
            if(selpos.options[selpos.selectedIndex].text == "13.03.02 Электроэнергетика и электротехника (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Промышленная электроэнергетика", "Промышленная электроэнергетика");
            }
            if(selpos.options[selpos.selectedIndex].text == "15.03.05 Конструкторско-технологическое обеспечение машиностроительных производств (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Технология машиностроения", "Технология машиностроения");
            }
            if(selpos.options[selpos.selectedIndex].text == "15.03.06 Мехатроника и робототехника (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Мехатроника и промышленная робототехника", "Мехатроника и промышленная робототехника");
            }
            if(selpos.options[selpos.selectedIndex].text == "21.03.02 Землеустройство и кадастры (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Землеустройство и кадастры", "Землеустройство и кадастры");
            }
            if(selpos.options[selpos.selectedIndex].text == "23.03.03 Эксплуатация транспортно-технологических машин и комплексов (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Автомобильный сервис", "Автомобильный сервис");
            }
            if(selpos.options[selpos.selectedIndex].text == "29.03.04 Технология художественной обработки (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Технология художественной обработки материалов", "Технология художественной обработки материалов");
            }
            if(selpos.options[selpos.selectedIndex].text == "34.03.01 Сестринское дело (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Сестринское дело", "Сестринское дело");
            }
            if(selpos.options[selpos.selectedIndex].text == "35.03.01 Лесное дело (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Лесопользование и лесоуправление", "Лесопользование и лесоуправление");
            }
            if(selpos.options[selpos.selectedIndex].text == "35.03.06 Агроинженерия (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Технические и цифровые системы в АПК", "Технические и цифровые системы в АПК");
            }
            if(selpos.options[selpos.selectedIndex].text == "35.03.07 Технология производства и переработки сельскохозяйственной продукции (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Биотехнология продуктов питания", "Биотехнология продуктов питания");
                selprof.options[1] = new Option("Производство и переработка продукции животноводства", "Производство и переработка продукции животноводства");
            }
            if(selpos.options[selpos.selectedIndex].text == "36.03.02 Зоотехния (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Технология производства продуктов животноводства", "Технология производства продуктов животноводства");
            }
            if(selpos.options[selpos.selectedIndex].text == "37.03.01 Психология (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Психология", "Психология");
                selprof.options[1] = new Option("Психология управления", "Психология управления");
                selprof.options[2] = new Option("Психологическая помощь с использованием дистанционных технологий", "Психологическая помощь с использованием дистанционных технологий");
            }
            if(selpos.options[selpos.selectedIndex].text == "38.03.01 Экономика (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Бухгалтерский учет, анализ и аудит", "Бухгалтерский учет, анализ и аудит");
                selprof.options[1] = new Option("Финансы и кредит", "Финансы и кредит");
            }
            if(selpos.options[selpos.selectedIndex].text == "38.03.02 Менеджмент (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Маркетинг", "Маркетинг");
                selprof.options[1] = new Option("Логистика", "Логистика");
                selprof.options[2] = new Option("Цифровая экономика и управление", "Цифровая экономика и управление");
            }
            if(selpos.options[selpos.selectedIndex].text == "40.03.01 Юриспруденция (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Юрист общей практики", "Юрист общей практики");
            }
            if(selpos.options[selpos.selectedIndex].text == "42.03.02 Журналистика (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Медиа в цифровом обществе", "Медиа в цифровом обществе");
                selprof.options[1] = new Option("Продюсирование в медиа", "Продюсирование в медиа");
            }
            if(selpos.options[selpos.selectedIndex].text == "44.03.01 Педагогическое образование (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Дошкольное образование", "Дошкольное образование");
                selprof.options[1] = new Option("Физическая культура", "Физическая культура");
            }
            if(selpos.options[selpos.selectedIndex].text == "44.03.03 Специальное (дефектологическое) образование (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Логопедия", "Логопедия");
            }
            if(selpos.options[selpos.selectedIndex].text == "44.03.05 Педагогическое образование (с двумя профилями подготовки) (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
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
            if(selpos.options[selpos.selectedIndex].text == "45.03.01 Филология (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Преподавание филологических дисциплин", "Преподавание филологических дисциплин");
            }
            if(selpos.options[selpos.selectedIndex].text == "45.03.02 Лингвистика (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Перевод и переводоведение (английский язык)", "Перевод и переводоведение (английский язык)");
                selprof.options[1] = new Option("Перевод и переводоведение (немецкий язык)", "Перевод и переводоведение (немецкий язык)");
            }
            if(selpos.options[selpos.selectedIndex].text == "46.03.01 История (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("История России и археология", "История России и археология");
                selprof.options[1] = new Option("Зарубежная история", "Зарубежная история");
            }
            if(selpos.options[selpos.selectedIndex].text == "46.03.02 Документоведение и архивоведение (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Документоведение и архивоведение", "Документоведение и архивоведение");
            }
            if(selpos.options[selpos.selectedIndex].text == "54.03.01 Дизайн (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Графический дизайн", "Графический дизайн");
            }

            <!--Специалитет-->

            if(selpos.options[selpos.selectedIndex].text == "04.05.01 Фундаментальная и прикладная химия (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Химия и технология удобрений", "Химия и технология удобрений");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.05.01 Лечебное дело (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Лечебное дело", "Лечебное дело");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.05.03 Стоматология (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Стоматология", "Стоматология");
            }
            if(selpos.options[selpos.selectedIndex].text == "33.05.01 Фармация (Бакалавриат)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Фармация", "Фармация");
                selprof.options[1] = new Option("Биомедицина", "Биомедицина");
            }

            <!--Магистратура-->

            if(selpos.options[selpos.selectedIndex].text == "09.04.01 Информатика и вычислительная техника (Магистратура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Информационные технологии больших данных", "Информационные технологии больших данных");
                selprof.options[1] = new Option("Искусственный интеллект и интеллектуальный анализ данных", "Искусственный интеллект и интеллектуальный анализ данных");
            }
            if(selpos.options[selpos.selectedIndex].text == "11.04.01 Радиотехника (Магистратура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Системы и устройства передачи, приема и обработки сигналов", "Системы и устройства передачи, приема и обработки сигналов");
            }
            if(selpos.options[selpos.selectedIndex].text == "11.04.03 Конструирование и технология электронных средств (Магистратура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Микроэлектроника и техника сверхвысоких частот", "Микроэлектроника и техника сверхвысоких частот");
            }
            if(selpos.options[selpos.selectedIndex].text == "11.04.04 Электроника и наноэлектроника (Магистратура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Микро- и наноэлектронные устройства", "Микро- и наноэлектронные устройства");
            }
            if(selpos.options[selpos.selectedIndex].text == "36.04.02 Зоотехния (Магистратура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Организация производства продуктов животноводства", "Организация производства продуктов животноводства");
            }
            if(selpos.options[selpos.selectedIndex].text == "38.04.02 Менеджмент (Магистратура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Финансовый менеджмент", "Финансовый менеджмент");
            }
            if(selpos.options[selpos.selectedIndex].text == "44.04.01 Педагогическое образование (Магистратура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Образовательный менеджмент", "Образовательный менеджмент");
                selprof.options[1] = new Option("Менеджмент и цифровизация образования", "Менеджмент и цифровизация образования");
                selprof.options[2] = new Option("Литературное образование", "Литературное образование");
                selprof.options[3] = new Option("Православная культура в современном образовании", "Православная культура в современном образовании");
                selprof.options[4] = new Option("Образование в области физической культуры и спорта", "Образование в области физической культуры и спорта");
            }
            if(selpos.options[selpos.selectedIndex].text == "45.04.02 Лингвистика (Магистратура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Международный туризм и экскурсионная деятельность", "Международный туризм и экскурсионная деятельность");
            }
            if(selpos.options[selpos.selectedIndex].text == "46.04.01 История (Магистратура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("Отечественная история", "Отечественная история");
                selprof.options[1] = new Option("Международные отношения: Балтийский регион в пространстве истории и культуры", "Международные отношения: Балтийский регион в пространстве истории и культуры");
            }

            <!--Ординатура-->

            if(selpos.options[selpos.selectedIndex].text == "31.08.01 Акушерство и гинекология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.07 Патологическая анатомия (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.09 Рентгенология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.11 Ультразвуковая диагностика (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.12 Функциональная диагностика (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.19 Педиатрия (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.26 Аллергология и иммунология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.35 Инфекционные болезни (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.36 Кардиология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.42 Неврология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.45 Пульмонология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.46 Ревматология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.49 Терапия (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.54 Общая врачебная практика (семейная медицина) (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.57 Онкология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.58 Отоларингология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.59 Офтальмология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.67 Хирургия (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.68 Урология (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.73 Стоматология терапевтическая (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.74 Стоматология хирургическая (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.75 Стоматология ортопедическая (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "31.08.77 Ортодонтия (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
            if(selpos.options[selpos.selectedIndex].text == "33.08.02 Управление и экономика фармации (Ординатура)"){
                document.getElementById('exampleInputProfil').innerHTML = "";
                selprof.options[0] = new Option("");
            }
        }
    </script>

@endsection
