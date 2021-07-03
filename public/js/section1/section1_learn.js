
$(function() {
// exercice1
    $("#exercice1").hide();

// ========================================

// onclick in button learn--------------------
    $(".apprendre").on("click", function(){
        $(".apprendre").css({
            "transform": "translate(190%,70%)",
            "background-color":"#2fb9eb",
            "transition":"all 1s ease",
        });

       $("#chalenge").fadeOut(function(){
            $("#choose_party").css({
                "box-shadow":"inset 1365px 0 0 0 rgba(0,0,0,0.1)",
                // "transition":" box-shadow 0.5s linear",
            });
        //    $("next_btn").css({
        //        "visibility":"visible",
        //        "transiton":"visibility 1s ease",
        //    })
       });

    });
// ------------------------------------------------
// ---------------return btn------------------------ 
$(".return_btn").on("click", function(){
    $("#chalenge").fadeIn();
    $("#choose_party").css({
        "box-shadow":"inset -1365px 0 0 0 rgba(0,0,0,0)",
    });
    $(".apprendre").css({
        "transform": "translate(20%,50%)",
        "background-color":"#fff",
    });
});
// -----------------------------------------
// ---------------chalenge btn---------------------
    $("#chalenge_text").on("click", function(){
        $("#chalenge_text").css({
            "transform":"translateY(50%)",
            "transform":"translateX(50%)",
            "background-color":"#2fb9eb",
            "transition":"all 1s ease",
        });
        $("#chalenge_text:hover").css({
            "box-shadow":"inset 350px 0 0 0 #2fb9eb",
        })
        $("#chalenge").css({
            "background":"none",
            "box-shadow":"0px 0px 0px #fff",
            "transition":"all 0.5s ease",

        });
        $("#choose_party").css({
            "box-shadow":"inset 1365px 0,0,0 rgba(47, 185, 235,0.1)",
        });
        $(".apprendre").slideUp();

        $(".return_btn").on("click", function(){
            $("#choose_party").css({
                "box-shadow":"inset -1365px 0 0 0 rgba(0,0,0,0)",
            });
            $(".apprendre").slideDown();
            $("#chalenge_text").css({
                "transform":"translate(150%,290%)",
                "background-color":"#fff",
                "transition":"all 1s ease",
            });
            $("#chalenge").css({
                "background":"linear-gradient(-90deg, #2fb9eb 35%, #fff )",
                "transition":"all 1s ease",
            })
        });
    });
  var text="This Cookieet generate handles autos in the markup prior to initialization. However, until now the handles were required to be a single element. As of 1.10.0, custom handles can contain complex markup, nesting elements as deep as you wish within the handle.e text to set as the content of each matched element. When Number or Boolean is supplied, it will be converted to a String representation.";
   var i=0;
   function typing(){
       if (i<text.length) {
           document.getElementById("use_case1").innerHTML += text.charAt(i);
           i++;
           setTimeout(typing,60);
       }
   }
   typing();


});