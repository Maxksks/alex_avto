<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        
                <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{route('home')}}" class="nav-link px-2 text-secondary">Главная</a></li>
                    <li><a href="{{route('cart')}}" class="nav-link px-2 text-white">Корзина</a></li>
                    <li><a href="{{route('wish')}}" class="nav-link px-2 text-white">Избранное</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Гараж</a></li>
                </ul>
        
                <form class="col-12 col-lg-5 mb-3 mb-lg-0 me-lg-auto">
                    <input type="search" class="form-control form-control-dark" placeholder="Поиск..." aria-label="Search">
                </form>
        
                <div class="text-end">
                    <a class="btn btn-outline-light me-2" href="{{ route('login') }}">{{ __('Войти') }}</a>
                    <a class="btn btn-warning" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                </div>
            </div>
        </div>
    </header>
    <body>
    
        <header>
          <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                  <h4 class="text-white">О нас</h4>
                  <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                  <h4 class="text-white">Contact</h4>
                  <ul class="list-unstyled">
                    <li><a href="#" class="text-white">+7(999)610-52-37</a></li>
                    <li><a href="#" class="text-white">max.legashev@mail.ru</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
              <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="32" height="32"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1"></path><g fill="#ffffff" stroke="none" stroke-width="1"><path d="M119.11084,9.61621l-7.09668,1.18628c-12.73875,2.15 -36.76416,13.81501 -36.76416,42.94751h10.75c0,-18.65125 12.57288,-26.81663 20.79663,-30.20288c-0.9675,17.03875 2.85589,27.30458 11.34839,30.47583c7.74,2.84875 16.06537,-1.72042 22.19287,-8.49292c4.89125,5.21375 7.25793,10.63998 7.09668,16.22998c-0.3225,9.03 -7.03957,16.98752 -11.71582,21.39502l11.93628,3.00244c5.0525,-5.9125 10.15329,-14.29204 10.52954,-23.96704c0.37625,-10.4275 -4.67121,-20.10166 -14.99121,-28.70166l-4.57715,-3.82129l-3.32788,4.99707c-4.56875,6.82625 -10.64376,10.27003 -13.38501,9.24878c-2.52625,-0.91375 -6.12457,-7.69045 -3.70582,-27.14795zM55.17773,64.5c-9.43812,0 -18.19053,4.96419 -23.04321,13.03857l-8.72388,14.53979l-11.19092,2.79248c-7.15561,1.79091 -12.21973,8.2787 -12.21973,15.65259v23.85156c0,5.88162 4.86838,10.75 10.75,10.75h6.15186c2.41834,9.22189 10.77882,16.125 20.72314,16.125c9.94432,0 18.3048,-6.90311 20.72315,-16.125h55.30371c2.41834,9.22189 10.77882,16.125 20.72315,16.125c9.94433,0 18.3048,-6.90311 20.72315,-16.125h6.15185c5.88162,0 10.75,-4.86838 10.75,-10.75v-18.47656c0,-7.37388 -5.05967,-13.8686 -12.21973,-15.65259l-32.69092,-8.16748l-8.72388,-14.53979c-4.85156,-8.0725 -13.60106,-13.03857 -23.04321,-13.03857zM55.17773,75.25h14.69727v16.125h-33.50977l4.97607,-8.29346l0.0105,-0.0105c2.92112,-4.84982 8.15467,-7.82104 13.82593,-7.82104zM80.625,75.25h14.69727c5.6831,0 10.90524,2.9718 13.82593,7.83154l4.98657,8.29346h-33.50977zM27.52588,102.125h95.44824l34.20264,8.55591c2.41819,0.60251 4.07324,2.72291 4.07324,5.21753v18.47656h-6.15185c-2.41834,-9.22189 -10.77882,-16.125 -20.72315,-16.125c-9.94433,0 -18.3048,6.90311 -20.72315,16.125h-55.30371c-2.41834,-9.22189 -10.77882,-16.125 -20.72315,-16.125c-9.94432,0 -18.3048,6.90311 -20.72314,16.125h-6.15186v-23.85156c0,-2.49462 1.6611,-4.61119 4.08374,-5.21753zM37.625,129c5.99279,0 10.75,4.75721 10.75,10.75c0,5.99279 -4.75721,10.75 -10.75,10.75c-5.99279,0 -10.75,-4.75721 -10.75,-10.75c0,-5.99279 4.75721,-10.75 10.75,-10.75zM134.375,129c5.99279,0 10.75,4.75721 10.75,10.75c0,5.99279 -4.75721,10.75 -10.75,10.75c-5.99279,0 -10.75,-4.75721 -10.75,-10.75c0,-5.99279 4.75721,-10.75 10.75,-10.75z"></path></g><g fill="#cccccc" stroke="none" stroke-width="1"><path d="M99.195,68.94v3.7h-10.97v30.42h-4.48v-30.42h-10.94v-3.7z"></path></g><path d="M62.805,113.06v-54.12h46.39v54.12z" fill="#ff0000" stroke="#50e3c2" stroke-width="3" opacity="0"></path></g></svg>
                <strong>Alex Avto</strong>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
        </header>
        <style>
          main{
            padding: 50px;
          }
        </style>
        <main>
          @yield('content')
        </main>
            <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        </body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>