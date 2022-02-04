<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
        crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

         <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.2/Sortable.min.js"></script>
         <script src="https://kit.fontawesome.com/887c56acc8.js" crossorigin="anonymous"></script>

         <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

         <script src="https://cdn.jsdelivr.net/highlight.js/9.9.0/highlight.min.js"></script>



        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>


        <!-- <script src="script.js" defer></script> -->
        <!--Css of header-->
        <link rel="stylesheet" href="{{asset('css/section1/header.css')}}">
        <!-- css of section1 -->

        <!-- css of section2 -->
         @yield('style')

        <!-- css of section3-->
        <link rel="stylesheet" href="{{asset('css/section3/exercice1.css')}}">
         <link rel="stylesheet" href="{{asset('css/section3/exercice2.css')}}">
         <link rel="stylesheet" href="{{asset('css/section3/chalenge.css') }}">


        <!-- js of section3-->
    <script src="{{ URL::asset('js/section3/exercice1.js') }}"></script>
         <script src="{{ URL::asset('js/section3/exercice1_2.js') }}"></script>
         <script src="{{ URL::asset('js/section3/exercice2.js') }}"></script>
         <script src="{{ URL::asset('js/section3/chalenge/questions.js')}}"></script>
         <script src="{{ URL::asset('js/section3/chalenge/script.js')}}"></script>


        <title>@yield('title','Section 2')</title>
    </head>
    <body>
        <div class="main-page">
            <header>
                <div class="">
                    <div class="">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="header-middle-part">
                    <a href="{{ route('sections',[ 'id' => 1]) }}">
                        <img src="{{ asset('images/section1/iconM3.svg')}}" width="40%">
                    </a>
                    <div class="score">
                      score  <span id="scoregeneral">  : 0</span>
                    </div>
                </div>
                <div class="header-right-part">
                    <div class="progress" id="prog_bar">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated active" role="progressbar" id ="progression" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </header>
        </div>

        @yield('content')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
         <script src="{{asset('/js/section1/header.js')}}"></script>

         @yield('script')
    </body>
</html>
