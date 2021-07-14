@extends('section3base')
@section('content')
<div class="description">
  <h3 class="title text-center">Eclairage</h3>
  <div class="exercice-title">
      <div class="row">
          <div class="col h-auto d-inline-block">
            <h2> Redéfinir un problème  </h2>
          </div>
          <div class="col-2 d-flex align-content-center flex-wrap ">
            <a class="btn disabled " id="passer" role="button">Exercice suivant <i class="fas fa-arrow-right " ></i></a>
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
