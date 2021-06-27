@extends('layouts.admin_layout')

@section('title', 'Добавить характеристики')

@section('content')
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить характеристики к товару: {{$prod['name']}}</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
          {{-- @if (session('success'))
              <div class="allert allert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
              </div>
          @endif --}}
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('attributes', $prod['id']) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nameInput">Название характеристики</label>
                                    <input type="text" name="name" class="form-control" id="nameInput" placeholder="Введите название характеристики" required>
                                </div>
                                <div class="form-group">
                                    <label for="valueInput">Значение характеристики</label>
                                    <input type="text" name="value" class="form-control" id="valueInput" placeholder="Введите значение характеристики" required>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            
          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-secondary">Добавить еще</button>
                            <a href="{{URL::previous()}}" class="btn btn-primary">Готово</a>
                          </div>
                        </form>
                      </div>
                </div>
            </div>
          
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

@endsection