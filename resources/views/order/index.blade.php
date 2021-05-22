@extends('layouts.main_layout')

@section('title', 'Заказ')

@section('content')

<style>
    .row{
        padding: 15px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Адресс</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Страна</h5>
                            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                            <h5>Область</h5>
                            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                            <h5>Город</h5>
                            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                            <h5>Улица</h5>
                            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                            <h5>Дом</h5>
                            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Получатель</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Имя</h5>
                            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                            <h5>Фамилия</h5>
                            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                            <h5>Контактный номер</h5>
                            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-outline-dark">перейти к оплате</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>

@endsection