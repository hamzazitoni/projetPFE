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

        <script src="https://cdn.jsdelivr.net/highlight.js/9.9.0/highlight.min.js"></script>
        <!-- <script src="script.js" defer></script> -->
        <!--Css of header-->
        <link rel="stylesheet" href="{{asset('css/section1/header.css')}}">
        <!-- css of section1 -->

        <!-- css of section2 -->
        <link rel="stylesheet" href="{{asset('css/section2/exercice1/main.css')}}" />

        <title>exercice 1</title>
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
                    <a href="{{ route('sections',[ 'id' => 2]) }}">
                        <img src="{{ asset('images/section1/iconM3.svg')}}" width="40%">
                    </a>
                    <div class="score">
                        score : {{ $totalScore }}
                    </div>
                </div>
                <div class="header-right-part">
                    <div class="progress" id="prog_bar">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated active" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </header>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div id="game-board" class='col-md-12 ml-2 mr-2 game'>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
        <script src="{{asset('/js/section1/header.js')}}"></script>
        <script defer type="module" src="{{asset('/js/section2/exercice1/main.js')}}"></script>
    </body>
</html>
