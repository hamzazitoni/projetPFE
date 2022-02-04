import { putQuestionsAndAnswersInDom } from './putQuestionsAndAnswersInDom.js';
import { getQuestionById, getAnswerById } from './exerciceContent.js';
import { putSuccesBTN } from './putQuestionsAndAnswersInDom.js';

putQuestionsAndAnswersInDom();

$(function() {
    $('.statistiqueContent').hide();
    let questionsItems = document.querySelectorAll('.QContent');
    let reponseBoxes = document.querySelectorAll('.RContent');

    let draggedItem = null;
    let score = 0;
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
                    document.getElementById('progression').style.width = score * 11.12 + "%";
                    ok = false;
                }
                if (document.getElementById('questionBoxe').childNodes.length - 1 == 0) {
                    let text = +(score * 2 + 2) + " / " + 20;
                    $('.scoregame').text(text);
                    if (score >= 1) {
                        $('.questionsBoxeContainer').hide(3000);
                        $('.decission').text("Vous avez réussit cet exercice à plus de 50%, choisissez une des actions ci-dessous.");
                        putSuccesBTN(score);
                        setTimeout(() => {
                            $('.statistiqueContent').show();
                        }, 1000);
                    } else {
                        putReDoBTN();
                    }
                }
            })
        }
    }
})

//----------------------------------main content----------
import { putQuestionsAndAnswersInDom } from './putQuestionsAndAnswersInDom.js';
import { getQuestionById, getAnswerById } from './exerciceContent.js';


putQuestionsAndAnswersInDom();

$(function() {
    console.log(2)
    $('.statistiqueContent').hide();
    let questionsItems = document.querySelectorAll('.QContent');
    let reponseBoxes = document.querySelectorAll('.RContent');

    let draggedItem = null;
    let score = 0;
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
                    document.getElementById('progression').style.width = score * 11.12 + "%";
                    ok = false;
                }
                if (document.getElementById('questionBoxe').childNodes.length - 1 == 0) {
                    let text = +(score * 2 + 2) + " / " + 20;
                    $('.scoregame').text(text);
                    if (score >= 5) {
                        $('.questionsBoxeContainer').hide(3000);
                        $('.decission').text("Vous avez réussit cet exercice à plus de 50%, choisissez une des actions ci-dessous.");
                        $('.statistiqueContent').show(10000);
                    } else {

                    }
                }
            })
        }
    }
})

/**
Obstacle, ce qui bloque une action.

Définitions du blocage mental. une incapacité à se souvenir
ou à penser à quelque chose que vous pouvez normalement faire ;
souvent causée par une tension émotionnelle.
par exemple je connaisais bien son n nom mais j'ai oublier
 */
