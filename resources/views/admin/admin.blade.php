@extends('admin/Dashboard')
@section('titledashBoard')
    Administration
@endsection
@section('contentPage')
<div class="container allContent ">
  <div class="listCoach">
    <p>La liste des Coachs</p>
  </div>
  <div class="btns">
      <button class="btn btnAdd">Ajouter Un Coach</button>
      <button class="btn btnAffect">Affectation</button>
  </div>
</div>

<div class="loginAdmin">
        <div class="entete"> Connexion Admin</div>
        <div class="form-group">
            <label for="secretKey">Code Secret:</label>
            <input type="password"  name="secretKey" class="form-control form-control-sm" id="secretKey" placeholder="Votre Mot de Passe...">
            <p class="error"></p>
        </div>
        <button class="btn btnLogin" >Se connecter</button>
</div>
<div class="allPopup">
    <div class="affection">
   
           
    </div>

    <div class="addCoach">
                    <div class="form-group">
                        <p class="message"></p>
                        <label for="coachName">Le nom du coach</label>
                        <input type="text" name="coachName" class="form-control form-control-sm" id="coachName" placeholder="Le nom complet du coach" required>
                     
                    </div>
                    <div class="form-group">
                        <label for="matricule">Le matricule du coach</label>
                        <input type="text"  name="matricule" class="form-control form-control-sm" id="matricule" placeholder="exemple : ARD1278" >
                        <p class="materror"></p>
                    </div>
                    <button class="btn btnAddCoach"  >Ajoutez</button>
                    <button class="btn btnAnnuleAddCoach" >Fermer</button>

    </div>
</div>
@endsection