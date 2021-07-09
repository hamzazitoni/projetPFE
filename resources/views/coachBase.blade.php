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

        @yield('style')

        <title>@yield('title','Coachs')</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Admin DashBoard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('coachLogout')}}">
                            Logout
                        </a>
                    </li>
                    @if(Session::has('coach_id'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('coachLogout')}}">
                                Logout
                            </a>
                        </li>
                    @endif
                    @if(!Session::has('coach_id'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('coachConnexion')}}">
                                Login
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>

        @yield('content')


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

        @yield('script')
    </body>
</html>
