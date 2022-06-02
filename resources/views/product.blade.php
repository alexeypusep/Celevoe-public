@extends('layouts.add')

@section('title') {{ $tovar['naim'] }} @endsection

@section('content')

    <div class="container my-5 py-2 z-depth-1">
        <a class="btn btn-primary rounded pl-2 pr-2 pt-2 pb-2" href="{{ url()->previous() }}"><i class="fas fa-chevron-left"></i> Назад</a>
        <!--Section: Content-->
        <section class="text-center">
            <!-- Section heading -->
            <h3 class="font-weight-bold mb-5">Описание товара</h3>
            <div class="row">
                <div class="col-lg-6">
                    <!--Carousel Wrapper-->
                    <div id="carousel-thumb1" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4" data-ride="carousel">
                        <!--Slides-->
                        <div class="carousel-inner text-center text-md-left" role="listbox">
                            <div class="carousel-item active text-center">
                                <img src="http://127.0.0.1:8000/{{ $tovar['photo1'] }}" alt="1 slide" class="img-fluid" style="height: 500px">
                            </div>
                            <?php if (!empty($tovar['photo2'])) {?>
                            <div class="carousel-item text-center">
                                <img src="http://127.0.0.1:8000/{{ $tovar['photo2'] }}" alt="2 slide" class="img-fluid" style="height: 500px">
                            </div>
                            <?php };?>
                            <?php if (!empty($tovar['photo3'])) {?>
                            <div class="carousel-item text-center">
                                <img src="http://127.0.0.1:8000/{{ $tovar['photo3'] }}" alt="3 slide" class="img-fluid" style="height: 500px">
                            </div>
                            <?php };?>
                            <?php if (!empty($tovar['photo4'])) {?>
                            <div class="carousel-item text-center">
                                <img src="http://127.0.0.1:8000/{{ $tovar['photo4'] }}" alt="4 slide" class="img-fluid" style="height: 500px">
                            </div>
                            <?php };?>
                        </div>
                        <!--/.Slides-->

                        <!--Thumbnails-->
                        <a class="carousel-control-prev" href="#carousel-thumb1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-thumb1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Thumbnails-->

                    </div>
                    <!--/.Carousel Wrapper-->

                </div>

                <div class="col-lg-5 text-center text-md-left">

                    <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">{{ $tovar['naim'] }}</h2><br>
                    <!--<span class="badge badge-danger product mb-4 ml-xl-0 ml-4">bestseller</span>
                    <span class="badge badge-success product mb-4 ml-2">SALE</span>-->

                    <div class="font-weight-normal">

                        <p class="ml-xl-0 ml-4">
                            <strong>Артикул: </strong>{{ $tovar['code'] }}</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Размер: </strong>{{ $tovar['size'] }}</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Индекс размера: </strong>{{ $tovar['indexsize'] }}</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Вес: </strong>{{ $tovar['mass'] }}</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Материал: </strong>{{ $tovar['material'] }}</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Красители: </strong><p class="text-warning">{{ $tovar['colorant'] }}</p></p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Каркас: </strong>{{ $tovar['carcass'] }}</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Срок и условия хранения: </strong>{{ $tovar['storage'] }}</p>
                        <p class="ml-xl-0 ml-2">
                            <strong>Примечание</strong>
                            <!--Material textarea-->
                        <div class="md-form">
                            <textarea id="form7" class="md-textarea form-control" rows="3" onkeyup="prime()"></textarea>
                            <label for="form7">Например, какой цвет фигурки вам нужен</label>
                        </div>
                        </p>

                        <div class="mt-5">
                            <div class="row mt-3 mb-4">
                                <div class="col-md-12 text-center text-md-left text-md-right">

                                    <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">

                                        <!--<span class="grey-text">
                                          <small>
                                                <s>700₽</s>
                                          </small>
                                        </span>-->
                                        <strong>Стоимость: </strong>
                                        <span class="red-text font-weight-bold">
							            <strong>{{ $tovar['price'] }}₽</strong>
							        </span>
                                    </h3>

                                    <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                                        <strong>Количество: </strong>
                                        <div class="md-form">
                                            <input id="form8" class="md-textarea form-control" rows="3" placeholder="Введите количество товара (поумолчанию 1)" onkeyup="koll()">
                                        </div>
                                    </h3>

                                    <form action="{{ route('addcart', $tovar['id_tovar']) }}" method="post">
                                        @csrf
                                        <input hidden type="text" id="prim" name="primechanie" value="">
                                        <input hidden type="text" id="kollich" name="kolichestvo" value="">
                                        <button class="btn cloudy-knoxville-gradient rounded waves-effect"><i class="fas fa-cart-plus fa-lg green-text" aria-hidden="true"></i> Добавить в корзину</button>
                                        <br><br>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <!--Section: Content-->

    </div>
    <script>
        $('#your-custom-id-material').mdbDropSearch();

        function prime() {
            document.getElementById("prim").value = document.getElementById("form7").value;
        }

        function koll() {
            document.getElementById("kollich").value = document.getElementById("form8").value;
        }
    </script>

@endsection
