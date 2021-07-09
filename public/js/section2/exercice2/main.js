import { createQuestionsInDom, disableValidationButton } from './createQuestionsInDom.js';

createQuestionsInDom();

disableValidationButton();

let propositionsItems = document.querySelectorAll('.questionContentItem');
let reponseBoxes = document.querySelectorAll('.reponseBoxe');

let draggedItem = null;

for (let i = 0; i < propositionsItems.length; i++) {
    const item = propositionsItems[i];
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
            reponseBoxe.style.backgroundColor = 'rgb(34, 137, 233)';
            disableValidationButton();
        })
        reponseBoxe.addEventListener('dragleave', e => {
            reponseBoxe.style.backgroundColor = 'white';
            disableValidationButton();
        })
        reponseBoxe.addEventListener('drop', e => {
            draggedItem.classList.add('isDragged');
            reponseBoxe.appendChild(draggedItem);
            reponseBoxe.style.backgroundColor = 'white';
            disableValidationButton();
        })
    }
}
