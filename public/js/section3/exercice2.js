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
    
