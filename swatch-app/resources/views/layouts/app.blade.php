<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- BOXICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

     <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('img/ic_logo.png')}}" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />


    <title>S'watch</title>
  </head>
  <body>

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <!-- Scroll Up -->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-up-arrow-alt scrollup_icon"></i>
    </a>

    <!-- Swiper JS -->
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>

    <!-- Main Js -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
