import { questions } from './exerciceContent.js';

let adjectifDiv = document.getElementById('adjectifDiv');

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
        content.setAttribute('draggable', 'true');

        questionDiv.appendChild(content);

        adjectifDiv.appendChild(questionDiv);
    })
}

export function disableValidationButton() {
    let areDragged = document.querySelectorAll('.isDragged');
    if (areDragged.length != 0) {
        validationBtn.removeAttribute("disabled");
        validationBtn.style.backgroundColor = 'rgb(0, 119, 255)';
        validationBtn.style.color = 'white';
    } else {
        validationBtn.disabled = true;
        validationBtn.style.backgroundColor = '';
    }
}

validationBtn.addEventListener("click", () => {
    console.log('click');
})
