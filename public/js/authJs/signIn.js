const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

$(function() {

    function nameValidation(name) {
        var reg = /^[a-zA-Z]{1,}/;
        if (reg.test(name)) {
            return true;
        }

        return false;
    }

    function mailValidation(email) {
        var reg = /^[a-z0-9A-Z._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
        if (reg.test(email)) {
            return true;
        }
        return false;
    }

    function dateValidation(date) {
        var reg = /^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/;
        if (reg.test(date)) {
            return true;
        }
        return false;
    }

    function appogeeValidation(appogee) {
        var reg = /^[0-9]{7,}$/;
        if (reg.test(appogee)) {
            return true;
        }
        return false;
    }

    function passwordValidation(password) {
        var reg = /^[0-9a-zA-Z._-?]{6,}$/;
        if (reg.test(password)) {
            return true;
        }
        return false;
    }




    $('.firstNext').on('click', function(e) {
        e.preventDefault();
        var error = 0;
        var name = $('#name').val();
        var firstName = $('#firstName').val();
        if (!nameValidation(name)) {
            $('#name').css("box-shadow", "0px 0px 5px red");
            errro += 1;
        } else {
            $('#name').css("box-shadow", "0px 0px 5px green");
        }
        if (!nameValidation(firstName)) {
            $('#firstName').css("box-shadow", "0px 0px 5px red");
            errro += 1;
        } else {
            $('#firstName').css("box-shadow", "0px 0px 5px green");
        }
        if (error == 0) {
            slidePage.style.marginLeft = "-25%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        }
    })

    $('.next-1').on('click', function(e) {
        e.preventDefault();
        var error = 0;
        var email = $('#email').val();
        var appogee = $('#appoge').val();
        if (!mailValidation(email)) {
            $('#email').css("box-shadow", "0px 0px 5px red");
            errro += 1;
        } else {
            $('#email').css("box-shadow", "0px 0px 5px green");
        }
        if (!appogeeValidation(appogee)) {
            $('#appogee').css("box-shadow", "0px 0px 5px red");
            errro += 1;
        } else {
            $('#appogee').css("box-shadow", "0px 0px 5px green");
        }
        if (error == 0) {
            slidePage.style.marginLeft = "-50%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        }
    })

    $('.next-2').on('click', function(e) {
        e.preventDefault();
        // var error = 0;
        var date = $('#date').val();
        console.log(date)
        if (!dateValidation(date)) {
            $('#date').css("box-shadow", "0px 0px 5px red");
            // errro += 1;
        } else {
            $('#date').css("box-shadow", "0px 0px 5px green");
        }
        // if (error == 0) {
        //     slidePage.style.marginLeft = "-75%";
        //     bullet[current - 1].classList.add("active");
        //     progressCheck[current - 1].classList.add("active");
        //     progressText[current - 1].classList.add("active");
        //     current += 1;
        // }
    })

    $('.prev-1').on('click', function(e) {
        e.preventDefault();
        slidePage.style.marginLeft = "0%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    })

    $('.prev-2').on('click', function(e) {
        e.preventDefault();
        slidePage.style.marginLeft = "-25%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    })

    $('.prev-3').on('click', function(e) {
        e.preventDefault();
        slidePage.style.marginLeft = "-50%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    })

    $('.submit').on('click', function(e) {
        var error = 0;
        var password = $('#password').val();
        var confirmPassword = $('#date').val();
        if (!passwordValidation(password)) {
            $('#password').css("box-shadow", "0px 0px 5px red");
            errro += 1;
        } else {
            $('#password').css("box-shadow", "0px 0px 5px green");
        }
        if (!passwordValidation(confirmPassword)) {
            $('#confirmPassword').css("box-shadow", "0px 0px 5px red");
            errro += 1;
        } else {
            $('#confirmPassword').css("box-shadow", "0px 0px 5px green");
        }
        if (error == 0) {
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        } else {
            e.preventDefault();
        }
    })
})