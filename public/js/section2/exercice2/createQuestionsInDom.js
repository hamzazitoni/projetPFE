import { questions, getQuestionById } from './exerciceContent.js';
import { main } from './main.js';

let adjectifDiv = document.getElementById('adjectifDiv');
let globaleScore = 0;
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
    if (areDragged.length >= 10) {
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
    let desavantageuxBoxe = document.getElementById('desavantage').children;
    let avantageuxBoxe = document.getElementById('avantage').children;
    for (let i = 0; i < desavantageuxBoxe.length; i++) {
        let item = desavantageuxBoxe[i];
        let questionItem = getQuestionById(+item.getAttribute('id'));
        if (questionItem.point == -1) {
            ++score;
        }
    }
    for (let j = 0; j < avantageuxBoxe.length; j++) {
        let item = avantageuxBoxe[j];
        let questionItem = getQuestionById(+item.getAttribute('id'));
        if (questionItem.point == 1) {
            ++score;
        }
    }
    globaleScore = score;
    $.get('http://127.0.0.1:8000/score/add', { score: +(+score * 2) + 2, sectionID: 2 },
        (data) => {
            document.getElementById('scoregeneral').innerHTML = data.score;
        })
    $.get('http://127.0.0.1:8000/vie/get', { add: 20 },
        (data) => {
            document.getElementById('progression').style.width = data.vie + "%";
        })
    document.getElementById('scoregame').innerHTML = score + " / " + 30 + " et vous avez +" + (+score * 2 + 2);
    setTimeout(() => {
        $('#statistiqueContent').show();
        $('#contentBoxe').hide();
        $('#descriptionBigBox').hide();
    }, 500);
})

document.getElementById('redoBTN').addEventListener('click', () => {
    $.get('http://127.0.0.1:8000/score/add', { decraseScore: globaleScore * 2, sectionID: 2 },
        (data) => {
            document.getElementById('scoregeneral').innerHTML = data.score;
        })
    $.get('http://127.0.0.1:8000/vie/get', { minus: 10 },
        (data) => {
            document.getElementById('progression').style.width = data.vie + "%";
        })
    setTimeout(() => {
        $('#statistiqueContent').hide();
        $('#contentBoxe').hide();
        //$('#appreciationcontent').hide();
        $('#descriptionBigBox').show();
    }, 500);
    document.getElementById('avantage').innerHTML = '';
    document.getElementById('desavantage').innerHTML = '';
    document.getElementById('adjectifDiv').innerHTML = '';
    disableValidationButton();
    globaleScore = 0;
    main();
})
