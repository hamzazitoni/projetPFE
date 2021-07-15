<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/admin/admin.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin/adminConnexion.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin/affection.css')}}" />
    <link rel="stylesheet" href="{{asset('css/coach/coach.css')}}" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="{{asset('/js/section1/jquery-3.6.0.min.js')}}"></script>
  </head>
    <body>
      <header class="header">
            <div class="row navBarSection container-fluid">
                <div class="col-xs-1"></div>
                <div class="col-md-3 col-xs-3 col-sm-3"><img src="{{ asset('images/section1/iconM3.svg')}}" width="25%"></div>
                <div class="col-md-3 col-xs-3 col-sm-3" ><p>@yield('titledashBoard')</p></div>
                <div class="col-md-3 col-xs-3 col-sm-3"></div>
                <div class="col-md-3 col-xs-3 col-sm-3">
                    <button class="btn btnLogout">Deconnexion</button>
                </div>
            </div>
        </header>
        <div>
            @yield('contentPage')

        </div>
        <script src="{{asset('/js/admin/admin.js')}}"></script>
        <script src="{{asset('/js/coach/coach.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

    </body>
  </html>