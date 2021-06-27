@extends('layouts.admin_layout')

@section('title', 'Добавить категорию')

@section('content')
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить товар</h1>
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
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nameInput">Название товара</label>
                                    <input type="text" name="name" class="form-control" id="nameInput" placeholder="Введите название" required>
                                </div>
                                <div class="form-group">
                                    <label for="aliasInput">Алиас для товара</label>
                                    <input type="text" name="alias" class="form-control" id="aliasInput" placeholder="Введите алиас" required>
                                </div>
                                <div class="form-group">
                                    <label for="quantityInput">Колличество товара</label>
                                    <input type="text" name="quantity" class="form-control" id="quantityInput" placeholder="Введите колличество товара" required>
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <textarea name="description" class="form-control" rows="3" placeholder="Описание ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Выберите категорию</label>
                                            <select name="Categories_id" class="form-control" required>
                                                @foreach ($categories as $category)
                                                    <option value="{{$category['id']}}">{{$category['name']}}</option>  
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <textarea name="description" class="editor"></textarea>
                                </div> --}}
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label for="feature_image">Изображения товара</label>
                                        <img src="" alt="" class="img-uploaded" style="display: block; width: 250px;">
                                        <input type="text" name="img" class="form-control" id="feature_image" name="feature_image" value="" readonly>
                                        <a href="" class="popup_selector" data-inputid="feature_image">Загрузить</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            
          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                          </div>
                        </form>
                      </div>
                </div>
            </div>
          
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

@endsection