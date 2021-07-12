$(function () {
  var bar;
  $.get('http://127.0.0.1:8000/score/add', { sectionID: 1 },
  (data) => {
      $('.score1').text(data.score);
  })
  $.get('http://127.0.0.1:8000/vie/get',
  (data) => {
    bar=data.vie;
      document.getElementById('progressBar').style.width = data.vie + "%";
      if(bar==0) {
        $('.useCase').hide();
        showPopupLose();
      }
  });

  showUseCase();
  var choices = $('.choice');
  var dragItem = null;
  var idBox;
  var idLeave;
  var R1=0,R2=0,R3=0;
  var rep = $('.box');
  //   drop and drap
      for ( var ch of choices){
              ch.addEventListener('dragstart',dragStart);
              ch.addEventListener('dragend',dragEnd);
      }
      for( var r of rep){
          r.addEventListener('dragover',dragOver);
          r.addEventListener('dragenter',dragEnter);
          r.addEventListener('dragleave',dragLeave);
          r.addEventListener('drop',Drop);

      }



// ------drop and drap fonctions------------//
  function dragStart(){
    dragItem = this;
  }

  function dragEnd() {
    setTimeout(()=>this.style.display="block",0);
    if(idBox=='probleme')
    {
      if($(dragItem).attr('id')!='1P')
      {
        idC='#'+ $(dragItem).attr('id');
        redShadow(idC);
        colorPrimary($(dragItem).attr('id'))
      }
      else{
        R1+=1;
        if(idBox!=idLeave){
          incrimentScores(5);
          updateAll(5);
        }
      }
    }
    else if(idBox=='critere')
    {
      var idCri=$(dragItem).attr('id');
      if (idCri!='1C' && idCri!='2C' && idCri!='3C'){
        idC='#'+ $(dragItem).attr('id');
        redShadow(idC);
        colorPrimary(idCri)
      }
      else{
        R2+=1;
        if(idBox!=idLeave){
          incrimentScores(5);
          updateAll(5);
        }
      }
    }
    else if(idBox=='alternative'){
      var idCri=$(dragItem).attr('id');
      if (idCri!='1A' && idCri!='2A' && idCri!='3A' && idCri!='4A'){
        idC='#'+ $(dragItem).attr('id');
        redShadow(idC);
        colorPrimary(idCri)
      }
      else{
        R3+=1;
        if(idBox!=idLeave){
          incrimentScores(5);
          updateAll(5);
        }
      }
    }
    else if(idBox=='boxChoice'){
      if ($(dragItem).attr('id')=='1P') {
        R1-=1;
        decrementScores(5);
      }
      else if($(dragItem).attr('id')=='1C' || $(dragItem).attr('id')=='2C' || $(dragItem).attr('id')=='3C') 
      {
        R2-=1;
        decrementScores(5);
      }
      else if($(dragItem).attr('id')=='1A' || $(dragItem).attr('id')=='2A' || $(dragItem).attr('id')=='3A' || $(dragItem).attr('id')=='4A') 
      {
        R3-=1;
        decrementScores(5);
      }

        console.log("retour en arriere et le nombre ");
    }
    if (R1==1 && R2==3 && R3==4) {
      showpopupWin();
    }
    else if(document.getElementById('progressBar').style.width=="0%") showPopupLose();
  
      dragItem=null;

  }

  function Drop(){
    this.append(dragItem);
  }
  function dragOver(e) {
    e.preventDefault();
    this.style.border="2px dotted black";
  }
  function dragEnter(e) {
    e.preventDefault();
    idBox=$(this).attr("id");
  }
  function dragLeave() {
    this.style.border="none";
    idLeave=$(this).attr('id');
    
  }
  function showUseCase(){
    $('.useCase').css({
        "top":"-75vh",
        "transition":"top 1s ease-out",
    });
    $('.template').css({
      "filter":"blur(5px)",
      "opacity":"0.5",
      "cursor":"progress",
      "transition":"all 1s ease-out",
      
    });

    $('.btnOK').on('click', function() {
       $('.useCase').fadeOut('slow');

        $('.template').css({
          "filter":"blur(0px)",
          "opacity":"1",
          "cursor":"pointer",
          "transition":"all 1s ease-out",
          
        });
    });
  }
  function colorPrimary(id) {
    setTimeout(function(){
        var sliderBar = document.getElementById(id);
        sliderBar.style.boxShadow ="0px 0px 5px #30BCED";
        sliderBar.style.transition="all 1s ease"
    },2000);
  }
  function redShadow(){
    $(idC).css({
      "box-shadow":"0px 0px 5px red",
    });
    minusLife();
  }

  function minusLife(){
    $.get('http://127.0.0.1:8000/vie/get',{minus:5},
    (data) => {
        document.getElementById('progressBar').style.width = data.vie + "%";
    })
  }
  function incrimentScores(score) {
    var ScoreSection=+$('.score1').text();
    ScoreSection+=score;
    console.log('le nouveau score est',ScoreSection);
   $('.score1').text(ScoreSection);
  }
  function decrementScores(nbr) {
    var ScoreSection=+$('.score1').text();
    if(ScoreSection<1)
    {
        $('.score1').text("00");
        
    }
    else{
        ScoreSection-=nbr;
        if(ScoreSection<1)
            $('.score1').text("00");
        else
        $.get('http://127.0.0.1:8000/score/add', { sectionID: 1 ,decraseScore:nbr},
        (data) => {
            $('.score1').text(data.score);
        });
    }

  }
  function showpopupWin()
    {
        $('.win').css({
          "top":"-75vh",
          "transition":"top 1s ease-out",
        });
        $('.template').css({
          "filter":"blur(5px)",
          "opacity":"0.5",
          "cursor":"progress",
          "transition":"all 1s ease-out",
        });

        $('.btnNext').on('click', function() {
        $('.win').fadeOut('slow');

          $('.template').css({
            "filter":"blur(0px)",
            "opacity":"1",
            "cursor":"pointer",
            "transition":"all 1s ease-out",
          });
      }); 
  }

  function updateAll(nbrvie){
    var score=+$('.score1').text();
    if(document.getElementById('progressBar').style.width !="0%")
    {
      $.get('http://127.0.0.1:8000/score/add',{ sectionID:1,updateScoreSection:score});
      console.log('on augmente le score ');
    }
    else{
      showPopupLose();
    }
  }
  function showPopupLose() {
      $('.lose').css({
        "top":"-120vh",
        "transition":"top 1s ease-out",
      });
      $('.template').css({
        "filter":"blur(5px)",
        "opacity":"0.5",
        "cursor":"none",
        "transition":"all 1s ease-out",
      });
  }
});

