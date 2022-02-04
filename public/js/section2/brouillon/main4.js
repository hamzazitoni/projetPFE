import { putQuestionsAndAnswersInDom } from '../exercice4/putQuestionsAndAnswersInDom.js';
import { putSuccesBTN } from '../exercice4/putQuestionsAndAnswersInDom.js';

import { getQuestionById, getAnswerById } from '../exercice4/exerciceContent.js';


putQuestionsAndAnswersInDom();

$(function() {
    $('.statistiqueContent').hide();
    let questionsItems = document.querySelectorAll('.QContent');
    let reponseBoxes = document.querySelectorAll('.RContent');

    let draggedItem = null;
    let score = 0;
    let tentative = 0;
    /*for (let i = 0; i < questionsItems.length; i++) {
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
                    document.getElementById(question.id).parentElement.remove();
                    ok = true;
                } else {
                    document.getElementById(question.id).
                    reponseBoxe.classList.add('nokDragged');
                    reponseBoxe.style.backgroundColor = "red";
                }
                if (ok) {
                    ++score;
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
    }*/
})
