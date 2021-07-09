export const questions = [{
        id: 1,
        content: "La bonne...",
        answerId: [4]
    },
    {
        id: 2,
        content: "C'est n'est pas...",
        answerId: [5, 8]
    },
    {
        id: 3,
        content: "Suivre ...",
        answerId: [7]
    },
    {
        id: 4,
        content: "Etre ...",
        answerId: [5]
    },
    {
        id: 5,
        content: "Ce ... n'est pas.",
        answerId: [1]
    },
    {
        id: 6,
        content: "Ne pas être ...",
        answerId: [5, 6]
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
        content: "déraisonnement",
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
    return questions[id - 1];
}

export function getAnswerById(id) {
    return answers[id - 1];
}