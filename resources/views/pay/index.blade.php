@extends('layouts.main_layout')

@section('title', 'Корзина')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Оплата</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Фамилия</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите фамилию">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Отчество</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите отчество">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Номер телефона</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter номер телефона">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Страна</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите название страны">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Область</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите область">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Город</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите город">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Улица</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите улицу">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Строение</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите номер дома">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Квартира</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите номер квартиры">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Тип оплаты</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Кредитная карта</option>
                            <option value="1">Кредитная карта</option>
                            <option value="2">Дебетовая карта</option>
                            <option value="3">При получении</option>
                          </select>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-dark">Оплата</button>
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