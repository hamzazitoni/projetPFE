import { questions, answers } from './exerciceContent.js';

let questionBoxe = document.getElementById('questionBoxe');
let afairDiv = document.getElementById('afair');
let answerBoxe = document.getElementById('answerBoxe');

export function putQuestionsAndAnswersInDom() {
    putQuestions();
    putAnswers();
}

function putQuestions() {
    questions.forEach(question => {
        let questionDiv = document.createElement('div');
        let content = document.createElement('p');

        content.classList.add('text-center');
        content.classList.add('QContent');
        questionDiv.classList.add('col-md-2');
        questionDiv.classList.add('col-sm-3');
        questionDiv.classList.add('col-xs-3');
        questionDiv.classList.add('mb-2');

        content.setAttribute('draggable', 'true');
        content.innerHTML = question.id;
        content.setAttribute('id', question.id);

        questionDiv.appendChild(content);
        questionBoxe.appendChild(questionDiv);
    })
}

function putAnswers() {
    answers.forEach(answer => {
        let answerDiv = document.createElement('div');
        let content = document.createElement('p');

        content.classList.add('text-center');
        content.classList.add('RContent');
        answerDiv.classList.add('col-md-4');
        answerDiv.classList.add('col-sm-3');
        answerDiv.classList.add('col-xs-3');
        answerDiv.classList.add('mb-2');

        content.innerHTML = answer.answerTiket;
        content.setAttribute('id', answer.answerTiket + answer.id);

        answerDiv.appendChild(content);
        answerBoxe.appendChild(answerDiv);
    })
}

export function putNextBTN(score) {
    let div = document.createElement('div');
    div.classList.add('col-4');
    let nextBTN = document.createElement('button');
    nextBTN.addEventListener('click', e => {
        console.log('nextBTN clicked');
    })
    nextBTN.innerHTML = "Suivant";
    nextBTN.setAttribute('id', 'nextBTN');
    nextBTN.classList.add('nextBTN');
    div.appendChild(nextBTN);
    afairDiv.appendChild(div);

}
export function putReDoBTN(score) {
    let div = document.createElement('div');
    div.classList.add('col-4');

    let putReDoBTN = document.createElement('button');
    putReDoBTN.addEventListener('click', e => {
        console.log('putReDoBTN clicked');
    })
    putReDoBTN.innerHTML = "Refaire";
    putReDoBTN.setAttribute('id', 'putReDoBTN');
    putReDoBTN.classList.add('putReDoBTN');

    div.appendChild(putReDoBTN);
    afairDiv.appendChild(div);

}

export function putSuccesBTN(score) {
    putReDoBTN(score);
    putNextBTN(score);
    putResultBTN(score);
}

export function putResultBTN(score) {
    let div = document.createElement('div');
    div.classList.add('col-4');

    let putResultBTN = document.createElement('button');
    putResultBTN.addEventListener('click', e => {
        console.log(score);
    })
    putResultBTN.innerHTML = 'Correction';
    putResultBTN.setAttribute('id', 'putResultBTN');
    putResultBTN.classList.add('putResultBTN');

    div.appendChild(putResultBTN);
    afairDiv.appendChild(div);

}