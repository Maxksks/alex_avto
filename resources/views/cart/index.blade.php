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
                            <h4>Корзина</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Наименование</th>
                                        <th scope="col">Кол-во</th>
                                        <th scope="col">Цена</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Bridgestone Potenza Sport</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="1">
                                        </td>
                                        <td>7099</td>
                                        <td><img src="https://img.icons8.com/fluent/30/000000/delete-sign.png"/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Итого:</td>
                                        <td>7099</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-dark">Оплата</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-outline-dark">Продолжить оформление</button>
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