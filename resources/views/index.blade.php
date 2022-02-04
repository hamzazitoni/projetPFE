<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.2/Sortable.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/887c56acc8.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/index.css')}}" />
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row text-center"><h2>Resolution de Problèmes</h2></div>
            <div class="row second_row">
                <div class="col-md-4 col-xs-4">
                    <img src="{{ asset('images/section1/iconM3.svg')}}">
                </div>
                <div class="col-md-4 col-xs-4">

                </div>
                <div class="col-md-4 col-xs-4">
                    <a href="{{ route('login')}}"><button class="btn ">Connexion</button></a>
                   <a href="{{ route('signin')}}"><button class="btn">Inscription</button></a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <br><br>
                        <div class="ratio ratio-16x9">
                            <iframe src="/videos/La résolution de problème .mp4"allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <h1>Objectif</h1>
                       <span>À la fin de cette séance.Les étudiants seront en mesure de:</span><br>
                       <span>Identifier les étapes clés d'une prise de décision rationnelle.</span><br>
                       <span>Comprendre les contraintes de processus rationnel de prise de décision.</span><br>
                       <span>Reconnaître certains bais dans la prise de décision.</span><br>
                       <span>Identifiez certains des verrous mentaux qui inhibent la créativité. </span><br>
        
                    </div>


                </div>
        </div>
    </body>
</html>
