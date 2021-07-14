@extends('section3base')
@section('content')
<style>
    .ui-slider-horizontal {
    height: 6px;
    background: #333;
    border-style:none;
}


#time-range1 {
  width: 50%;
}
.ui-slider .ui-slider-handle {
    border-radius: 10%;
    background: #13b8c4;
    border: 2px solid #434343;
    background-size: 100%;
    background: #555;
    width: 25px;
    height: 25px;
    margin-top: -5.2px;
}
</style>
<div class="description">
    <h3 class="title text-center">Prise de Conscience</h3>
    <div class="exercice-title">
        <div class="row">
            <div class="col h-auto d-inline-block">
            <h2>Temps alloué a un problème </h2>
            </div>
            <div class="col-2 d-flex align-content-center flex-wrap ">
                <div class="validate-btn ">
                    <a href="#"> <button >Exercice suivant <i class="fas fa-arrow-right " ></i></button></a>
                </div>
            </div>

        </div>
    </div>
    <div class="exercice-description">
        <p>Pour resoudre un problem il faux prendre une duree de temp pour povoire sortire des solution.
            &nbsp;Ci-dessous des problemes que vous devaiez donne des dure sele
        </p>
    </div>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-sm-5 col-md-6  "style="height: 50px;">
            Réussir a un examen donné

        </div>
        <div class="col-6 col-md-5 text-center">
            <div id="time-range" style="margin-top: 16px;">
                <div class="slider-range1"></div>
                <p><span class="slider-time1">0:00 Heurs</span></p>
            </div>
        </div>
      </div>
      <div class="row  ">
        <div class="col-sm-5 col-md-6  " style="height: 50px;">Garder en ordre mon bureau ou ma chambre</div>
        <div class="col-6 col-md-5 text-center">
            <div id="time-range" style="margin-top: 16px;">
                <div class="slider-range2"></div>
                <p><span class="slider-time2">0:00 Heurs</span></p>
            </div>
        </div>
      </div>
      <div class="row   ">
        <div class="col-sm-5 col-md-6  " style="height: 50px;">Gérer les conflits fréquents avec mon fournisseur principal </div>
        <div class="col-6 col-md-5 text-center">
            <div id="time-range" style="margin-top: 16px;">
                <div class="slider-range3"></div>
                <p><span class="slider-time3">0:00 Heurs</span></p>
            </div>
        </div>
      </div>
  </div>
  <script>

    let state = false;
    $(".slider-range1").slider({
    min: 0,
    max: 1439,
    step: 15,
    values: [0],
    slide: function (e, ui) {
        var hours = Math.floor(ui.values[0] / 60);
        var minutes = ui.values[0] - (hours * 60);
        state = true;
        if (hours.length == 1) hours = '0' + hours;
        if (minutes.length == 1) minutes = '0' + minutes;
        if (minutes == 0) minutes = '00';
        if (hours >= 12) {
            if (hours == 0) {
                hours = hours;
                minutes = minutes + " Heures";
            } else {
                hours = hours - 0;
                minutes = minutes + " Heures";
            }
        } else {
            hours = hours;
            minutes = minutes + " Heures";
        }
        if (hours == 24) {
            hours = 0;
            minutes = minutes;
        }

        $('.slider-time1').html(hours + ':' + minutes);
    }
});
///////////////////////////////////////////////////////////////////
$(".slider-range2").slider({
    min: 0,
    max: 1439,
    step: 15,
    values: [0],
    slide: function (e, ui) {
        var hours = Math.floor(ui.values[0] / 60);
        var minutes = ui.values[0] - (hours * 60);

        if (hours.length == 1) hours = '0' + hours;
        if (minutes.length == 1) minutes = '0' + minutes;
        if (minutes == 0) minutes = '00';
        if (hours >= 12) {
            if (hours == 0) {
                hours = hours;
                minutes = minutes + " Heures";
            } else {
                hours = hours - 0;
                minutes = minutes + " Heures";
            }
        } else {
            hours = hours;
            minutes = minutes + " Heures";
        }
        if (hours == 24) {
            hours = 0;
            minutes = minutes;
        }

        $('.slider-time2').html(hours + ':' + minutes);

    }
});

$(".slider-range3").slider({
    min: 0,
    max:  1439,
    step: 15,
    values: [0],
    slide: function (e, ui) {
        var hours = Math.floor(ui.values[0] / 60);
        var minutes = ui.values[0] - (hours * 60);

        if (hours.length == 1) hours = '0' + hours;
        if (minutes.length == 1) minutes = '0' + minutes;
        if (minutes == 0) minutes = '00';
        if (hours >= 12) {
            if (hours == 0) {
                hours = hours;
                minutes = minutes + " Heures";
            } else {
                hours = hours - 0;
                minutes = minutes + " Heures";
            }
        } else {
            hours = hours;
            minutes = minutes + " Heures";
        }
        if (hours == 24) {
            hours = 0;
            minutes = minutes;
        }

        $('.slider-time3').html(hours + ':' + minutes);

    }
});
  </script>


@endsection
