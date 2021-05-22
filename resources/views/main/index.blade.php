@extends('layouts.main_layout')

@section('title', 'Главная')

@section('content')

  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/test.jpg" alt="/img/test.jpg">
  
              <div class="card-body">
                <h5><p class="text-muted">Название категории</p></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

@endsection  