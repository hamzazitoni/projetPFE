$(function() {
    $('.nextbtn').hide();
    var next=true;
    starting();
        $('.slideRanger').on('mousemove', function() {
            var idCurrent = $(this).attr('id');
            var output = '#value'+idCurrent;
            var sliderBar = document.getElementById(idCurrent);
            var nb=$(this).val();
           $(output).text(nb);
           var x=getXvalue(nb);
            var color='linear-gradient(90deg,#30BCED'+' '+x+'%,black'+' '+x+'%)';
            sliderBar.style.background=color;
        });

        $(".validate").on('click', function(){
            if ($('#1').val()!=2) {
              console.log("id1 est different de 2")
                next=false;
                redShadow('#tr1');
                colorPrimary('tr1');
            }
            else if ($('#2').val()!=1)
            {
                next=false;
                redShadow('#tr2');
                colorPrimary('tr2');
            }
            else if ($('#3').val()!=3) {
                next=false;
                redShadow('#tr3');
                colorPrimary('tr3');
            }
           else  if ($('#4').val()!=4) {
                next=false;
                redShadow('#tr4');
                colorPrimary('tr4');
            }
           else if ($('#5').val()!=0) {
                next=false;
                redShadow('#tr5');
                colorPrimary('tr5');
            }
            else next=true;
            console.log('avant verufaciton',next);
            if (next==true) {
                console.log("c'est bien",next);
                $('.nextbtn').show('slow').fadeIn('slow');
                
            }
        });
        $('.nextbtn').on('click',function(){
            if ($('#1').val()==2 && $('#2').val()==1 && $('#3').val()==3 && $('#4').val()==4 && $('#5').val()==0 && next==true) {
                $('.nextbtn').hide();
            }
        
        });

    function colorPrimary(id) {
        setTimeout(function(){
            console.log("bien 5s");
            var sliderBar = document.getElementById(id);
            sliderBar.style.borderLeft=" 3px solid #30BCED";
            sliderBar.style.borderBottom="1px solid #30BCED";
            sliderBar.style.boxShadow ="none";
            sliderBar.style.transition="all 1s ease"
        },7000);
    }
    function redShadow(id){
    
        console.log('redShow',next)
        $('.nextbtn').hide('slow').fadeOut('slow');
        $(id).css({
            "box-shadow":"0px 0px 10px red",
        }) ;
    }



        function starting() {
            for (let i = 1; i < 6; i++) 
            {
                var value = '#value'+i;
                var id='#'+i;
                $(value).text($(id).val());
                var sliderBar = document.getElementById(i);
                var x=getXvalue($(id).val());
                var color='linear-gradient(90deg,#30BCED'+' '+x+'%,black'+' '+x+'%)';
                sliderBar.style.background=color;
            }
        }
        function getXvalue(nb) {
        if (nb==1) return 25;
        else if(nb==2) return 55;
        else if(nb==3) return 65;
        else if(nb==4) return 110;
        else return 0;
        }


});
