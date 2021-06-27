@extends('layouts.main_layout')

@section('title', 'Название кат')
    
@section('content')
    
<main>  

    <div class="album py-5 bg-light">
        <div class="container">

        <div class="row">
            <div class="col-md-3">
                <h3>Бренд</h3>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Continental 
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Michelin  
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Goodyear  
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Cooper  
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      Bridgestone 
                    </label>
                  </div>

                <h3>Диаметр</h3>
                <div class="form">
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>30</option>
                    <option value="1">35</option>
                    <option value="2">40</option>
                    <option value="3">45</option>
                    <option value="1">50</option>
                    <option value="2">55</option>
                    <option value="3">60</option>
                  </select>
                  </div>

                <h3>Ширина</h3>
                <div class="form">
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>165</option>
                    <option value="1">175</option>
                    <option value="2">185</option>
                    <option value="3">195</option>
                    <option value="1">205</option>
                    <option value="2">215</option>
                    <option value="3">225</option>
                  </select>
                  </div>

            </div>
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/tire1.png" alt="/img/test.jpg">
              
                          <div class="card-body">
                            <h5><p class="text-muted">Bridgestone Alenza 001</p></h5>
                            <p class="card-text">Сфера применения Bridgestone Alenza 001 — автомобили класса SUV/CUV. Модель характеризуется высоким уровнем акустического и ездового комфорта, надежностью на мокром покрытии, топливной экономичностью и длительным сроком службы.</p>
                            <a href="#" class="stretched-link"></a>
                          </div>
                        </div>
                    </div>
                    <div class="col">
                      <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/tire2.png" alt="/img/test.jpg">
            
                        <div class="card-body">
                          <h5><p class="text-muted">Bridgestone Turanza T005</p></h5>
                          <p class="card-text">Летняя шина Bridgestone Turanza T005 является одной из новинок японского бренда и предлагается им в качестве флагманской модели в сегменте «туринг». Характеризуется улучшенным сцеплением и управляемостью на мокром покрытии.</p>
                          <a href="#" class="stretched-link"></a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/img/tire3.png" alt="/img/test.jpg">
            
                        <div class="card-body">
                          <h5><p class="text-muted">Bridgestone Potenza Sport</p></h5>
                          <p class="card-text">С недавних пор летняя шина Bridgestone Potenza Sport является флагманской моделью покрышек для легковых автомобилей. Логичным будет предположить, что речь идет об их наиболее динамичных версиях, а также спорткарах.</p>
                          <a href="#" class="stretched-link"></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</main>    

@endsection