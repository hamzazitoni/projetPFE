import { putQuestionsAndAnswersInDom, putQuestionsInDescription, putAnswersInDescription } from './putQuestionsAndAnswersInDom.js';
import { getQuestionById, getAnswerById } from '../exerciceContent.js';
import { putReDoBTN, putNextBTN } from '../putBTN.js';

export function main() {
    putQuestionsAndAnswersInDom();
    $('.statistiqueContent').hide();
    $('.descritionBox').hide();
    document.getElementById('showPartieBtn').addEventListener('click', () => {
        $('#descriptionBigBox').hide();
        $('.descritionBox').show();
        $('.questionsBoxeContainer').show();
    })
    let questionsItems = document.querySelectorAll('.QContent');
    let reponseBoxes = document.querySelectorAll('.RContent');

    let draggedItem = null;
    let score = 0;
    let tentative = 0;
    for (let i = 0; i < questionsItems.length; i++) {
        let ok = false;
        const item = questionsItems[i];
        item.addEventListener('dragstart', e => {
            draggedItem = item;
        })

        item.addEventListener('dragend', e => {
            setTimeout(() => {
                draggedItem = null;
            }, 0)
        })

        for (let j = 0; j < reponseBoxes.length; j++) {
            const reponseBoxe = reponseBoxes[j];
            reponseBoxe.addEventListener('dragover', e => {
                e.preventDefault();
            })
            reponseBoxe.addEventListener('dragenter', e => {
                e.preventDefault();
            })
            reponseBoxe.addEventListener('dragleave', e => {})
            reponseBoxe.addEventListener('drop', e => {
                let question = getQuestionById(+draggedItem.getAttribute('id'));
                let answer = getAnswerById(+reponseBoxe.getAttribute('id')[1]);
                if (question.answerId.includes(answer.id)) {
                    reponseBoxe.classList.add('okDragged');
                    reponseBoxe.style.backgroundColor = "green";
                    ok = true;
                } else {
                    reponseBoxe.classList.add('nokDragged');
                    reponseBoxe.style.backgroundColor = "red";
                }
                document.getElementById(question.id).parentElement.remove();
                if (ok) {
                    score++;
                    ok = false;
                }
                if (document.getElementById('questionBoxe').childNodes.length - 1 == 0) {
                    let text = +(score * 2) + " / " + 20;
                    if (score == 9) {
                        text = +(score * 2) + 2 + " / " + 20;
                    }
                    $('.scoregame').text(text);
                    if (score >= 5) {
                        setTimeout(() => {
                            $('.questionsBoxeContainer').hide();
                        }, 2000);
                        $('.decission').text("Vous avez réussit cet exercice à plus de 50%, choisissez une des actions ci-dessous.");
                        putReDoBTN(score);
                        tentative = putNextBTN(score);
                        setTimeout(() => {
                            $('#testContent').hide();
                            $('.statistiqueContent').show();
                        }, 2000);
                    } else {
                        setTimeout(() => {
                            $('.questionsBoxeContainer').hide();
                            $('#descritionBox').hide();
                            $('#testContent').hide();
                        }, 2000);
                        $('.decission').text("Vous n'avez pas réussit cet exercice à plus de 50%, vous devez le refaire.");
                        putReDoBTN(score);
                        putNextBTN(score);
                        setTimeout(() => {
                            $('.statistiqueContent').show();
                        }, 2000);
                    }
                }
            })
        }
    }
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
    $('.questionsBoxeContainer').hide();
    putQuestionsInDescription();
    putAnswersInDescription();
    main();
})
