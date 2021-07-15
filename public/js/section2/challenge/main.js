import { verificationVie, finalPopup } from '../verificationVie.js';
import { questions as q, questionsRandom, getQuestionById, answersCount } from './verrous.js';

let score = 0;
let tentative = 0;
let goodAnswersCount = 0;

export function challenge1() {
    $('#challenge1').hide();
    let btns = document.querySelectorAll('.boutton');
    for (let i = 0; i < btns.length; i++) {
        let btn = btns[i];
        btn.addEventListener('click', () => {
            if (+btn.getAttribute('id') != 9) {
                ++tentative
                console.log(tentative)
                $.get('http://127.0.0.1:8000/vie/get', { minus: 8 },
                    (data) => {
                        document.getElementById('progression').style.width = data.vie + "%";
                    })
                verificationVie();
                $('.mauvaiseReponse').show();
                setTimeout(() => {
                    $('.mauvaiseReponse').hide();
                }, 2000)
            } else {
                setTimeout(function() {
                    challenge2();
                }, 3000)
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


export function challenge2() {
    $('#challenge1').hide();
    verificationVie();
    let testBoxe = document.getElementById('testBoxe');
    let verrous = questionsRandom(q);
    goodAnswersCount = answersCount(verrous);
    for (let i = 0; i < verrous.length; i++) {
        let question = verrous[i];
        let div = document.createElement('div');
        let btn = document.createElement('button');

        div.classList.add('col-6');
        div.classList.add('mb-3');

        btn.classList.add('verrousBTN');
        btn.innerHTML = question.content;
        btn.setAttribute('id', question.id);

        btn.addEventListener('click', () => {
            let question = getQuestionById(+btn.getAttribute('id'));
            if (question.status) {
                ++score;
                btn.classList.add('succesBTN');
                showFinalTestPopUp();
            } else {
                ++tentative;
                console.log(tentative)
                btn.classList.add('errorBTN');
                $('#tentiveMessage').show();
                $.get('http://127.0.0.1:8000/vie/get', { minus: 8 },
                    (data) => {
                        document.getElementById('progression').style.width = data.vie + "%";
                    })
                setTimeout(() => {
                    btn.classList.remove('errorBTN');
                    $('#tentiveMessage').hide();
                }, 2000)
                verificationVie();
            }
        });
        div.appendChild(btn);
        testBoxe.appendChild(div);
    }
    $('#challenge2').show();
}

export function showFinalTestPopUp() {
    if (score == goodAnswersCount) finalPopup();
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
    document.getElementById('nextSection').addEventListener('click', () => {
        $.get('http://127.0.0.1:8000/stars/add', { sectionID: 2, star: 1 });
    })

    $('#statistiqueContent').hide();
    $('.mauvaiseReponse').hide();
    $('.vie').hide();
    $('#challenge2').hide();
    $('#final').hide();
    $('#tentiveMessage').hide();
    verificationVie();
    challenge1();

})
