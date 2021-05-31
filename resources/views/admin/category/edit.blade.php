@extends('layouts.admin_layout')

@section('title', 'Редактировать категорию')

@section('content')
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактировать категорию : {{$category['name']}}</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
          @if (session('success'))
              <div class="allert allert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
              </div>
          @endif
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
                        <form action="{{ route('category.update', $category['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nameInput">Название категории</label>
                                    <input type="text" value="{{$category['name']}}" name="name" class="form-control" id="nameInput" placeholder="Введите название" required>
                                </div>
                                <div class="form-group">
                                    <label for="aliasInput">Алиас для категории</label>
                                    <input type="text" value="{{$category['alias']}}" name="alias" class="form-control" id="aliasInput" placeholder="Введите алиас" required>
                                </div>
                            </div>
                            <!-- /.card-body -->
          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Редактировать</button>
                          </div>
                        </form>
                      </div>
                </div>
            </div>
          
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

@endsection