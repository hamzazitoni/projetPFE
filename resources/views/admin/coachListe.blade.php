<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    <div class="contentListCoach">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Matricul</th>
                    <th scope="col">Nombre Etudiants</th>
                    <th scope="col"></th>
                </tr>
                <tbody>
                    @forelse($coachs as $coach)
                    <tr>
                        <th scope="row">{{$coach->id}}</th>
                        <td>{{$coach->name}}</td>
                        <td>{{$coach->matricule}}</td>
                        <td>{{ App\Http\Controllers\AdminController::getAllStudentsCountForCoach($coach->id)}}</td>
                        <td><i id='line' class="far fa-edit"></i></td>
                    </tr>
                    @empty
                        Aucun coach pour l'instant !!!.
                    @endforelse
                </tbody>
            </thead>
        </table>
    </div>

    <div class="row">
        <div class="col-xs-4">{{$coach->name}}</div>
        <div class="col-xs-4">{{$coach->matricule}}</div>
        <div class="col-xs-4">Etudiants : {{ App\Http\Controllers\AdminController::getAllStudentsCountForCoach($coach->id)}}</div>
    </div>

</body>
</html>
