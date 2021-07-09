import { putQuestionsAndAnswersInDom } from './putQuestionsAndAnswersInDom.js';
import { getQuestionById, getAnswerById } from './exerciceContent.js';

putQuestionsAndAnswersInDom();

$(function() {
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
                    console.log(score)
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
                    console.log('yes')
                }
            })
        }
    }
})