import { main } from './exercice3/main.js';
let afairDiv = document.getElementById('afair');
let tentative = 0;
let finalScore = 0;


export function putNextBTN(score) {
    let div = document.createElement('div');
    let link = document.createElement('a');
    link.href = "/home";
    div.classList.add('col-4');
    let nextBTN = document.createElement('button');

    nextBTN.innerHTML = "Suivant";
    nextBTN.setAttribute('id', 'nextBTN');
    nextBTN.classList.add('nextBTN');

    if (score < 6) {
        nextBTN.setAttribute('disabled', 'disabled');
    }
    nextBTN.addEventListener('click', e => {
        ++tentative;
        finalScore = score;
        $.get('http://127.0.0.1:8000/score/add', { score: score, sectionID: 2 },
            (data) => {
                document.getElementById('scoregeneral').innerHTML = data.score;
            })
        $.get('http://127.0.0.1:8000/vie/get', { add: 10 },
            (data) => {
                document.getElementById('progression').style.width = data.vie + "%";
            })
    })
    link.appendChild(nextBTN)
    div.appendChild(link);
    afairDiv.appendChild(div);

    return tentative;
}
export function putReDoBTN(score) {
    let div = document.createElement('div');
    div.classList.add('col-4');

    let putReDoBTN = document.createElement('button');

    if (tentative >= 4) {
        putReDoBTN.setAttribute('disabled', 'disabled');
    }
    putReDoBTN.addEventListener('click', e => {
        ++tentative;
        finalScore = score;
        setTimeout(() => {
            $('.statistiqueContent').hide();
            document.getElementById('answerBoxe').innerHTML = '';
            document.getElementById('afair').innerHTML = '';
            $.get('http://127.0.0.1:8000/vie/get', { minus: 5 },
                (data) => {
                    document.getElementById('progression').style.width = data.vie + "%";
                })
            main();
            $('.questionsBoxeContainer').show();
        }, 1000)
    })
    putReDoBTN.innerHTML = "Refaire";
    putReDoBTN.setAttribute('id', 'putReDoBTN');
    putReDoBTN.classList.add('putReDoBTN');

    div.appendChild(putReDoBTN);
    afairDiv.appendChild(div);

}

export function putResultBTN(score) {
    let div = document.createElement('div');
    div.classList.add('col-4');

    let putResultBTN = document.createElement('button');

    putResultBTN.innerHTML = 'Correction';
    putResultBTN.setAttribute('id', 'putResultBTN');
    putResultBTN.classList.add('putResultBTN');
    if (score < 6 && tentative < 4) {
        putResultBTN.setAttribute('disabled', 'disabled');
    }

    putResultBTN.addEventListener('click', e => {
        ++tentative;
        finalScore = score;
        console.log(tentative, finalScore);
    })

    div.appendChild(putResultBTN);
    afairDiv.appendChild(div);

}
