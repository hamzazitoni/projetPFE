import { questions as Q, answers as A } from '../exerciceContent.js';
import { questionsRandom, answersRandom } from '../exerciceContent.js';

let questions = questionsRandom(Q);
let answers = answersRandom(A);

let questionBoxe = document.getElementById('questionBoxe');
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

export function putQuestionsInDescription() {
    questions.forEach(question => {
        let questionDiv = document.getElementById('questionsContainer');
        let content = document.createElement('p');

        content.innerHTML = question.id + " - " + question.content;
        questionDiv.appendChild(content);
    })
}


export function putAnswersInDescription() {
    answers.forEach(answer => {
        let answerDiv = document.getElementById('answersContainer');
        let content = document.createElement('p');

        content.innerHTML = answer.answerTiket + " - " + answer.content;

        answerDiv.appendChild(content);
    })
}
