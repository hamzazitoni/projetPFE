

$(document).ready(function() {
   starting();
    var btn_on=false;
   $.get('http://127.0.0.1:8000/score/add', { sectionID: 1 },
        (data) => {
            $('.score1').text(data.score);
        })
        $.get('http://127.0.0.1:8000/vie/get',
        (data) => {
            document.getElementById('progressBar').style.width = data.vie + "%";
        })
   var choices = $('.choice');
    var dragItem = null;
    var rep = $('.box');
    var TrueAns=false;
    var idBox;
    var nbQ=0;
//-----------------------js for exercice1--------------------------//  
    showQuestion('.question1','#exo1','.btnFermer');
  $(".result").on('click', function() {
          if ($(this).attr('id')=="3")
           {
              incrimentScores(5);
              updateAll(5);
              $('#exo1').slideUp();
              $( "#exo2").css({
                  "transform":"translateY(-12%)",
              });
          } 
          else 
          {
              decrementScores(2);
              $(this).css({
                "transform":"scale(0.98)",
                "transition":"all 0.1 ease",
                "box-shadow":"0px 0px 5px red",
              });
             
          }
    });
  
//-------------------- js for exerciece 2 --------------------------//
    $('.slider').on('click', function() {
        check_btn_();
        if (btn_on==true) {
            $('#boxChoice').css({
                "animation-play-state":"paused",
            });
        }
        else{
            $('#boxChoice').css({
                "animation-play-state":"running",
            });
        }

    });

    $( ".up" ).click(function(){
        $( "#boxChoice" ).css({ "top": "-=50px" });

      });
      $( ".down" ).click(function(){
        $( "#boxChoice" ).css({ "top": "+=50px" });
      });

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
// --------------thes functions ------------------------//
    function incrimentScores(score) {
        var ScoreSection=+$('.score1').text();
        ScoreSection+=score;
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
    function check_btn_() {
        if (btn_on==true) {
            btn_on=false;
            
        } else {
            btn_on=true;
        }
    }
    // ------drop and drap fonctions------------//
    function dragStart(){
        dragItem = this;
        if($(this).hasClass( "trueAns" )){
            TrueAns=true;
        }
        else {
            TrueAns=false;
            $(this).css({
                "box-shadow":"0px 0px 5px red",
            });
        }
        setTimeout(()=>this.style.display="none",0);
    }
    function dragEnd() {
        setTimeout(()=>this.style.display="block",0);
        if(idBox=='boxAns')
        {
            if(TrueAns)
            {
                incrimentScores(5);
                updateAll(5);
                nbQ+=1;
                console.log('le nombre de question',nbQ);
            }

            else {
                decrementScores(2);
            }
        }
        else if(idBox=='boxChoice'){
            if(TrueAns) {
                decrementScores(5);
                nbQ-=1;
            }
            $(dragItem).css({
                "box-shadow":"0px 0px 5px #30BCED",
            }); 
            console.log("retour en arriere et le nombre de question est:",nbQ);
        }
        if(nbQ==4){
            updateAll(5);
            $('#exo2').slideUp();
              $( "#exo3").css({
                  "transform":"translateY(12%)",
              });
              showQuestion('.question2','#exo3','.btnFermer1');
        }
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
        
    }

   //-----------------------------------
     //------------------
     $('.nextbtn').hide();
     var next=true;
    
     //---------------
       $('.slideRanger').on('mousemove', function() {
           var idCurrent = $(this).attr('id');
           var sliderBar = document.getElementById(idCurrent);
           var idVal=getIntId(idCurrent);
           var output = '#value'+idVal;
           $(output).text(sliderBar.value);
           var x=getXvalue(sliderBar.value);
           var color='linear-gradient(90deg,#30BCED'+' '+x+'%,black'+' '+x+'%)';
           sliderBar.style.background=color;
       });
       $('.slideRanger').on('click', function() {
        var idCurrent = $(this).attr('id');
        var sliderBar = document.getElementById(idCurrent);
        var idVal=getIntId(idCurrent);
        var output = '#value'+idVal;
        $(output).text(sliderBar.value);
        var x=getXvalue(sliderBar.value);
        var color='linear-gradient(90deg,#30BCED'+' '+x+'%,black'+' '+x+'%)';
        sliderBar.style.background=color;
    });

       $(".validate").on('click', function(){
          if ($('#1Q').val()!=2){
              next=false;
              redShadow('#tr1');
              colorPrimary('tr1');
          }
          else next=true;
          if ($('#2Q').val()!=1){
            next=false;
            redShadow('#tr2');
            colorPrimary('tr2');
          }
          else nxt=true;
          if ($('#3Q').val()!=3){
            next=false;
            redShadow('#tr3');
            colorPrimary('tr3');
          }
          else next=true;
          if ($('#4Q').val()!=4){
            next=false;
            redShadow('#tr4');
            colorPrimary('tr4');
          }
          else next=true;
          if ($('#5Q').val()!=0)
          {
            next=false;
            redShadow('#tr5');
            colorPrimary('tr5');
          }
           if (next==true) {
               incrimentScores(5);
               $('.nextbtn').show('slow').fadeIn('slow');
               $('.validate').hide('slow');
           }
           else 
                decrementScores(3);
           
       });
       $('.nextbtn').on('click',function(){
           if ($('#1').val()==2 && $('#2').val()==1 && $('#3').val()==3 && $('#4').val()==4 && $('#5').val()==0 && next==true) {
               $('.nextbtn').hide();
           }
       
       });

   function colorPrimary(id) {
       setTimeout(function(){
           var sliderBar = document.getElementById(id);
           sliderBar.style.borderLeft="3px solid #30BCED";
           sliderBar.style.borderBottom="1px solid #30BCED";
           sliderBar.style.boxShadow ="none";
           sliderBar.style.transition="all 1s ease"
       },5000);
   }
   function redShadow(id){
       $('.nextbtn').hide('slow').fadeOut('slow');
       $(id).css({
           "box-shadow":"0px 0px 10px red",
       }) ;
   }

       function getXvalue(nb) {
       if (nb==1) return 25;
       else if(nb==2) return 55;
       else if(nb==3) return 65;
       else if(nb==4) return 110;
       else return 0;
       }
       function getIntId(idCurrent){
           if(idCurrent=='1Q') return 1;
           if(idCurrent=='2Q') return 2;
           if(idCurrent=='3Q') return 3;
           if(idCurrent=='4Q') return 4;
           if(idCurrent=='5Q') return 5;
       }
       function starting() {
        for (let i = 1; i < 6; i++) 
        {
            var idC=i+"Q";
            
            var sliderBar = document.getElementById(idC);
            sliderBar.value=0;
        }
    }
   function updateAll(nbrvie){
        var score=+$('.score1').text();
        if(document.getElementById('progressBar').style.width =="100%")
        {
        $.get('http://127.0.0.1:8000/score/add',{ sectionID:1,updateScoreSection:score});
        console.log('on peut pas augemente la vie elle est deja a 100% donc on augmente le score ');
        }
        else{
            $.get('http://127.0.0.1:8000/vie/get',{add:nbrvie},
            (data) => {
                document.getElementById('progressBar').style.width = data.vie + "%";
            })
        }
   }

   function showQuestion(popup,exo,btn) {
        $(popup).css({
        "top":"-85vh",
        "transition":"top 1s ease-out",
        });
        $(exo).css({
        "filter":"blur(5px)",
        "opacity":"0.5",
        "cursor":"wait",
        "transition":"all 1s ease-out",
        });
        $(btn).on("click",function(){
            $(exo).css({
                "filter":"blur(0px)",
                "opacity":"1",
                "cursor":"pointer",
                "transition":"all 0.5s ease-out",
            });
            $(popup).fadeOut('slow');
        })
       
    }
});

