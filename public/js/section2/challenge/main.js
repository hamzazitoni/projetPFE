import { verificationVie } from '../verificationVie.js';

export function challenge1() {
    $('#challenge1').hide();
    let btns = document.querySelectorAll('.boutton');
    for (let i = 0; i < btns.length; i++) {
        let btn = btns[i];
        btn.addEventListener('click', () => {
            if (+btn.getAttribute('id') != 9) {
                $.get('http://127.0.0.1:8000/vie/get', { minus: 8 },
                    (data) => {
                        document.getElementById('progression').style.width = data.vie + "%";
                    })
                $('.mauvaiseReponse').show();
                setTimeout(() => {
                    verificationVie();
                }, 3000)
                setTimeout(() => {
                    $('.mauvaiseReponse').hide();
                }, 2000)
            }
        })
        btn.addEventListener('mouseover', () => {
            btn.innerHTML = btn.getAttribute('id');
            btn.style.borderRadius = '20px';
        })
        btn.addEventListener('mouseleave', () => {
            btn.innerHTML = "<i class='fas fa-question'></i>";
            btn.style.borderRadius = '0px';
        })
    }

    document.getElementById('showPartieBtn').addEventListener('click', () => {
        $('#descriptionBigBox').hide();
        $('#challenge1').show();
    })
}

$(function() {
    $.get('http://127.0.0.1:8000/score/add', { sectionID: 2 },
        (data) => {
            document.getElementById('scoregeneral').innerHTML = data.score;
        })
    $.get('http://127.0.0.1:8000/vie/get',
        (data) => {
            document.getElementById('progression').style.width = data.vie + "%";
        })
    $('#statistiqueContent').hide();
    $('.mauvaiseReponse').hide();
    $('.vie').hide();
    //verificationVie();
    challenge1();
})