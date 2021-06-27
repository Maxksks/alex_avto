@extends('layouts.main_layout')

@section('title', 'Название продукта')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-3">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/tire3.png" alt="/img/test.jpg">
        </div>
        <div class="col-md-7">
            <div class="row">
                <h5>Bridgestone Potenza Sport</h5>
            </div>
            <div class="row">
                <h4>7099 руб.</h4>
            </div>
            <div class="row">
                <h5><p class="text-muted">С недавних пор летняя шина Bridgestone Potenza Sport является флагманской моделью покрышек для легковых автомобилей. Логичным будет предположить, что речь идет об их наиболее динамичных версиях, а также спорткарах. Покрышка входит в комплектацию BMW 8-Series, Maserati MC20 и Lamborghini Huracan STO. При разработке применялись решения, которые ранее использовались в шинах для шоссейно-кольцевых гонок и зарекомендовали себя с самой лучшей стороны.</p></h5>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <button type="button" class="btn btn-outline-dark">Купить</button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-dark">Избранное</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection