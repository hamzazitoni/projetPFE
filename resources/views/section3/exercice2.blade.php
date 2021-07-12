@extends('section2base')
@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/section3/exercice2.css')}}" />
@endsection
@section('content')
<div class="description">
  <h3 class="title text-center">Eclairage</h3>
  <div class="exercice-title">
      <div class="row">
          <div class="col h-auto d-inline-block">
            <h2> Redéfinir un problème  </h2>
          </div>
          <div class="col-2 d-flex align-content-center flex-wrap ">
            <a class="btn disabled " href="{{ route('s3_exercice3',['id' => 3])}}" id="passer" role="button">Exercice suivant <i class="fas fa-arrow-right " ></i></a>
          </div>
      </div>
  </div>
  <div class="exercice-description">
      <p> Cette étape vous oblige à réexaminer le problème soulevé. Etes-vous en train d'affronter le problème lui-
        même, ou êtes-vous simplement en train de voir un de ses symptômes?
        Vous trouverez dans le tableau ci-dessous une liste de problèmes (étant en réalité des symptômes de problèmes)
        et des problèmes réels correspondants.
        essayez d'associer à chaque problème  identifier son problème réel
    </p>
  </div>
</div>
<div class="container-fluid">
    <div class="card text-dark bg-light m-5">
        <div class="card-body">
            <div class="row p-1">
                <div class="col d-grid gap-2"><button class="btn border border-dark" id="1Q" onClick="reply_click_Q(this.id)">incapacité à obtenir un emploi désiré. <br> </button></div>
                <div class="col d-grid gap-2"><button class="btn border border-dark"  id="3A" onClick="reply_click_A(this.id)">Est ce que un problème lié à la qualité des matériaux utilisés? </button></div>
            </div>
            <div class="row  p-1">
                <div class="col d-grid gap-2"><button  class="btn border border-dark"id="2Q" onClick="reply_click_Q(this.id)" >Bureau/chambre désordre.</button></div>
                <div class="col d-grid gap-2"><button class="btn border border-dark"  id="4A" onClick="reply_click_A(this.id)">Et je la bonne méthode de travail?</button></div>
            </div>
            <div class="row  p-1">
                <div class="col d-grid gap-2"><button class="btn border border-dark" id="3Q" onClick="reply_click_Q(this.id)">Problème avec l'augmentation du taux des de produits défectueux.</button></div>
                <div class="col d-grid gap-2"><button class="btn border border-dark" id="1A" onClick="reply_click_A(this.id)">Et-je la bonne carrière? </button></div>
            </div>
            <div class="row  p-1">
                <div class="col d-grid gap-2"><button class="btn border border-dark" id="4Q" onClick="reply_click_Q(this.id)">Incapacité à réussir l'examen bien que j'ai beaucoup étudié. </button></div>
                <div class="col d-grid gap-2"><button  class="btn border border-dark"id="2A" onClick="reply_click_A(this.id)">Me manque t-il les principales compétences organisationnelles?</button></div>
            </div>
            <div class="row pt-1 pr-1 pl-1 pb-5">
                <div class="col d-grid gap-2"><button class="btn border border-dark" id="5Q" onClick="reply_click_Q(this.id)">Insatisfaction des clients.  </button></div>
                <div class="col d-grid gap-2"><button class="btn border border-dark"  id="5A" onClick="reply_click_A(this.id)">Est-ce un problème relatif à la formation des personnels? </button></div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script>
                    var id_Q_temp = "";
            var id_A_temp = "";
            var correct = 0;
            var erreur = 0;

            function disableblocked() {
                return document.getElementById('passer');
            }

            function reply_click_Q(clicked_id)
            {
                id_Q_temp = clicked_id;


                if(id_A_temp && id_A_temp != "" ){

                    let banswer = document.getElementById(id_A_temp);
                    let bquestion = document.getElementById(id_Q_temp);
                    if(id_A_temp[0] == id_Q_temp[0]){
                        banswer.classList.value = banswer.classList.value + ' btn-success disabled';
                        bquestion.classList.value = bquestion.classList.value + ' btn-success disabled';
                        correct++;
                        if(correct == 5) {
                            let passer = disableblocked();
                            passer.classList.value = 'btn';
                        }


                    }
                    else{
                        banswer.classList.value = banswer.classList.value + ' btn-danger';
                        bquestion.classList.value = bquestion.classList.value + ' btn-danger';
                        setTimeout(function(){banswer.classList.value = "btn border border-dark";},500);
                        setTimeout(function(){bquestion.classList.value = "btn border border-dark";},500);
                        erreur++;
                    }
                    id_Q_temp = "";
                    id_A_temp = "";
                }
            }

            function reply_click_A(clicked_id)
            {
                id_A_temp = clicked_id;

                if(id_Q_temp && id_Q_temp != "" ){

                    var banswer = document.getElementById(id_A_temp);
                    var bquestion = document.getElementById(id_Q_temp);
                    if(id_A_temp[0] == id_Q_temp[0]){
                        banswer.classList.value = banswer.classList.value + ' btn-success disabled';
                        bquestion.classList.value = bquestion.classList.value + ' btn-success disabled';
                        correct++;
                        if(correct == 5) {
                            let passer = disableblocked();
                            passer.classList.value = 'btn';
                        }

                    }else{
                        banswer.classList.value = banswer.classList.value + ' btn-danger';
                        bquestion.classList.value = bquestion.classList.value + ' btn-danger';
                        setTimeout(function(){banswer.classList.value = "btn border border-dark";},1000);
                        setTimeout(function(){bquestion.classList.value = "btn border border-dark";},1000);
                        erreur++;
                    }
                    id_Q_temp = "";
                    id_A_temp = "";

                }

            }
            $('#passer').on('click',()=>{
                if(erreur ==0){
                    $.get('http://127.0.0.1:8000/score/add', { score: 50, sectionID: 3 },
                    (data) => {
                        document.getElementById('scoregeneral').innerHTML = data.score;
                    })
                }else if(erreur <= 3){
                    $.get('http://127.0.0.1:8000/score/add', { score: 30, sectionID: 3 },
                    (data) => {
                        document.getElementById('scoregeneral').innerHTML = data.score;
                    })
                }else{
                    $.get('http://127.0.0.1:8000/score/add', { score: 15, sectionID: 3 },
                    (data) => {
                        document.getElementById('scoregeneral').innerHTML = data.score;
                    })
                }
            })
            $.get('http://127.0.0.1:8000/score/add', { sectionID: 3 },
                (data) => {
                document.getElementById('scoregeneral').innerHTML = data.score;
            })
            $.get('http://127.0.0.1:8000/vie/get',
                (data) => {
                document.getElementById('progression').style.width = data.vie + "%";
        })
    </script>
@endsection
