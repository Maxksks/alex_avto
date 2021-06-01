@extends('layouts.admin_layout')

@section('title', 'Категории')

@section('content')
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Все товары</h1>
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
                    <div class="card">
                        <div class="card-body p-0">
                          <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 2%">
                                            ID
                                        </th>
                                        <th style="width: 30%">
                                            Название
                                        </th>
                                        <th style="width: 20%">
                                            Категория 
                                        </th>
                                        <th style="width: 5%">
                                            Колличество
                                        </th>
                                        <th style="width: 5%">
                                            Продано
                                        </th>
                                    </tr>
                                </thead>
                              <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                    
                                        <td>
                                            {{$product['id']}}
                                        </td>
                                        <td>
                                            {{$product['name']}}
                                        </td>
                                        <td>
                                            {{$product->category['name']}}
                                        </td>
                                        <td>
                                            {{$product['quantity']}}
                                        </td>
                                        <td>
                                            {{$product['was_sold_count']}}
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="{{route('product.edit', $product['id'])}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Редактировать
                                            </a>
                                            <form action="{{route('product.destroy', $product['id'])}}"
                                                method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Удалить
                                                </button>
                                            </form>
                                        </td>
                                   
                                    
                                    </tr> 
                                    @endforeach
                              </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>
          
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

@endsection