import { main } from './exercice3/main.js';
let afairDiv = document.getElementById('afair');
let tentative = 0;
let finalScore = 0;


export function putNextBTN(score) {
    let div = document.createElement('div');
    let link = document.createElement('a');
    link.href = "/home/section/2/cours/s2_exercice2";
    div.classList.add('col-6');
    let nextBTN = document.createElement('button');

    nextBTN.innerHTML = "Commencer la partie suivante";
    nextBTN.setAttribute('id', 'nextBTN');
    nextBTN.classList.add('nextBTN');
    nextBTN.classList.add('BTN');

    if (score < 5) {
        nextBTN.setAttribute('disabled', 'disabled');
    }
    nextBTN.addEventListener('click', e => {
        ++tentative;
        finalScore = score;
        $.get('http://127.0.0.1:8000/score/add', { score: +(score * 2) + 2, sectionID: 2 },
            (data) => {
                document.getElementById('scoregeneral').innerHTML = data.score;
            })
        $.get('http://127.0.0.1:8000/vie/get', { add: 25 },
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
    div.classList.add('col-6');

    let putReDoBTN = document.createElement('button');
    putReDoBTN.classList.add('BTN');

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
            main();
            $('#descriptionBigBox').show();
            $('#testContent').show();
        }, 1000)
    })
    putReDoBTN.innerHTML = "Refaire la partie";
    putReDoBTN.setAttribute('id', 'putReDoBTN');
    putReDoBTN.classList.add('putReDoBTN');

    div.appendChild(putReDoBTN);
    afairDiv.appendChild(div);
}

/*export function putResultBTN(score) {
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

}*/
