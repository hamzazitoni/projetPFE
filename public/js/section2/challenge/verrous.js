export const questions = [{
        id: 1,
        content: "La bonne repose",
        status: true,
    },
    {
        id: 2,
        content: "C'est n'est pas logique",
        status: true,

    },
    {
        id: 3,
        content: "Suivre les règles",
        status: true,

    },
    {
        id: 4,
        content: "Etre créatif",
        status: true,

    },
    {
        id: 5,
        content: "Ce  n'est pas mon domaine",
        status: true,

    },
    {
        id: 6,
        content: "Ne pas être déraisonnable",
        status: true,

    },
    {
        id: 7,
        content: "Eviter toute ambiguité",
        status: true,

    },
    {
        id: 8,
        content: "Je ne suis pas créatif",
        status: true,

    },
    {
        id: 9,
        content: "Se tromper est impardonnable",
        status: true,
    },
    {
        id: 10,
        content: "Je suis inventif",
        status: false,
    },
    {
        id: 11,
        content: "La compréhension",
        status: false,
    },
    {
        id: 12,
        content: "Le raisonnement",
        status: false,
    },
    {
        id: 13,
        content: "La vérité",
        status: false,
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

export function questionsRandom(questions) {
    questions.sort(() => Math.random() - 0.5);
    let seletedQuestions = [];
    for (let i = 0; i < questions.length; i++) {
        if (i == 10) break;
        seletedQuestions.push(questions[i]);
    }
    return seletedQuestions;
}

export function answersCount(questions) {
    let count = 0;
    for (let i = 0; i < questions.length; i++) {
        if (questions[i].status) ++count;
    }

    return count;
}
