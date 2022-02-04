function loadAffectationDiv() {
    $(".affection").load('http://127.0.0.1:8000/admin/addStudentToCaoch .content');
}

function loadCoachList() {
    $(".coachList").load('http://127.0.0.1:8000/admin/coachList .contentListCoach');
}

$(function() {
    $('#line').on('click', (e) => {
        e.preventDefault();
        console.log(4)
    })
    loadAffectationDiv();
    loadCoachList();
    var isAdmin = false;
    $('.btnLogout').hide();
    $('.loginAdmin').hide();
    $('.affection').hide();
    $('.addCoach').hide();
    $.get('http://127.0.0.1:8000/admin/isAdmin', function(data) {
        isAdmin = data.isAdmin;
        console.log(data);
    }).then(function() {
        if (isAdmin) {
            $('.allContent').css({
                "filter": "blur(0px)",
                "opacity": "1",
                "cursor": "pointer",
                // "transition":"all 0.5s ease-out",
            });
            $('.loginAdmin').fadeOut('slow');
            $('.btnLogout').show('slow');
        } else {
            showPopupAdmin();
        }
    });

    $('.btnAffect').on('click', function() {
        $('.addCoach').fadeOut('slow');
        showPopupAffect();

    })

    $('.btnAdd').on('click', function() {

        showPopupAddCoach();
    })

    //Deconnecter
    $('.btnLogout').on('click', function() {
            $.get('http://127.0.0.1:8000/admin/logout').then(function() {
                $('.error').text("");
                $('#secretKey').val("");
                showPopupAdmin();

            })
        })
        //=======================
        //============btn addCoach---------
    $('.btnAddCoach').on('click', function() {
        var nameCoach = $('#coachName').val();
        var matricule = $('#matricule').val();
        var result;
        $.get('http://127.0.0.1:8000/admin/addACoach', { coachName: nameCoach, matricule: matricule }, function(data) {
            result = data;
        }).then(function() {
            if (result.error.length != 0) {
                $('.materror').text(result.error);
                $('.materror').css({
                    "color": "red",
                    "font-size": "15px",
                });
            } else {
                loadCoachList();
                $('.message').text(result.message);
                $('.message').css({
                    "color": "green",
                    "font-size": "15px",
                });
                setTimeout(function() {
                    $('.allContent').css({
                        "filter": "blur(0px)",
                        "opacity": "1",
                        "cursor": "pointer",
                        "transition": "all 0.5s ease-out",
                    });
                    $('.addCoach').css({
                        "left": "25%",
                        "z-index": "1",
                        "top": "100%",
                        "transition": "top 0.5s ease-out",
                    });
                    $('#coachName').text('');
                    $('#matricule').text('');

                    $('.addCoach').hide('slow');
                }, 3000);

            }
            console.log(result);
        });
    })

    //affectcoachStudent
    $('.btnSt').on('mouseout', function() {
        console.log(1);
        var id_student = $('#etudiant_id').val();
        console.log(id_student);
        var id_coach = $('#coach_id').val();
        console.log(id_coach);
    });

    function showPopupAdmin() {
        $('.loginAdmin').show();
        $('.loginAdmin').css({
            "top": "-70vh",
            "transition": "top 0.5s ease",
        });
        $('.allContent').css({
            "filter": "blur(10px)",
            "opacity": "0.2",
            "cursor": "stopped",
            // "transition":"all 0.5s ease-out",
        });

        //===============================================
        $('.btnLogin').on("click", function() {
            var pwrdAdmin = $('#secretKey').val();
            var error = "";
            console.log('Mot de passe: ', pwrdAdmin);
            $.get('http://127.0.0.1:8000/admin/connexion', { secretKey: pwrdAdmin },
                (data) => {
                    error = data.error;
                    console.log(data);
                }).then(function() {
                if (error.length != 0) {
                    $('.error').text(error);
                    $('.error').css('color', 'red');


                } else {
                    $('.allContent').css({
                        "filter": "blur(0px)",
                        "opacity": "1",
                        "cursor": "pointer",
                        "transition": "all 0.5s ease-out",
                    });
                    $('.loginAdmin').fadeOut('slow');
                    $('.btnLogout').show('slow');
                }
            });

        });


    }

    function showPopupAddCoach() {
        $('.affection').css({
            "top": "0px",
            "left": "25%",
            "transition": "top 0.5s ease-out",
        });
        $('.affection').hide();
        // ---------------------

        $('.addCoach').css({
            "top": "20%",
            "z-index": "10",
            "transition": "top 0.5s ease",
        });
        $('.addCoach').show('slow');
        $('.allContent').css({
            "filter": "blur(1px)",
            "cursor": "wait",
            "transition": "all 0.5s ease",
        });
        $('.addCoach').show('slow');
        $('.btnAnnuleAddCoach').on("click", function() {
            $('.allContent').css({
                "filter": "blur(0px)",
                "opacity": "1",
                "cursor": "pointer",
                "transition": "all 0.5s ease-out",
            });
            $('.addCoach').css({
                "left": "25%",
                "z-index": "1",
                "top": "100%",
                "transition": "top 0.5s ease-out",
            });
            $('.addCoach').hide('slow');

        })

    }

    function showPopupAffect() {
        $('.addCoach').css({
            "left": "25%",
            "z-index": "1",
            "top": "100%",
            "transition": "top 0.5s ease-out",
        });
        $('.addCoach').hide();
        // ------------------------------------
        $('.affection').show('slow');
        $('.affection').css({
            "top": "-70vh",
            "left": "25%",
            "transition": "top 0.5s ease",
        });
        $('.allContent').css({
            "filter": "blur(1px)",
            "cursor": "wait",
            "transition": "all 0.5s ease",
        });
        $('.affection').show('slow');
        $('.btnAnnuler').on("click", function() {
            $('.allContent').css({
                "filter": "blur(0px)",
                "opacity": "1",
                "cursor": "pointer",
                "transition": "all 0.5s ease-out",
            });
            $('.affection').css({
                "top": "0px",
                "left": "25%",
                "transition": "top 0.5s ease-out",
            });
            $('.affection').hide('slow');


        });
        $('.btnStAffect').on('click', function() {
            var id_student = $('#etudiant_id').val();
            var id_coach = $('#coach_id').val();
            var message;
            $.get('http://127.0.0.1:8000/admin/checkStudentToCoach', { etudiant_id: id_student, coach_id: id_coach }, function(data) {
                message = data.message;
            }).then(function() {
                loadAffectationDiv();
                console.log(message);
            });
        });

    }
});
