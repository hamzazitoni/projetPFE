    var text="Salim veut acheter une veste au centre commercial AL-Jawhara près de chez lui. AL-Jawhara est un très grand centre qui propose plusieurs varite des articles disponibles. \nSalim demande votre avis pour prendre sa decision ";
  var i=0;
  function typing(){
      if (i<text.length) {
          document.getElementById("use_case").innerHTML += text.charAt(i);
          i++;
          setTimeout(typing,40);
      }
  }
  typing();
  