export const questions = [{
        id: 1,
        content: "La bonne...",
        answerId: [4]
    },
    {
        id: 2,
        content: "C'est n'est pas...",
        answerId: [8]
    },
    {
        id: 3,
        content: "Suivre les ...",
        answerId: [7]
    },
    {
        id: 4,
        content: "Etre ...",
        answerId: [5, 9]
    },
    {
        id: 5,
        content: "Ce  ... mon domaine",
        answerId: [1]
    },
    {
        id: 6,
        content: "Ne pas être ...",
        answerId: [6]
    },
    {
        id: 7,
        content: "Eviter toute ...",
        answerId: [2]
    },
    {
        id: 8,
        content: "Je ne suis pas ...",
        answerId: [5, 9]
    },
    {
        id: 9,
        content: "Se tromper est ...",
        answerId: [3]
    }
];

export const answers = [{
        id: 1,
        content: "n'est pas",
        answerId: [4],
        answerTiket: 'A'
    },
    {
        id: 2,
        content: "ambiguité",
        answerTiket: 'C'
    },
    {
        id: 3,
        content: "impardonnable",
        answerTiket: 'F'
    },
    {
        id: 4,
        content: "réponse",
        answerTiket: 'J'
    },
    {
        id: 5,
        content: "créatif",
        answerTiket: 'X'
    },
    {
        id: 6,
        content: "déraisonnable",
        answerTiket: 'Z'
    },
    {
        id: 7,
        content: "règles",
        answerTiket: 'B'
    },
    {
        id: 8,
        content: "logique",
        answerTiket: 'E'
    },
    {
        id: 9,
        content: "créatif",
        answerTiket: 'K'
    }
];

export function getQuestionById(id) {
    let question = null;
    questions.forEach(q => {
        if (q.id == +id) {
            question = q;
        }
    })
    return question;
}

export function getAnswerById(id) {
    let answer = null;
    answers.forEach(a => {
        if (a.id == +id) {
            answer = a;
        }
    })
    return answer;
}

export function questionsRandom(questions) {
    questions.sort(() => Math.random() - 0.5);
    return questions;
}

export function answersRandom(answers) {
    answers.sort(() => Math.random() - 0.5);
    return answers;
}
