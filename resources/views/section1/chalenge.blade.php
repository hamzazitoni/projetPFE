<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>chalenge</title>
    <link rel="stylesheet" href="{{asset('css/section1/chalenge.css')}}" />
    <link rel="stylesheet" href="{{asset('css/section1/baseSection.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  </head>
  <body>
      <div class="bg"></div>
      <div class="bg2"></div>
      <div class="row navBarSection">
            <div class="col-xs-1"></div>
            <div class="col-md-3 col-xs-3 col-sm-3"><img src="{{ asset('images/section1/iconM3.svg')}}" width="25%"></div>
            <div class="col-md-3 col-xs-3 col-sm-3" ><p>SCORE : <span class="score1"></span></p></div>
            <div class="col-md-3 col-xs-3 col-sm-3">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped  progress-bar-animated active" id="progressBar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                </div>

            </div>
        </div>

    <div class=" container template" >
        <div class="boxAns">
            <div class="box rectBox " id="probleme">
                <div class="title" width="100%">Le Probleme</div> 
            </div>
            <div class="box rectBox" id="critere">
                <div class="title" >Les critères de decision</div> 

            </div>
            <div class="box rectBox" id="alternative">
                <div class="title" >Les Alternatives</div> 
            </div>
        </div>
        <div class="boxQ">
        <div class="box" id="boxChoice">
            <div class="choice " id="1F" draggable="true" ><p>Classement de Université</p></div> 
            <div class="choice" id="2F" draggable="true"><p>vistie la ville</p></div> 
            <div class="choice " id="1C" draggable="true"><p>La Moyenne</p></div> 
            <div class="choice " id="5F" draggable="true"><p>Choix d'univetsité</p></div> 
            <div class="choice " id="1A" draggable="true"><p>classer les filières selon les critères</p></div> 
            <div class="choice " id="4F" draggable="true"><p>Nombre d'étudiants</p></div> 
            <div class="choice " id="1P" draggable="true" ><p>Choix filière</p></div> 
            <div class="choice " id="2F" draggable="true"><p>Problèmes d'inscription</p></div> 
            <div class="choice " id="2C" draggable="true"><p>Nom de la filière</p></div> 
            <div class="choice" id="2A" draggable="true"><p>Consulter la liste des filières</p></div>
            <div class="choice " id="3F" draggable="true"><p>Nom du Doyen</p></div> 
            <div class="choice" id="3A" draggable="true"><p>choissir la filière une filière</p></div> 
            <div class="choice" id="3C" draggable="true"><p>Debouchés</p></div> 
            <div class="choice " id="4A" draggable="true"><p>Comparer les filières</p></div> 


        </div>
    </div>
    </div>
    <div class="useCase">
        <p>
        Après son Baccalauréat, Mohamed a été orienté dans la faculté des Sciences Semlelia de Marrakech et 
        Cette faculté propose plusieurs filière à ces étudiants.
        Cela fait plusieurs semaine, Mohamed narrive toujours à se decider sur la filière qu'il souhairais faire.<br>
        <span>Aidez le en plaçant chaque élément au bon endroit !</span>
        </p>
        <button class="btnOK btn">OK</button>
    </div>
    <div class="win">
           <h1>Felicitations</h1>
           <hr>
        <p class="scorefinale">Votre Score est : 00</p>
        <p class="stars">Vous aviez obtenu :x etoile</p>
        <a href='{{ route("section1")}}'><button class="btn btnBack">Retour</button></a>
        <a href='{{ route("home")}}'><button class="btn btnNext">Suivant</button></a>

    </div>
    <div class="lose">
     <h1>Desole</h1>
     <hr>
     <p>Vous ne pouvez plus continuer de jouer!<br>Charger  de vie!</p>
    <a href='{{ route("apprendre") }}'> <button class="btn btnOK">OK</button></a>
    </div>
  </body>
  <script src="{{asset('/js/section1/jquery-3.6.0.min.js')}}"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="{{asset('/js/section1/chalenge.js')}}"></script>
  </html>