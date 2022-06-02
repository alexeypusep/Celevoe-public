@extends('layouts.copy_add')

@section('title', 'Должности сферы')

@section('content')

    @if(empty($data[0]))
        <h2 class="text-center">В данной сфере пока нет должностей</h2>
    @endif

    <?php
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $mobile = strpos($_SERVER['HTTP_USER_AGENT'],"Mobile");
    $symb = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
    $operam = strpos($_SERVER['HTTP_USER_AGENT'],"Opera M");
    $htc = strpos($_SERVER['HTTP_USER_AGENT'],"HTC_");
    $fennec = strpos($_SERVER['HTTP_USER_AGENT'],"Fennec/");
    $winphone = strpos($_SERVER['HTTP_USER_AGENT'],"WindowsPhone");
    $wp7 = strpos($_SERVER['HTTP_USER_AGENT'],"WP7");
    $wp8 = strpos($_SERVER['HTTP_USER_AGENT'],"WP8");
    $i = 0;
    ?>

    @foreach($data as $el)
        <article onclick="location.href='{{ route('jobs-pos', $el->position) }}'" data-post="" class="article article--color-font-dark orgcon mb-4" style="border: 1px solid #e0e0e0" data-post-action-loading-views="yes" data-post-action-loading-bookmarks="yes" data-post-action-loading-reactions="yes" data-post-action-loading-comments="yes">
            <div class="article__main">
                <div class="article__container-text">
                    <div class="article__container-title">
                        <br>
                        <h3 class="article__title article__title--icon">
                            <a class="article__link" style="outline: none; text-decoration: none; color: #2e2e2e;">{{ $el->position }}</a> <span class="badge bg-primary">{{ $ampos[$i] }}</span>
                        </h3>
                    </div>
                    @if($iphone || $android || $palmpre || $ipod || $berry || $mobile || $symb || $operam || $htc || $fennec || $winphone || $wp7 || $wp8 === true)
                    @else
                        <div class="article__container-excerpt">
                            <p class="article__excerpt article__excerpt--icon">
                                <strong>Организации:</strong><br>
                                @foreach($amorg[$i] as $amor)
                                    <span class="badge badge-success rounded-pill">{{ $amor->name_org }}</span>
                                @endforeach
                            </p>
                            <p class="article__excerpt article__excerpt--icon">
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </article>
        <?php
        $i++;
        ?>
    @endforeach

@endsection
