<?php
$protocol = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on'))?'https://':'http://';
if ($protocol != 'http://'){
    $public = '/storage/app/public/';
}
else {
    $public = '/storage/';
}
?>

<article data-post="191865" style="border: 1px solid #e0e0e0; border-radius: 20px;" class="article article--color-font-dark mb-4" data-post-action-loading-views="yes" data-post-action-loading-bookmarks="yes" data-post-action-loading-reactions="yes" data-post-action-loading-comments="yes">
    <div class="article__header" data-container-loaded="yes" data-loaded-count="0">
        <div class="article__container-author">
            <div class="company-miniature" onclick="location.href='{{ route('one-org', $el->id_org) }}'">
                <img width="100" height="100" class="" style=" border-radius: 10px;" src="{{ $public . $el->logo }}" alt="Организация: " {{ $el->name_org }}">
                <span class="company-miniature__name">{{ $el->name_org }}</span>
            </div>
        </div>
    </div>
    <div class="article__main">
        <div class="article__container-text">
            <div class="article__container-title">
                <h2 class="article__title article__title--icon">
                    <a style="outline: none; text-decoration: none; color: #2e2e2e;">Должность: {{ $el->position }}</a>
                </h2>
            </div>
            <div class="article__container-excerpt">
                <p class="article__excerpt article__excerpt--icon">
                    <strong>Направление:</strong><br>
                    {{ $el->name_dir }}
                </p>
                <br>
                @if ($el->profil != null)
                    <p class="article__excerpt article__excerpt--icon">
                        <strong>Профиль:</strong><br>
                        {{ $el->profil }}
                    </p>
                    <br>
                @endif
                <p class="article__excerpt article__excerpt--icon">
                    <strong>Меры социальной поддержки:</strong><br>
                    {{ $el->bonuses }}
                </p>
                <br>
                <p class="article__excerpt article__excerpt--icon">
                    <strong>Обязательный срок осуществления трудовой деятельности в организации:</strong><br>
                    {{ $el->min_work }}
                </p>
                <br>
                <p class="article__excerpt article__excerpt--icon">
                    <strong>Количество вакансий:</strong><br>
                    {{ $el->amount_jobs }}
                </p>
                <br>
                <p class="article__excerpt article__excerpt--icon">
                    <strong>Контакты организации:</strong><br>
                    {{ $el->contacts }}
                </p>
                <br>
                <div class="tp-vacancy-card-bottom text-center" style="z-index: 5">
                    <a class="-btn-link-All news__top-allNews" style="outline: none; text-decoration: none;  border-radius: 20px;" href="{{ route('contact-form', $el->id_job) }}">Оставить заявку</a>
                </div>
            </div>
        </div>

        <!--Картинка вакансии-->
        <!--<div class="article__container-icon-image">
            <div class="article__background-icon-image" itemprop="image" itemscope="" itemtype="https://schemaa.org/ImageObject">
                <img width="90" height="85" src="https://tproger.ru/s3/uploads/2022/01/iconfinder-icon-84-cover-icon-original.png" class="article__icon-image lazy entered loaded" alt="Обложка: Моя история в IT: медсестра, тестировщица в Яндексе, инженер по разработке в Сбербанке" itemprop="image url" data-src="https://tproger.ru/s3/uploads/2022/01/iconfinder-icon-84-cover-icon-original.png" data-srcset="https://tproger.ru/s3/uploads/2022/01/iconfinder-icon-84-cover-icon.png 90w, https://tproger.ru/s3/uploads/2022/01/iconfinder-icon-84-cover-icon-2x.png 180w, https://tproger.ru/s3/uploads/2022/01/iconfinder-icon-84-cover-icon-3x.png 270w, https://tproger.ru/s3/uploads/2022/01/iconfinder-icon-84-cover-icon-4x.png 360w" data-sizes="45px, (min-width: 58em) 90px" decoding="async" data-ll-status="loaded" sizes="45px, (min-width: 58em) 90px" srcset="https://tproger.ru/s3/uploads/2022/01/iconfinder-icon-84-cover-icon.png 90w, https://tproger.ru/s3/uploads/2022/01/iconfinder-icon-84-cover-icon-2x.png 180w, https://tproger.ru/s3/uploads/2022/01/iconfinder-icon-84-cover-icon-3x.png 270w, https://tproger.ru/s3/uploads/2022/01/iconfinder-icon-84-cover-icon-4x.png 360w"> </div>
        </div>-->
    </div>
</article>
