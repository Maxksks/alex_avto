@extends('layouts.main_layout')

@section('title', 'Главная')

@section('content')

  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
          {{-- @foreach ($categories as $category) --}}
              
            <!-- Category card -->
            {{-- <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{$imgs[$category->id]}}" alt="/img/test.jpg">
    
                <div class="card-body">
                  <h5><p class="text-muted">{{$category->name}}</p></h5>
                  <a href="#" class="stretched-link"></a>
                </div>
              </div>
            </div>  --}}
          {{-- @endforeach --}}

          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/oils.jpg" alt="/img/test.jpg">
  
              <div class="card-body">
                <h5><p class="text-muted">Масла</p></h5>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div> 
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/diski.jpg" alt="/img/test.jpg">
  
              <div class="card-body">
                <h5><p class="text-muted">Диски</p></h5>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div> 
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/him.png" alt="/img/test.jpg">
  
              <div class="card-body">
                <h5><p class="text-muted">Авто-химия</p></h5>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div> 
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/instrum.jpg" alt="/img/test.jpg">
  
              <div class="card-body">
                <h5><p class="text-muted">Инструменты</p></h5>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div> 
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/tire.png" alt="/img/test.jpg">
  
              <div class="card-body">
                <h5><p class="text-muted">Шины</p></h5>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div> 
          
        </div>
      </div>
    </div>

@endsection  