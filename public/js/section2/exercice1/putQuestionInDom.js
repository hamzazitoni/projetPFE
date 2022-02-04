import { getShuffleQuestions, questions as q, getQuestionById } from '../exercice2/exerciceContent.js';
import { main } from './main.js';
let questions = getShuffleQuestions(q);

let adjectifDiv = document.getElementById('adjectifDiv');
let globalScore = 0;
export function createQuestionsInDom() {
    questions.forEach(question => {
        let questionDiv = document.createElement('div');
        let content = document.createElement('p');

        questionDiv.classList.add('col-md-3');
        questionDiv.classList.add('col-sm-4');
        questionDiv.classList.add('col-xs-6');

        content.innerHTML = question.contenu;
        content.classList.add('questionContentItem');
        content.classList.add('text-center');
        content.setAttribute('id', question.id);
        content.setAttribute('draggable', 'true');

        questionDiv.appendChild(content);

        adjectifDiv.appendChild(questionDiv);
    })
}

export function disableValidationButton() {
    let areDragged = document.querySelectorAll('.isDragged');
    if (areDragged.length >= 15) {
        validationBtn.removeAttribute("disabled");
        validationBtn.style.backgroundColor = 'rgb(0, 119, 255)';
        validationBtn.style.color = 'white';
    } else {
        validationBtn.disabled = true;
        validationBtn.style.backgroundColor = '';
    }
}

validationBtn.addEventListener("click", () => {
    let score = 0;
    let avantageuxBoxe = document.getElementById('reponseBoxe').children;
    for (let i = 0; i < avantageuxBoxe.length; i++) {
        let item = avantageuxBoxe[i];
        let questionItem = getQuestionById(+item.getAttribute('id'));
        if (questionItem.point == -1) {
            ++score;
        } else {
            --score;
        }
    }
    globalScore = score;

    document.getElementById('scoregame').innerHTML = globalScore + " / " + 30 + " et vous avez + " + (+score * 2 + 2);
    if (globalScore <= 0) {
        document.getElementById('btnNext').setAttribute('disabled', 'disabled');
        document.getElementById('scoregame').innerHTML = score + " / " + 30 + " et vous avez + " + 0;
    }
    if (score >= 6) {
        document.getElementById('appreciationcontent').innerHTML = 'Vous êtes considéré comme supérieur à la moyenne dans le dommaine de la créativité.'
    } else {
        document.getElementById('appreciationcontent').innerHTML = 'Vous êtes considéré comme inférieur à la moyenne dans le dommaine de la créativité.'
    }
    setTimeout(() => {
        $('#statistiqueContent').show();
        $('#contentBoxe').hide();
        $('#descriptionBigBox').hide();
    }, 500);
})

document.getElementById('btnNext').addEventListener('click', () => {
    $.get('http://127.0.0.1:8000/score/add', { score: globalScore * 2, sectionID: 2 },
        (data) => {
            document.getElementById('scoregeneral').innerHTML = data.score;
        })
    $.get('http://127.0.0.1:8000/vie/get', { add: 20 },
        (data) => {
            document.getElementById('progression').style.width = data.vie + "%";
        })
})

document.getElementById('redoBTN').addEventListener('click', () => {
    globalScore = 0;
    setTimeout(() => {
        $('#statistiqueContent').hide();
        $('#contentBoxe').hide();
        $('#descriptionBigBox').show();
    }, 500);
    document.getElementById('reponseBoxe').innerHTML = '';
    document.getElementById('adjectifDiv').innerHTML = '';
    disableValidationButton();
    document.getElementById('appreciationcontent').innerHTML = '';
    main();
})
