let questionsItems = document.querySelectorAll('.QContent');
let reponseBoxes = document.querySelectorAll('.RContent');

export function dragNdrop() {
    let draggedItem = null;
    console.log(questionsItems.length);
    /*for (let i = 0; i < questionsItems.length; i++) {
        const item = propositionsItems[i];
        item.addEventListener('dragstart', e => {
            draggedItem = item;
            console.log('dragstart');
        })

        item.addEventListener('dragend', e => {
            setTimeout(() => {
                draggedItem = null;
            }, 0)
            console.log('dragend');
        })

        for (let j = 0; j < reponseBoxes.length; j++) {
            const reponseBoxe = reponseBoxes[j];
            reponseBoxe.addEventListener('dragover', e => {
                e.preventDefault();
                console.log('over');
            })
            reponseBoxe.addEventListener('dragenter', e => {
                e.preventDefault();
                reponseBoxe.style.backgroundColor = 'rgb(34, 137, 233)';
                console.log('dragenter');
            })
            reponseBoxe.addEventListener('dragleave', e => {
                reponseBoxe.style.backgroundColor = 'white';
                console.log('leave');
            })
            reponseBoxe.addEventListener('drop', e => {
                draggedItem.classList.add('isDragged');
                reponseBoxe.appendChild(draggedItem);
                console.log('drop');
                reponseBoxe.style.backgroundColor = 'white';
                disableValidationButton();
            })
        }
    }*/
}