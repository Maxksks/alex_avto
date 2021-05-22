@extends('layouts.main_layout')

@section('title', 'Название продукта')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-3">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/test.jpg" alt="/img/test.jpg">
        </div>
        <div class="col-md-7">
            <div class="row">
                <h5>Название Продукта</h5>
            </div>
            <div class="row">
                <h5><p class="text-muted">Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона «О пределах добра и зла», написанного в 45 году до н. э. на латинском языке, обнаружение сходства приписывается Ричарду МакКлинтоку</p></h5>
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