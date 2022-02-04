<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
        <link rel="stylesheet" href="{{asset('css/section1/index.css')}}" />
        <link rel="stylesheet" href="{{asset('css/sectionsContent/main.css')}}" />
        <link rel="stylesheet" href="{{asset('css/sectionsContent/section_css.css')}}" />
        <title>@yield('title','Resolution de problemes')</title>
    </head>
    <body>
        <div class="left-menu">
            <div class="img-icon">
                <p>Resolution des problemes</p>
                <div class="user_profil">
                    <img src="{{ asset('images/section1/avatar.svg') }}">
                    <div class="stars">
                        <div class="star">1</div>
                        <div class="star">2</div>
                        <div class="star">3</div>
                        <div class="star">4</div>
                    </div>
                </div>
                <h2 class="text-center useName">{{ $etudiant_name }}</h2>
                <p class="moyenne">Score moyen: {{App\Http\Controllers\EtudiantController::getAvgGlobalScore()}}</p>
                <h2 class="coach">Coach : {{ $coach_name }}</h2>
                <div class=logout><a href="{{ route('logout') }}">Se Deconnecter</a></div>
            </div>
        </div>
        <div class="main-page">
            <header>
                    <div class="header-left-part ">
                        <div class="burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="header-middle-part">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('images/section1/iconM3.svg')}}" width="40%">
                        </a>
                        <div class="score">
                            score : {{ App\Http\Controllers\EtudiantController::getEtudiantTotalScore()}}
                        </div>
                    </div>
                    <div class="header-right-part">
                        <div class="progress" id="prog_bar">
                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated active" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
            </header>
        </div>
        @yield('content')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="{{asset('/js/section1/header.js')}}"></script>
    </body>
</html>
